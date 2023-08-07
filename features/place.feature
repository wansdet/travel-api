@place
Feature: Test Country resources
  Scenario: Test collection of Country resources
    Given I am not authenticated
    When I request "/api/places"
    Then the response code is "200"
    And the response key "@context" is "/api/contexts/Place"
    And the response key "@id" is "/api/places"
    And the response key "@type" is "hydra:Collection"
    And the response key "hydra:totalItems" is "187"
    And the response collection is a JSON array of length "187"
    And the response collection item has a JSON key "@id"
    And the response collection item has a JSON key "@type"
    And the response collection item has a JSON key "briefDescription"
    And the response collection item has a JSON key "country"
    And the response collection item has a JSON key "placeName"
    And the response collection item has a JSON key "ranking"
    And the response collection item has a JSON key "sortOrder"
    And the response collection item has a JSON key "worldRanking"

  Scenario: Test single Place resource response properties
    Given I am not authenticated
    When I request a "/api/places" resource with key "placeName" and value "London"
    Then the response code is "200"
    And the response key "@context" is "/api/contexts/Place"
    And the response key "@type" is "Place"
    And the response key "accommodation" exists
    And the response key "bestTimeToVisit" exists
    And the response key "briefDescription" exists
    And the response key "country" exists
    And the response key "countryRegion" exists
    And the response key "food" exists
    And the response key "id" exists
    And the response key "imageTags" is a JSON array
    And the response key "longDescription" exists
    And the response key "placeImages" is a JSON array
    And the response key "ranking" exists
    And the response key "sortOrder" exists
    And the response key "tags" is a JSON array
    And the response key "thingsToDo" exists
    And the response key "travelInformation" exists
    And the response key "worldRanking" exists

  Scenario Outline: Test single Place resources
    Given I am not authenticated
    When I request a "/api/places" resource with key "placeName" and value "<place_name>"
    Then the response code is "200"
    And the response key "accommodation" matches "~<accommodation>~"
    And the response key "bestTimeToVisit" matches "~<best_time_visit>~"
    And the response key "briefDescription" matches "~<brief_description>~"
    And the response key "country" is "<country>"
    And the response key "countryRegion" is "<country_region>"
    And the response key "food" matches "~<food>~"
    And the response key "longDescription" matches "~<long_description>~"
    And the response key "placeName" is "<place_name>"
    And the response key "thingsToDo" matches "~<things_to_do>~"
    And the response key "travelInformation" matches "~<travel_information>~"
    And the response key "worldRanking" is "<world_ranking>"
  Examples:
    | place_name | country            | accommodation         | best_time_visit   | brief_description     | country_region    | food          | long_description  | place_name    | things_to_do      | travel_information    | world_ranking |
    | London     | /api/countries/GB  | Itaque hic adipisci   | Perferendis aut   | The vibrant capital   | London, England   | Aut corrupti  | Iste laborum      | London        | Est praesentium   | Quia odit             | 2             |
    | Paris      | /api/countries/FR  | Itaque hic            | architecto rerum  | The capital city      | Île-de-France     | quia quis     | A quo sed         | Paris         | et excepturi      | odit iure optio       | 2             |
    | New York   | /api/countries/US  | adipisci unde maxime  | est cum aliquam   | New York City, often  | New York State    | Ipsa sunt qui | Minus voluptatem  | New York City | Et consectetur    | Voluptates voluptatem | 2             |
