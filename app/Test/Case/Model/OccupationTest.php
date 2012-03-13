<?php
App::uses('Occupation', 'Model');

/**
 * Occupation Test Case
 *
 */
class OccupationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.occupation', 'app.member', 'app.email', 'app.gift', 'app.account', 'app.graduation_year', 'app.mailing_address', 'app.officer_position', 'app.phone_number', 'app.industry');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Occupation = ClassRegistry::init('Occupation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Occupation);

		parent::tearDown();
	}

}
