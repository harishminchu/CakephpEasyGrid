<?php
/**
 * CheckingAccountFixture
 *
 */
class CheckingAccountFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bank_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'vendor_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'account_num' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'public' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'is_clearing_acc' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'inactive' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
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
			'name_code' => 'Lorem ipsum dolor sit amet',
			'bank_id' => 1,
			'vendor_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'account_num' => 1,
			'public' => 1,
			'is_clearing_acc' => 1,
			'inactive' => 1
		),
	);
}
