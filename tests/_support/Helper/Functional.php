<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Functional extends \Codeception\Module
{

  /** learn to add a new test */
  public function canPostToStatusRoute() {
    $posted = $this->getModule('Silex')->_request('POST', '/');

    $this->assertEquals('Up and running.', $posted);
  }

}
