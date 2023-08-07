<?php

declare(strict_types=1);

namespace App\Tests\Context;

use Imbo\BehatApiExtension\Context\ApiContext;
use PHPUnit\Framework\Assert;

class HydraApiContext extends ApiContext
{
    private ?array $responseJson = null;

    private ?string $token = null;

    /**
     * @Given I am authenticated as :username with password :password
     */
    public function iAmAuthenticatedAsWithPassword($username, $password): void
    {
        $data = [
            'username' => $username,
            'password' => $password,
        ];

        $this->setRequestBody(json_encode($data));
        $this->addRequestHeader('Content-Type', 'application/json');

        $this->requestPath('/api/login_check', 'POST');
        $this->sendRequest();
        $responseJson = json_decode($this->response->getBody()->getContents(), true);
        $token = $responseJson['token'];

        // Store the token in the context
        $this->token = $token;
    }

    /**
     * @Given I am authenticating with username :username and password :password
     */
    public function iAmAuthenticatingWithUsernameAndPassword($username, $password): void
    {
        $data = [
            'username' => $username,
            'password' => $password,
        ];

        $this->setRequestBody(json_encode($data));
        $this->addRequestHeader('Content-Type', 'application/json');
    }

    /**
     * @Given I am not authenticated
     */
    public function iAmNotAuthenticated(): void
    {
        $this->token = null;
    }

    /**
     * @When I request a :resourcePath resource with key :key and value :value
     */
    public function iRequestAResourceWithKeyAndValue($resourcePath, $key, $value): void
    {
        $url = sprintf('%s?%s=%s', $resourcePath, $key, $value);
        $this->requestPath($url);
        $responseJson = json_decode($this->response->getBody()->getContents(), true);

        if (isset($responseJson['hydra:member'][0]['id'])) {
            $id = $responseJson['hydra:member'][0]['id'];

            $this->requestPath($resourcePath.'/'.$id);
        } else {
            Assert::assertFalse(true, 'Invalid response format. Missing "hydra:member" or "id"');
        }
    }

    /**
     * @When I request :path with HTTP :method
     */
    public function iRequestWithHttp($path, $method): void
    {
        // If the token is not null, add the Authorization header with the bearer token
        if (null !== $this->token) {
            $this->addRequestHeader('Authorization', 'Bearer '.$this->token);
        }

        $this->requestPath($path, $method);
        $this->sendRequest();
    }

    /**
     * @Then the response hydra collection is an empty JSON array
     */
    public function theResponseCollectionIsEmptyJsonArray(): void
    {
        $this->theResponseKeyIsEmptyJsonArray('hydra:member');
    }

    /**
     * @Then the response collection is a JSON array of length :length
     */
    public function theResponseCollectionIsJsonArrayOfLength($length): void
    {
        $this->theResponseKeyIsJsonArrayOfLength('hydra:member', $length);
    }

    /**
     * @Then the response collection item does not have a JSON key :key
     */
    public function theResponseCollectionItemDoesNotHaveAJsonKey($key): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        // Check if the key exists in any element of the "hydra:member" array
        foreach ($this->responseJson['hydra:member'] as $element) {
            if (isset($element[$key])) {
                // Key found, fail the step
                Assert::assertFalse(true, "Key '{$key}' found in the response hydra collection.");
            }
        }
    }

    /**
     * @Then the response collection item has a JSON key :key
     */
    public function theResponseCollectionItemHasAJsonKey($key): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        // Check if the key exists in any element of the "hydra:member" array
        foreach ($this->responseJson['hydra:member'] as $element) {
            if (isset($element[$key])) {
                return; // Key found, so the step passes
            }
        }

        // Key not found in any element, fail the step
        Assert::assertFalse(true, "Key '{$key}' not found in the response hydra collection.");
    }

    /**
     * @Then the response hydra total items is :totalItems
     */
    public function theResponseHydraTotalItemsIs($totalItems): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        Assert::assertArrayHasKey('hydra:totalItems', $this->responseJson);
        Assert::assertEquals((int) $totalItems, $this->responseJson['hydra:totalItems']);
    }

    /**
     * @Then the response key :key contains array item :expectedValue
     */
    public function theResponseKeyContainsArrayItem($key, $expectedValue): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        $this->theResponseKeyIsAJsonArray($key);

        Assert::assertContains($expectedValue, $this->responseJson[$key]);
    }

    /**
     * @Then the response key :key does not exist
     */
    public function theResponseKeyDoesNotExist($key): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        Assert::assertArrayNotHasKey($key, $this->responseJson);
    }

    /**
     * @Then the response key :key exists
     */
    public function theResponseKeyExists($key): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        Assert::assertArrayHasKey($key, $this->responseJson);
    }

    /**
     * @Then the response key :key is :expectedValue
     */
    public function theResponseKeyIs($key, $expectedValue): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        Assert::assertArrayHasKey($key, $this->responseJson);
        Assert::assertEquals($expectedValue, $this->responseJson[$key]);
    }

    /**
     * @Then the response key :key is a JSON array
     */
    public function theResponseKeyIsAJsonArray($key): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        Assert::assertArrayHasKey($key, $this->responseJson);
        Assert::assertIsArray($this->responseJson[$key]);
    }

    /**
     * @Then the response key :key is an empty JSON array
     */
    public function theResponseKeyIsEmptyJsonArray($key): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        Assert::assertArrayHasKey($key, $this->responseJson);
        Assert::assertIsArray($this->responseJson[$key]);
        Assert::assertEmpty($this->responseJson[$key]);
    }

    /**
     * @Then the response key :key is a JSON array of length :length
     */
    public function theResponseKeyIsJsonArrayOfLength($key, $length): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        Assert::assertArrayHasKey($key, $this->responseJson);
        Assert::assertIsArray($this->responseJson[$key]);
        Assert::assertCount((int) $length, $this->responseJson[$key]);
    }

    /**
     * @Then the response key :key matches :pattern
     */
    public function theResponseKeyMatches($key, $pattern): void
    {
        if (null === $this->responseJson) {
            $this->responseJson = json_decode($this->response->getBody()->getContents(), true);
        }

        Assert::assertArrayHasKey($key, $this->responseJson);
        Assert::assertMatchesRegularExpression($pattern, $this->responseJson[$key]);
    }
}
