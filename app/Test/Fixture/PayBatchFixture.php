<?php
/**
 * PayBatchFixture
 *
 */
class PayBatchFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'vendor_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'invoice' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'amount' => array('type' => 'float', 'null' => false, 'default' => '0.0000', 'length' => '12,4'),
		'checking_account_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'check_num' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'printed' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'notes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'outstanding' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'due_date' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'reserved' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'retax_period_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'vendor_text' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'transfered' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'void_check' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'miles_check' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'payable_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'check_balanced' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'text_only' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
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
			'date' => '2012-06-20',
			'vendor_id' => 1,
			'invoice' => 'Lorem ipsum dolor sit amet',
			'amount' => 1,
			'checking_account_id' => 1,
			'check_num' => 1,
			'printed' => 1,
			'employee_id' => 1,
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'outstanding' => 1,
			'due_date' => '2012-06-20',
			'reserved' => 1,
			'retax_period_id' => 1,
			'vendor_text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'transfered' => 1,
			'void_check' => 1,
			'miles_check' => 1,
			'payable_type_id' => 1,
			'check_balanced' => 1,
			'text_only' => 1
		),
	);
}
