<?php
App::uses('RetaxPeriodsController', 'Controller');

/**
 * TestRetaxPeriodsController *
 */
class TestRetaxPeriodsController extends RetaxPeriodsController {
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
 * RetaxPeriodsController Test Case
 *
 */
class RetaxPeriodsControllerTestCase extends CakeTestCase {
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
		$this->RetaxPeriods = new TestRetaxPeriodsController();
		$this->RetaxPeriods->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RetaxPeriods);

		parent::tearDown();
	}

}
