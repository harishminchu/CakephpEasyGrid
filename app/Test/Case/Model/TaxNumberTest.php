<?php
App::uses('TaxNumber', 'Model');

/**
 * TaxNumber Test Case
 *
 */
class TaxNumberTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tax_number', 'app.payable', 'app.building', 'app.checking_account', 'app.bank', 'app.vendor', 'app.pay_batch', 'app.employee', 'app.retax_period', 'app.payable_type', 'app.account_type', 'app.apartment');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaxNumber = ClassRegistry::init('TaxNumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxNumber);

		parent::tearDown();
	}

}
