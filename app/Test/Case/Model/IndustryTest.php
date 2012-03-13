<?php
App::uses('Industry', 'Model');

/**
 * Industry Test Case
 *
 */
class IndustryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.industry', 'app.occupation');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Industry = ClassRegistry::init('Industry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Industry);

		parent::tearDown();
	}

}
