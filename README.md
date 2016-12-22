# behatdemo
BDD PHP framework Behat Implementation by Jsingh7[Jaskaran]

1. Run composer install command from the root directory so that it can download all the dependancies.
	
	sudo php composer.phar install [Linux command]
	
2. Run init command to initailise behat from the root of the project. It will create your feature directory.
	
	php vendor/bin/behat --init [Linux command]
	
3. You can create feature files in features directory.
	
	for e.g. test.feature
	
4. create behat.yml  file at root of the directory for configuration such as paths, drivers, base_url etc.

	For e.g.
	
	default:
    paths:
        features: features
        bootstrap: %behat.paths.features%/bootstrap
    extensions:
        Behat\MinkExtension\Extension:
            goutte: ~
            selenium2: ~
            base_url: http://www.drupal.org
	
	
5. If you want to use prebuilt context functions you may use MinkContext class. 
	As we have defined mink package in our dependancies so we can directly use it in our FeatureContext.php
	
	use Behat\MinkExtension\Context\MinkContext;
	
	And extend MinkContext class in your FeatureContext class

6. To perform tests using web-browser you need "Selenium-server stand alone jar file", 
	it can live anywhere on your computer.
	Add selenium2 driver in your behat.yml
	
	selenium2: ~
	
	Now you can add @javascipt tag above your senarios and it will use web-browser to perform tests.
	
7. Run java -jar selenium-server-standalone-2.53.0.jar to up the selenium server.	
	
8. Now you are ready to write test features in you feature file for e.g.

Feature: Drupal.org search
    In order to find modules on Drupal.org
    As a Drupal user
    I need to be able to use Drupal.org search
    
    @javascript
    Scenario: Searching for "behat"
        Given I go to "/"
        When I fill in "search_block_form" with "behat"
        And I press "Search"
        Then I should see "Drupal8 Behat"
        
Run this using command for e.g. php D:\behatdemo\vendor\bin\behat



HELP======================

1. You can make multiple feature files and can run specific using command:
    
    php vendor/bin/behat features/test2.feature
