<?php

use Dummy\Math;

class DummyTest extends PHPUnit_Framework_TestCase
{
  public function testFail() {
    $this->assertNotNull($this->math);
  }

  public function testAdd()
  {
    $this->assertEquals(3, $this->math->add(1, 2));
  }

  public function testNotEquals()
  {
    $this->assertNotEquals(3, $this->math->add(1, 1));
  }

  public function setUp(){
    $this->math = new Math();
  }
}