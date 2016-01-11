<?php
$I = new FunctionalTester($scenario);
$I->wantTo('check the status route');
$I->amOnPage('/');
$I->see('Up and running.');

$I->canPostToStatusRoute();
