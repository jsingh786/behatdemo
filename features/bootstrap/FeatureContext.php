<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    protected $sleepTime = 0;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->sleepTime = 2;
    }

    /**
     * @When /^I search for "([^"]*)"$/
     */
    public function iSearchFor($arg1)
    {
        $this->fillField("search_block_form", "behat");
        $this->pressButton("Search");
    }

    /**
     * @When /^I click on Maintenance "([^"]*)"$/
     */
    public function iClickOnMaintenance($arg1)
    {
        sleep($this->sleepTime);
        $this->clickLink("lnk0Maintenance");
        sleep($this->sleepTime);
    }

    /**
     * @When /^I click on WorkOrder "([^"]*)"$/
     */
    public function iClickOnWorkOrder($arg1)
    {
        $this->clickLink("aWorkOrderMain");
        sleep($this->sleepTime);
    }

    /**
     * @When /^I press New WorkOrder "([^"]*)"$/
     */
    public function iPressNewWorkOrder($arg1)
    {

        $this->pressButton("btnAddNewWorkOrder");
        sleep($this->sleepTime);
    }

    /**
     * @When /^I click on recurring "([^"]*)"$/
     */
    /*public function iClickOnRecurring($arg1)
    {
        $option = $this->fixStepArgument($option);
        $this->getSession()->getPage()->checkField($option);

        sleep($this->sleepTime);
    }*/

    /**
     * @When /^I press Recurring "([^"]*)"$/
     */
    public function iPressRecurring($arg1)
    {
        /*$radioButton = $this->getSession()->getPage()->findField("rdoWorkOrderRecurring");
        if (null === $radioButton) {
            throw new ElementNotFoundException($this->getSession(), 'form field', 'id|name|label|value', "rdoWorkOrderRecurring");
        }*/
        //$this->getSession()->getDriver()->click($radioButton->getXPath());
        $this->getSession()->getDriver()->click("/html/body/div[1]/div[16]/div/div/div[2]/div[1]/div[1]/div/div/div[2]/div[2]/div[1]/div[2]/div[2]/span/div/input");

        sleep($this->sleepTime);
    }

}
