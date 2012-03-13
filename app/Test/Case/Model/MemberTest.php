<?php
App::uses('Member', 'Model');

/**
 * Member Test Case
 *
 */
class MemberTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.member', 'app.email', 'app.gift', 'app.account', 'app.graduation_year', 'app.mailing_address', 'app.occupation', 'app.officer_position', 'app.phone_number');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Member = ClassRegistry::init('Member');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Member);

		parent::tearDown();
	}

}
