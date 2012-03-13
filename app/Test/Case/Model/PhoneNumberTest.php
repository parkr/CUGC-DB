<?php
App::uses('PhoneNumber', 'Model');

/**
 * PhoneNumber Test Case
 *
 */
class PhoneNumberTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.phone_number', 'app.member', 'app.email', 'app.gift', 'app.account', 'app.graduation_year', 'app.mailing_address', 'app.occupation', 'app.industry', 'app.officer_position');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PhoneNumber = ClassRegistry::init('PhoneNumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PhoneNumber);

		parent::tearDown();
	}

}
