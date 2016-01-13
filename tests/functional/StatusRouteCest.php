<?php


class StatusRouteCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function checkTheStatusRoute(FunctionalTester $I)
    {
      $I->wantTo('check the status route');
      $I->amOnPage('/');
      $I->see('Up and running.');
    }
}
