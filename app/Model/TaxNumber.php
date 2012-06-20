<?php
App::uses('AppModel', 'Model');
/**
 * TaxNumber Model
 *
 * @property Payable $Payable
 */
class TaxNumber extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tax_number';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tax_number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Payable' => array(
			'className' => 'Payable',
			'foreignKey' => 'tax_number_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
