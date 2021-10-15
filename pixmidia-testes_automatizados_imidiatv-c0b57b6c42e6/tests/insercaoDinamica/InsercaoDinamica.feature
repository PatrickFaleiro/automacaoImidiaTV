Feature: InsercaoDinamica
  In order to ...
  As a ...
  I need to ...

  Background: Log in
    Given i access imidiaTV login page
    And put my useraname on email field
    And put my password on password field
    When Click on Login button
    Then User dashboard page is accessed sucefully

  Scenario: Acesso inserção dinãmica
    Given  que acesso a pagina de midias
    And clico sobre uma midia
    When acesso a funcao de insercao dinamica
    Then são exibidas as funcoes de insercao dinamica  