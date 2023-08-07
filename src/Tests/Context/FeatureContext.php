<?php

declare(strict_types=1);

namespace App\Tests\Context;

use Behat\Behat\Context\Context;
use Behat\Behat\Hook\Scope\AfterFeatureScope;
use Behat\Behat\Hook\Scope\AfterScenarioScope;
use Behat\Behat\Hook\Scope\BeforeFeatureScope;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behat\Testwork\Hook\Scope\BeforeSuiteScope;
use Symfony\Component\Dotenv\Dotenv;

class FeatureContext implements Context
{
    private static $container;

    /**
     * @AfterScenario
     */
    public function after(AfterScenarioScope $scope): void
    {
        $this->cleanUpData();
        // var_dump('after scenario');
    }

    /**
     * @BeforeScenario
     */
    public function before(BeforeScenarioScope $scope)
    {
        // Code to set up the database with test data
        // e.g., loading fixtures, creating test data, etc.
        // TODO: Create data fixtures specifically for testing which can be loaded quickly
        // var_dump('before scenario');
    }

    /**
     * @BeforeSuite
     */
    public static function bootstrapSymfony(BeforeSuiteScope $scope): void
    {
        // Load environment variables from .env.test
        $envFilePath = __DIR__.'/../../../.env.dev.local';

        if (file_exists($envFilePath)) {
            (new Dotenv())->loadEnv($envFilePath);
            // var_dump('loaded env file: ');
        }

        $loginPath = getenv('LOGIN_PATH');
        $testPassword = getenv('TEST_PASSWORD');
        // var_dump('$loginPath: '.$loginPath);
        // var_dump('$testPassword: '.$testPassword);

        require_once __DIR__.'/../../../vendor/autoload.php';
        $kernel = new \App\Kernel('dev', true);
        $kernel->boot();

        self::$container = $kernel->getContainer();
    }

    /**
     * @BeforeFeature
     */
    public static function setupFeature(BeforeFeatureScope $scope)
    {
    }

    /**
     * @AfterFeature
     */
    public static function teardownFeature(AfterFeatureScope $scope)
    {
    }

    private function cleanUpData(): void
    {
        $em = self::$container->get('doctrine')->getManager();
        $em->getConnection()->executeQuery('DELETE FROM region WHERE region_code = "NEW_REGION"');
        $em->getConnection()->executeQuery('DELETE FROM country WHERE country_code = "XX"');
        $em->getConnection()->executeQuery('DELETE FROM place WHERE place_name = "Test Place"');
        $em->getConnection()->executeQuery('DELETE FROM user WHERE email = "test.user@example.com"');
        $em->flush();
    }
}
