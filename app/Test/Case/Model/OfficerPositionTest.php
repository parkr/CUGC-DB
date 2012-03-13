<?php
App::uses('OfficerPosition', 'Model');

/**
 * OfficerPosition Test Case
 *
 */
class OfficerPositionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.officer_position', 'app.member', 'app.email', 'app.gift', 'app.account', 'app.graduation_year', 'app.mailing_address', 'app.occupation', 'app.industry', 'app.phone_number');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OfficerPosition = ClassRegistry::init('OfficerPosition');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OfficerPosition);

		parent::tearDown();
	}

}
