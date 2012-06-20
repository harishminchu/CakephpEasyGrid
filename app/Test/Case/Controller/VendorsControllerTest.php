<?php
App::uses('VendorsController', 'Controller');

/**
 * TestVendorsController *
 */
class TestVendorsController extends VendorsController {
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
 * VendorsController Test Case
 *
 */
class VendorsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.vendor', 'app.checking_account', 'app.bank', 'app.building', 'app.apartment', 'app.payable', 'app.pay_batch', 'app.employee', 'app.retax_period', 'app.payable_type', 'app.account_type', 'app.tax_number');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vendors = new TestVendorsController();
		$this->Vendors->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vendors);

		parent::tearDown();
	}

}
