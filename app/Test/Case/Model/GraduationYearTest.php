<?php
App::uses('GraduationYear', 'Model');

/**
 * GraduationYear Test Case
 *
 */
class GraduationYearTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.graduation_year', 'app.member', 'app.email', 'app.gift', 'app.account', 'app.mailing_address', 'app.occupation', 'app.officer_position', 'app.phone_number');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GraduationYear = ClassRegistry::init('GraduationYear');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GraduationYear);

		parent::tearDown();
	}

}
