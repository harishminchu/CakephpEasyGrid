<?php
App::uses('AccountTypesController', 'Controller');

/**
 * TestAccountTypesController *
 */
class TestAccountTypesController extends AccountTypesController {
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
 * AccountTypesController Test Case
 *
 */
class AccountTypesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.account_type', 'app.payable_type', 'app.pay_batch', 'app.vendor', 'app.checking_account', 'app.bank', 'app.building', 'app.apartment', 'app.payable', 'app.tax_number', 'app.employee', 'app.retax_period');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccountTypes = new TestAccountTypesController();
		$this->AccountTypes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccountTypes);

		parent::tearDown();
	}

}
