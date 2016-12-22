Feature: Drupal.org search
  In order to find modules on Drupal.org
  As a Drupal user
  I need to be able to use Drupal.org search

  @javascript
  Scenario: Searching for "behat"
    Given I go to "/"
    When I search for "behat"
    Then I should see "Drupal8 Behat"