<?php
App::uses('Email', 'Model');

/**
 * Email Test Case
 *
 */
class EmailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.email', 'app.member', 'app.gift', 'app.graduation_year', 'app.mailing_address', 'app.occupation', 'app.officer_position', 'app.phone_number');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Email = ClassRegistry::init('Email');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Email);

		parent::tearDown();
	}

}
