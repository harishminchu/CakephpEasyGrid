<?php
App::uses('AppModel', 'Model');
/**
 * AccountType Model
 *
 * @property PayableType $PayableType
 */
class AccountType extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'type';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'type' => array(
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
		'PayableType' => array(
			'className' => 'PayableType',
			'foreignKey' => 'account_type_id',
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
