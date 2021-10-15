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
class LoginTester extends \Codeception\Actor
{
    use _generated\LoginTesterActions;

      /**
     * @Given i access imidiaTV login page
     */
    public function iAccessImidiaTVLoginPage()
    {
        $this->amOnPage('/');
    }

   /**
    * @Given put my useraname on email field
    */
    public function putMyUseranameOnEmailField()
    {
        $this->fillField('login','suporte');
    }

   /**
    * @Given put my password on password field
    */
    public function putMyPasswordOnPasswordField()
    {
        $this->fillField('senha','pixSup2021');
    }

   /**
    * @When Click on Login button
    */
    public function clickOnLoginButton()
    {
        $this->click('Login');
    }

   /**
    * @Then User dashboard page is accessed sucefully
    */
    public function userDashboardPageIsAccessedSucefully()
    {
        $this->see('HOMOLOGAÇÃO');
    }

}
