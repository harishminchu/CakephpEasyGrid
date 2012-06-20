<?php
App::uses('CheckingAccount', 'Model');

/**
 * CheckingAccount Test Case
 *
 */
class CheckingAccountTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.checking_account', 'app.bank', 'app.vendor', 'app.building', 'app.apartment', 'app.payable', 'app.pay_batch');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CheckingAccount = ClassRegistry::init('CheckingAccount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CheckingAccount);

		parent::tearDown();
	}

}
