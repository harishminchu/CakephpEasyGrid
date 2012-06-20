<?php
App::uses('Apartment', 'Model');

/**
 * Apartment Test Case
 *
 */
class ApartmentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.apartment', 'app.building', 'app.payable');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Apartment = ClassRegistry::init('Apartment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Apartment);

		parent::tearDown();
	}

}
