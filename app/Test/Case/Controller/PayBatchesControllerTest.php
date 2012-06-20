<?php
App::uses('PayBatchesController', 'Controller');

/**
 * TestPayBatchesController *
 */
class TestPayBatchesController extends PayBatchesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * PayBatchesController Test Case
 *
 */
class PayBatchesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pay_batch', 'app.vendor', 'app.checking_account', 'app.bank', 'app.building', 'app.apartment', 'app.payable', 'app.tax_number', 'app.employee', 'app.retax_period', 'app.payable_type', 'app.account_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PayBatches = new TestPayBatchesController();
		$this->PayBatches->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PayBatches);

		parent::tearDown();
	}

}
