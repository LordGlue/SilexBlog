<?php

/**
 * Created by PhpStorm.
 * User: App
 * Date: 14.04.14
 * Time: 21:40
 */
class ControllerTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var \App\MyController
	 */
	protected $category;

	public function setUp()
	{
		parent::setUp();
		$this->category = new \App\MyController();

	}

	public function testTitleIsRequired()
	{
		$this->assertFalse($this->category->actionFirst(), 'Не удалось получить false');
	}

	public function testString()
	{
		$this->assertEquals('My test string', $this->category->actionSecond(), 'Error in string');
	}
}
 