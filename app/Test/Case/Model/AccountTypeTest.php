<?php
App::uses('AccountType', 'Model');

/**
 * AccountType Test Case
 *
 */
class AccountTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.account_type', 'app.payable_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccountType = ClassRegistry::init('AccountType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccountType);

		parent::tearDown();
	}

}
