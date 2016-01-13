<?php

class VehiclesCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function createItem(FunctionalTester $I, $scenario)
    {
      $I->wantTo('create a new vehicle');
      $I->sendPOST('/vehicles', [
        'name' => 'Pansy'
      ]);
      // we mark scenario as not implemented
      $scenario->incomplete('work in progress');

      // here's what we think should happen
      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
      $I->seeResponseJsonMatchesXpath('//id');
      $I->seeResponseJsonMatchesXpath('//name');
      $I->seeResponseMatchesJsonType([
        'id' => 'integer',
        'name' => 'string'
      ]);
      $I->seeResponseContainsJson([
        'id' => 123,
        'name' => 'Pansy'
      ]);
    }

    public function retrieveItems(FunctionalTester $I, $scenario)
    {
      $I->wantTo('retrieve current vehicles');
      $I->sendGET('/vehicles');
      $scenario->incomplete('work in progress');

      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
      $I->seeResponseContainsJson([
        'id' => 123,
        'name' => 'Pansy'
      ]);
    }

    public function updateItem(FunctionalTester $I, $scenario)
    {
      $I->wantTo('modify an existing item');
      $I->sendPUT('/vehicles/123', [
        'name' => 'Pansy updated'
      ]);
      $scenario->incomplete('work in progress');

      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
      $I->seeResponseContainsJson([
        'id' => 123,
        'name' => 'Pansy updated'
      ]);
    }
}
