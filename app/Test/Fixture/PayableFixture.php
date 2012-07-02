<?php
/**
 * PayableFixture
 *
 */
class PayableFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'apt_num' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'building_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'pay_batch_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'apartment_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'account' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '12,2'),
		'notes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tax_number_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'miles_driven' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '12,3'),
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
			'apt_num' => 'Lorem ips',
			'building_id' => 1,
			'pay_batch_id' => 1,
			'apartment_id' => 1,
			'account' => 'Lorem ipsum dolor sit amet',
			'date' => '2012-07-02',
			'amount' => 1,
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tax_number_id' => 1,
			'miles_driven' => 1
		),
	);
}
