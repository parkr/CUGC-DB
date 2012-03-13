<?php
App::uses('Account', 'Model');

/**
 * Account Test Case
 *
 */
class AccountTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.account', 'app.gift');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Account = ClassRegistry::init('Account');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Account);

		parent::tearDown();
	}

}
