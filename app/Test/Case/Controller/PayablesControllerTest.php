<?php
App::uses('PayablesController', 'Controller');

/**
 * TestPayablesController *
 */
class TestPayablesController extends PayablesController {
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
 * PayablesController Test Case
 *
 */
class PayablesControllerTestCase extends CakeTestCase {
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
		$this->Payables = new TestPayablesController();
		$this->Payables->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Payables);

		parent::tearDown();
	}

}
