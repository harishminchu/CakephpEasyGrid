<?php
App::uses('CheckingAccountsController', 'Controller');

/**
 * TestCheckingAccountsController *
 */
class TestCheckingAccountsController extends CheckingAccountsController {
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
 * CheckingAccountsController Test Case
 *
 */
class CheckingAccountsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.checking_account', 'app.bank', 'app.vendor', 'app.pay_batch', 'app.employee', 'app.retax_period', 'app.payable_type', 'app.account_type', 'app.payable', 'app.building', 'app.apartment', 'app.tax_number');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CheckingAccounts = new TestCheckingAccountsController();
		$this->CheckingAccounts->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CheckingAccounts);

		parent::tearDown();
	}

}
