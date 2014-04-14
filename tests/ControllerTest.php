<?php

/**
 * Created by PhpStorm.
 * User: Glue
 * Date: 14.04.14
 * Time: 21:40
 */
class ControllerTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var \Glue\MyController
	 */
	protected $category;

	public function setUp()
	{
		require_once __DIR__ . '/../src/controllers/MyController.php';
		parent::setUp();
		$this->category = new \Glue\MyController();

	}

	public function testTitleIsRequired()
	{
		$this->assertFalse($this->category->testFalse(), 'Не удалось поличть false');
	}

	public function testString()
	{
		$this->assertEquals('My test string', $this->category->testString(), 'Error in string');
	}
}
 