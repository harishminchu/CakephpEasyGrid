<?php
App::uses('PayableTypesController', 'Controller');

/**
 * TestPayableTypesController *
 */
class TestPayableTypesController extends PayableTypesController {
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
 * PayableTypesController Test Case
 *
 */
class PayableTypesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.payable_type', 'app.account_type', 'app.pay_batch', 'app.vendor', 'app.checking_account', 'app.bank', 'app.building', 'app.apartment', 'app.payable', 'app.tax_number', 'app.employee', 'app.retax_period');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PayableTypes = new TestPayableTypesController();
		$this->PayableTypes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PayableTypes);

		parent::tearDown();
	}

}
