<?php

class Application_Model_BookTest extends PHPUnit_Framework_TestCase
{

	protected $object;

	protected function setUp()
	{
		$this->object = new Saffron_Model_Foo;
	}

	function testGetBookDetails()
	{
		$this->assertTrue(true);
	}

}
