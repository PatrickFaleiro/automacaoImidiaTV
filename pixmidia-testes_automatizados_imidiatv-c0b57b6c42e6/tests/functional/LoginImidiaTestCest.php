<?php

class LoginImidiaTestCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('login','suporte');
        $I->fillField('senha','pixSup2021');
        $I->click('Login');
        $I->see('HOMOLOGAÇÃO');
    }
}
