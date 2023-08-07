@country
Feature: Test Country resources
  Scenario: Test collection of Country resources
    Given I am not authenticated
    When I request "/api/countries"
    Then the response code is "200"
    And the response key "@context" is "/api/contexts/Country"
    And the response key "@id" is "/api/countries"
    And the response key "@type" is "hydra:Collection"
    And the response key "hydra:totalItems" is "136"
    And the response collection is a JSON array of length "136"
    And the response collection item has a JSON key "@id"
    And the response collection item has a JSON key "@type"
    And the response collection item has a JSON key "briefDescription"
    And the response collection item has a JSON key "countryCode"
    And the response collection item has a JSON key "countryName"
    And the response collection item has a JSON key "sortOrder"

  Scenario: Test single Country resource response properties
    Given I am not authenticated
    When I request "/api/countries/GB"
    Then the response code is "200"
    And the response key "@context" is "/api/contexts/Country"
    And the response key "@id" is "/api/countries/GB"
    And the response key "@type" is "Country"
    And the response key "atm" exists
    And the response key "briefDescription" exists
    And the response key "capital" exists
    And the response key "countryCode" exists
    And the response key "countryName" exists
    And the response key "currency" exists
    And the response key "electricity" exists
    And the response key "imageTags" is a JSON array
    And the response key "language" exists
    And the response key "longDescription" exists
    And the response key "mobilePhone" exists
    And the response key "places" is a JSON array
    And the response key "region" exists
    And the response key "shortDescription" exists
    And the response key "sortOrder" exists

  Scenario Outline: Test single Country resources
    Given I am not authenticated
    When I request "/api/countries/<country_code>"
    Then the response code is "200"
    And the response key "@id" is "/api/countries/<country_code>"
    And the response key "countryCode" is "<country_code>"
    And the response key "capital" is "<capital>"
    And the response key "countryName" is "<country_name>"
    And the response key "currency" is "<currency>"
    And the response key "electricity" is "<electricity>"
    And the response key "longDescription" matches "~<long_description>~"
    And the response key "places" is a JSON array of length "<place_count>"
    And the response key "region" is "<region>"
    And the response key "shortDescription" matches "~<short_description>~"
    And the response key "sortOrder" is "<sort_order>"

  Examples:
    | country_code | capital          | country_name      | currency              | electricity | long_description  | place_count | region                      | short_description     | sort_order |
    | GB           | London           | United Kingdom    | Pound sterling        | 230V, 50Hz  | Aut quis tempora  | 10          | /api/regions/EUROPE         | United Kingdom is a   | 245        |
    | US           | Washington, D.C. | United States     | United States dollar  | 120V, 60Hz  | Itaque ea sit     | 12          | /api/regions/NORTH_AMERICA  | United States is a    | 246        |
    | AU           | Canberra         | Australia         | Australian dollar     | 230V        | Quasi qui dolor   | 5           | /api/regions/OCEANIA        | sixth-largest country | 13         |
    | EG           | Cairo            | Egypt             | Egyptian pound        | 220V        | Expedita nisi     | 3           | /api/regions/MIDDLE_EAST    | an ancient land       | 77         |

  Scenario Outline: Test Country resource update with authenticated user
    Given I am authenticated as "<email>" with password "<password>"
    And the request body is:
    """
    {
      "countryName": "Argentina"
    }
    """
    When I request "/api/countries/AR" with HTTP "PUT"
    Then the response code is "<response_code>"
    Examples:
      | email                   | password  | response_code  |
      | admin2@example.com      | Travel123 | 200            |
      | editor1@example.com     | Travel123 | 403            |
      | moderator1@example.com  | Travel123 | 403            |
      | user1@example.com       | Travel123 | 403            |

  Scenario: Test Country resource update with unauthenticated user
    Given I am not authenticated
    And the request body is:
    """
    {
      "countryName": "Argentina"
    }
    """
    When I request "/api/countries/AR" with HTTP "PUT"
    Then the response code is "401"

  Scenario Outline: Test Country resource patch with authenticated user
    Given I am authenticated as "<email>" with password "<password>"
    And the request body is:
    """
    {
      "countryName": "Bahamas"
    }
    """
    And the "Content-Type" request header is "application/merge-patch+json"
    When I request "/api/countries/BS" with HTTP "PATCH"
    Then the response code is "<response_code>"
    Examples:
      | email                   | password  | response_code  |
      | admin2@example.com      | Travel123 | 200            |
      | editor1@example.com     | Travel123 | 403            |
      | moderator1@example.com  | Travel123 | 403            |
      | user1@example.com       | Travel123 | 403            |

  Scenario: Test Country resource patch with unauthenticated user
    Given I am not authenticated
    And the request body is:
    """
    {
      "countryName": "Bahamas"
    }
    """
    And the "Content-Type" request header is "application/merge-patch+json"
    When I request "/api/countries/BS" with HTTP "PATCH"
    Then the response code is "401"