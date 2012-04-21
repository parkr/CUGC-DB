<?php
App::uses('IntlTour', 'Model');

/**
 * IntlTour Test Case
 *
 */
class IntlTourTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.intl_tour', 'app.member', 'app.email', 'app.gift', 'app.account', 'app.graduation_year', 'app.mailing_address', 'app.occupation', 'app.industry', 'app.officer_position', 'app.phone_number', 'app.intl_tours_member');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IntlTour = ClassRegistry::init('IntlTour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IntlTour);

		parent::tearDown();
	}

}
