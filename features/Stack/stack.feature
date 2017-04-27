Feature: Stack
  In order to store values in memory
  As a user
  I need to push and pop elements from a stack

  Rules:
    - Initially, the stack is empty
    - Push action should insert an element into the stack
    - The pointer will point always the last pushed element
    - Pop action should extract an element from the stack
    - Pop an element from an empty stack should throw an error


  Scenario: Initialize an empty stack
    Given a new stack
    Then I should have 0 elements in the stack

  Scenario: Push one element into a stack
    Given a new stack
    When I perform a push into the stack
    Then I should have 1 elements in the stack
    And the pointer should be 1

  Scenario: Push several elements into a stack
    Given a new stack
    When I perform a push into the stack
    And I perform a push into the stack
    Then I should have 2 elements in the stack
    And the pointer should be 2

  Scenario: Push several elements into a stack and pop one
    Given a new stack
    When I perform a push into the stack
    And I perform a push into the stack
    And I perform a pop into the stack
    Then I should have 1 elements in the stack
    And the pointer should be 1

  Scenario: Pop from an empty stack
    Given a new stack
    When I perform a pop into the stack
    Then it should throw an empty stack exception