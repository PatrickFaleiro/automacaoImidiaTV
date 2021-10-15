Feature: TestesMidias
  
  Background: Log in
    Given i access imidiaTV login page
    And put my useraname on email field
    And put my password on password field
    When Click on Login button
    Then User dashboard page is accessed sucefully
  
  Scenario: Access midia menu
    Given i see midia menu button on dashboard
    When click on midias button
    Then midias menu shows to user
