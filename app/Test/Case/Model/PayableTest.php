<?php
App::uses('Payable', 'Model');

/**
 * Payable Test Case
 *
 */
class PayableTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.payable', 'app.building', 'app.checking_account', 'app.bank', 'app.vendor', 'app.pay_batch', 'app.employee', 'app.retax_period', 'app.payable_type', 'app.account_type', 'app.apartment', 'app.tax_number');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Payable = ClassRegistry::init('Payable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Payable);

		parent::tearDown();
	}

}
