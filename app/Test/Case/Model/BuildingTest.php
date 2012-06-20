<?php
App::uses('Building', 'Model');

/**
 * Building Test Case
 *
 */
class BuildingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.building', 'app.checking_account', 'app.apartment', 'app.payable');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Building = ClassRegistry::init('Building');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Building);

		parent::tearDown();
	}

}
