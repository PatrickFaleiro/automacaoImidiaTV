<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class MidiasTester extends \Codeception\Actor
{
    use _generated\MidiasTesterActions;


      /**
     * @Given i access imidiaTV login page
     */
    public function iAccessImidiaTVLoginPage()
    {
        #$I->amOnPage('/');
        $this->amOnPage('/');
    }

   /**
    * @Given put my useraname on email field
    */
    public function putMyUseranameOnEmailField()
    {
        #$I->fillField('login','suporte');
        $this->fillField('login','suporte');
    }

   /**
    * @Given put my password on password field
    */
    public function putMyPasswordOnPasswordField()
    {
        $this->fillField('senha','pixSup2021');
        #$I->fillField('senha','pixSup2021');
    }

   /**
    * @When Click on Login button
    */
    public function clickOnLoginButton()
    {
        $this->click('Login');
        #$I->click('Login');
    }

   /**
    * @Then User dashboard page is accessed sucefully
    */
    public function userDashboardPageIsAccessedSucefully()
    {
        $this->see('HOMOLOGAÇÃO');
        #$I->seeInCurrentUrl('/dashboard/');
    }

    /**
     * @Given i see midia menu button on dashboard
     */
    public function iSeeMidiaMenuButtonOnDashboard()
    {
        $this->see('Minhas Mídias');
        #$I->seeLink('Minhas Mídias');
    }

   /**
    * @When click on midias button
    */
    public function clickOnMidiasButton()
    {
        #$I->click('a[href="/midia"');
        $this->waitForElementClickable('//*[contains(text(),"Minhas Mídias")]');
        $this->click('//*[contains(text(),"Minhas Mídias")]');
    }

   /**
    * @Then midias menu shows to user
    */
    public function midiasMenuShowsToUser()
    {
        $this->seeInCurrentUrl('/midia');
    //    #$I->canSeeInCurrentUrl('/midia');
    }



}
