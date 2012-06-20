<?php
App::uses('TaxNumbersController', 'Controller');

/**
 * TestTaxNumbersController *
 */
class TestTaxNumbersController extends TaxNumbersController {
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
 * TaxNumbersController Test Case
 *
 */
class TaxNumbersControllerTestCase extends CakeTestCase {
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
		$this->TaxNumbers = new TestTaxNumbersController();
		$this->TaxNumbers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxNumbers);

		parent::tearDown();
	}

}
