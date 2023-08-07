@auth
Feature: Test User authentication

  Scenario Outline: Test User authentication with multiple users
    Given I am authenticating with username "<email>" and password "<password>"
    When I request "/api/login_check" using HTTP POST
    Then the response code is "200"
    And the response key "token" exists
    Examples:
      | email                   | password    |
      | admin1@example.com      | Travel123   |
      | editor1@example.com     | Travel123   |
      | moderator1@example.com  | Travel123   |
      | user1@example.com       | Travel123   |
      | user2@example.net       | Travel123   |

    Scenario: Test authentication with invalid credentials
      Given I am authenticating with username "invalid.user@example.com" and password "Travel123"
      When I request "/api/login_check" using HTTP POST
      Then the response code is "401"

    Scenario: Test unauthenticated user
        Given I am not authenticated
        When I request "/api/users" with HTTP "GET"
        Then the response code is "401"

    Scenario: Test authorised authenticated user
      Given I am authenticated as "admin1@example.com" with password "Travel123"
      When I request "/api/users" with HTTP "GET"
      Then the response code is "200"

    Scenario: Test unauthorised authenticated user
      Given I am authenticated as "user1@example.com" with password "Travel123"
      When I request "/api/users" with HTTP "GET"
      Then the response code is "403"
