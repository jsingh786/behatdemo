Feature: Drupal.org search
  In order to find modules on Drupal.org
  As a Drupal user
  I need to be able to use Drupal.org search

  @javascript
  Scenario: Check/Uncheck Radio Button for apex
    Given I go to "/"
    And I fill in "txtUsername" with "harry@yopmail.com"
    And I fill in "txtPassword" with "demo@123"
    And I press "btnLogin"
    When I click on Maintenance "lnk0Maintenance"
    And I click on WorkOrder "aWorkOrderMain"
    And I press New WorkOrder "btnAddNewWorkOrder"
    And I press Recurring "rdoWorkOrderRecurring"