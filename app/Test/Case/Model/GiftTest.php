<?php
App::uses('Gift', 'Model');

/**
 * Gift Test Case
 *
 */
class GiftTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gift', 'app.member', 'app.email', 'app.graduation_year', 'app.mailing_address', 'app.occupation', 'app.officer_position', 'app.phone_number', 'app.account');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Gift = ClassRegistry::init('Gift');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gift);

		parent::tearDown();
	}

}
