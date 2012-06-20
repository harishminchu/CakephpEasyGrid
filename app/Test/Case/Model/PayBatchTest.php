<?php
App::uses('PayBatch', 'Model');

/**
 * PayBatch Test Case
 *
 */
class PayBatchTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pay_batch', 'app.vendor', 'app.checking_account', 'app.bank', 'app.building', 'app.apartment', 'app.payable', 'app.employee', 'app.retax_period', 'app.payable_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PayBatch = ClassRegistry::init('PayBatch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PayBatch);

		parent::tearDown();
	}

}
