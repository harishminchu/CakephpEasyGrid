<?php
App::uses('Vendor', 'Model');

/**
 * Vendor Test Case
 *
 */
class VendorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.vendor', 'app.checking_account', 'app.bank', 'app.building', 'app.apartment', 'app.payable', 'app.pay_batch', 'app.employee', 'app.retax_period', 'app.payable_type', 'app.account_type', 'app.tax_number');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vendor = ClassRegistry::init('Vendor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vendor);

		parent::tearDown();
	}

}
