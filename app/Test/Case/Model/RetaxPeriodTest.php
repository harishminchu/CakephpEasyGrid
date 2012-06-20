<?php
App::uses('RetaxPeriod', 'Model');

/**
 * RetaxPeriod Test Case
 *
 */
class RetaxPeriodTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.retax_period', 'app.pay_batch', 'app.vendor', 'app.checking_account', 'app.bank', 'app.building', 'app.apartment', 'app.payable', 'app.tax_number', 'app.employee', 'app.payable_type', 'app.account_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RetaxPeriod = ClassRegistry::init('RetaxPeriod');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RetaxPeriod);

		parent::tearDown();
	}

}
