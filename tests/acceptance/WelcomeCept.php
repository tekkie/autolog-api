<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('check the status route');
$I->amOnPage('/');
$I->see('Up and running.');
