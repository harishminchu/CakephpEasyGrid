<?php
/**
 * BuildingFixture
 *
 */
class BuildingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'group_num' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'checking_account_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'on_campus' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'city' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'zip' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'group_num' => 1,
			'checking_account_id' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'on_campus' => 1,
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 1
		),
	);
}
