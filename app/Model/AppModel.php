<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	
	private function extjsModelForeignKeyFields(){			
			
			$foreignKeyFields = array();
			
			foreach($this->$belongsTo as $key => $value){
					$model = ClassRegistry::init($key);				
					$forienKeyField = array(
						'name' =>  $model->hasMany[$this->name]['foreignKey'],		
						'isForeignKey' => true, 
						'valueField' =>  'id',
						'displayField' =>   $model ->displayField,
						'model'=> $key);
					
					array_push($foreignKeyFields, $forienKeyField);
			}
			ClassRegistry::flush();
			return $foreignKeyFields();
		}
	
	function getPath(){
			$plural = Inflector ::pluralize($this->name);		
			return  Inflector::underscore($plural);		
	}
	
	function getExtjsFields(){
		
		$extjsFields = array();
		
		$fields = 	$this->getColumnTypes();
		
		foreach($fields as $key => $value){
				if($model ->isForeignKey($key) == false)
					array_push($extjsFields, array('name' => $key, 'type'=>$value, 'isForeignKey' => false));			
			}
		
		array_merge($extjsFields, $this->extjsModelForeignKeyFields());
		
		return 	$extjsFields;
		
	}
	
	function getExtjsModel(){			
		return array(
					'primaryKey'  => $this->primaryKey, 
					'displayField' => $this->displayField, 
					'name'           => $this->name, 
					'fields'            => $this->getExtjsFields(),
					'path'             => $this->getPath());
	}
}
