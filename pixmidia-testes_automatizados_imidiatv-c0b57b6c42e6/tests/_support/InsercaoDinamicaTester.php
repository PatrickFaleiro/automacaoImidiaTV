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
class InsercaoDinamicaTester extends \Codeception\Actor
{
    use _generated\InsercaoDinamicaTesterActions;

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
     * @Given que acesso a pagina de midias
     */
    public function queAcessoAPaginaDeMidias()
    {
        $this->waitForElementClickable('//*[contains(text(),"Minhas Mídias")]');
        $this->click('//*[contains(text(),"Minhas Mídias")]');
    }

   /**
    * @Given clico sobre uma midia
    */
    public function clicoSobreUmaMidia()
    {
        $this->click('//*[contains(text(),"imagemautomacao - não exclur.jpg")]');
    }

   /**
    * @When acesso a funcao de insercao dinamica
    */
    public function acessoAFuncaoDeInsercaoDinamica()
    {
        $this->click('//*[contains(text(), "Inserção Dinâmica")]');
    }

   /**
    * @Then são exibidas as funcoes de insercao dinamica
    */
    public function soExibidasAsFuncoesDeInsercaoDinamica()
    {
        $this->canSee('Agendamento','//*["#midia-aba-edicao-publicacao"]');
    }

}
