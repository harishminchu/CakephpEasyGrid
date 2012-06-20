<?php
App::uses('PayableType', 'Model');

/**
 * PayableType Test Case
 *
 */
class PayableTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.payable_type', 'app.account_type', 'app.pay_batch', 'app.vendor', 'app.checking_account', 'app.bank', 'app.building', 'app.apartment', 'app.payable', 'app.employee', 'app.retax_period');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PayableType = ClassRegistry::init('PayableType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PayableType);

		parent::tearDown();
	}

}
