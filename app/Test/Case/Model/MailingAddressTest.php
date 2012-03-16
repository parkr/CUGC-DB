<?php
App::uses('MailingAddress', 'Model');

/**
 * MailingAddress Test Case
 *
 */
class MailingAddressTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mailing_address', 'app.member', 'app.email', 'app.gift', 'app.account', 'app.graduation_year', 'app.occupation', 'app.industry', 'app.officer_position', 'app.phone_number');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MailingAddress = ClassRegistry::init('MailingAddress');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MailingAddress);

		parent::tearDown();
	}

}
