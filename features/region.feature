@region
Feature: Test Region resources
  Scenario: Test collection of Region resources
    Given I am not authenticated
    When I request "/api/regions"
    Then the response code is "200"
    And the response key "@context" is "/api/contexts/Region"
    And the response key "@id" is "/api/regions"
    And the response key "@type" is "hydra:Collection"
    And the response key "hydra:totalItems" is "10"
    And the response collection is a JSON array of length "10"
    And the response collection item has a JSON key "@id"
    And the response collection item has a JSON key "@type"
    And the response collection item has a JSON key "briefDescription"
    And the response collection item has a JSON key "ranking"
    And the response collection item has a JSON key "regionCode"
    And the response collection item has a JSON key "regionName"
    And the response collection item has a JSON key "sortOrder"

  Scenario: Test single Region resource response properties
    Given I am not authenticated
    When I request "/api/regions/AFRICA"
    Then the response code is "200"
    And the response key "@context" is "/api/contexts/Region"
    And the response key "@id" is "/api/regions/AFRICA"
    And the response key "@type" is "Region"
    And the response key "briefDescription" exists
    And the response key "countries" is a JSON array
    And the response key "imageTags" is a JSON array
    And the response key "longDescription" exists
    And the response key "ranking" exists
    And the response key "regionCode" exists
    And the response key "regionName" exists
    And the response key "shortDescription" exists
    And the response key "sortOrder" exists
    And the response key "createdAt" exists

  Scenario Outline: Test single Region resources
    Given I am not authenticated
    When I request "/api/regions/<region_code>"
    Then the response code is "200"
    And the response key "@id" is "/api/regions/<region_code>"
    And the response key "briefDescription" matches "~<brief_description>~"
    And the response key "countries" is a JSON array of length "<country_count>"
    And the response key "longDescription" matches "~<long_description>~"
    And the response key "ranking" is "<ranking>"
    And the response key "regionCode" is "<region_code>"
    And the response key "regionName" is "<region_name>"
    And the response key "shortDescription" matches "~<short_description>~"
    And the response key "sortOrder" is "<sort_order>"
      Examples:
        | region_code     | brief_description       | country_count | long_description  | ranking | region_code     | region_name     | short_description       | sort_order |
        | AFRICA          | Africa attracts         | 11            | Iste laborum      | 7       | AFRICA          | Africa          | Africa attracts         | 1          |
        | ANTARCTICA      | Antarctica attracts     | 3             | Sint autem        | 10      | ANTARCTICA      | Antarctica      | attracts tourist        | 10         |
        | ASIA            | Asia attracts           | 14            | Iure optio        | 2       | ASIA            | Asia            | Asia attracts           | 2          |
        | CARIBBEAN       | Caribbean attracts      | 19            | Dolores eos       | 5       | CARIBBEAN       | Caribbean       | Caribbean attracts      | 3          |
        | CENTRAL_AMERICA | Central America att     | 6             | Eum amet          | 9       | CENTRAL_AMERICA | Central America | Central America attract | 8          |
        | EUROPE          | Europe attracts         | 48            | Quasi qui         | 1       | EUROPE          | Europe          | Europe attracts         | 4          |
        | MIDDLE_EAST     | Middle East attracts    | 9             | Sed distincti     | 6       | MIDDLE_EAST     | Middle East     | Tourists are            | 5          |
        | NORTH_AMERICA   | North America attracts  | 4             | Eaque sit         | 3       | NORTH_AMERICA   | North America   | North America attracts  | 7          |
        | OCEANIA         | Oceania attracts        | 12            | Harum sint        | 4       | OCEANIA         | Oceania         | Tourists are draw       | 6          |
        | SOUTH_AMERICA   | South America attracts  | 10            | Sit totam         | 8       | SOUTH_AMERICA   | South America   | South America is a      | 9          |

  Scenario Outline: Test Region resource update with authenticated user
    Given I am authenticated as "<email>" with password "<password>"
    And the request body is:
    """
    {
      "regionName": "Africa"
    }
    """
    When I request "/api/regions/AFRICA" with HTTP "PUT"
    Then the response code is "<response_code>"
    Examples:
      | email                   | password  | response_code  |
      | admin2@example.com      | Travel123 | 200            |
      | editor1@example.com     | Travel123 | 403            |
      | moderator1@example.com  | Travel123 | 403            |
      | user1@example.com       | Travel123 | 403            |

  Scenario: Test Region resource update with unauthenticated user
    Given I am not authenticated
    And the request body is:
    """
    {
      "regionName": "Africa"
    }
    """
    When I request "/api/regions/AFRICA" with HTTP "PUT"
    Then the response code is "401"

  Scenario Outline: Test Region resource patch with authenticated user
    Given I am authenticated as "<email>" with password "<password>"
    And the request body is:
    """
    {
      "regionName": "Europe"
    }
    """
    And the "Content-Type" request header is "application/merge-patch+json"
    When I request "/api/regions/EUROPE" with HTTP "PATCH"
    Then the response code is "<response_code>"
    Examples:
      | email                   | password  | response_code  |
      | admin2@example.com      | Travel123 | 200            |
      | editor1@example.com     | Travel123 | 403            |
      | moderator1@example.com  | Travel123 | 403            |
      | user1@example.com       | Travel123 | 403            |

  Scenario: Test Region resource patch with unauthenticated user
    Given I am not authenticated
    And the request body is:
    """
    {
      "regionName": "Europe"
    }
    """
    And the "Content-Type" request header is "application/merge-patch+json"
    When I request "/api/regions/EUROPE" with HTTP "PATCH"
    Then the response code is "401"