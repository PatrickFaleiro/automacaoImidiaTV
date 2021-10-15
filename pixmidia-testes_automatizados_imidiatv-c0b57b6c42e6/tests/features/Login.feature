Feature: Login
  In access user area
  As a imidiaTV user
  I need to put my user and password on login page

  Scenario: Login ImidiTV website page 
    Given i access imidiaTV login page
    And put my useraname on email field
    And put my password on password field
    When Click on Login button
    Then User dashboard page is accessed sucefully

