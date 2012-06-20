<?php
/**
 * ApartmentFixture
 *
 */
class ApartmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'building_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'apt_num' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bedreems' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'bathrooms' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '3,1'),
		'ishouse' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'sqft' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'location' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'notes_about' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'office_notes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'closed_unit' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'parking' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'garage' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
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
			'building_id' => 1,
			'apt_num' => 'Lorem ipsum dolor sit amet',
			'bedreems' => 1,
			'bathrooms' => 1,
			'ishouse' => 1,
			'sqft' => 1,
			'location' => 'Lorem ipsum dolor sit amet',
			'notes_about' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'office_notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'closed_unit' => 1,
			'parking' => 1,
			'garage' => 1
		),
	);
}
