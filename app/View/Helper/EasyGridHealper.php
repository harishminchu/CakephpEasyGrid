<?php
App::uses('AppHelper', 'View/Helper');

class EasyGridHelp extends AppHelper {
 	private function putExtjsModelForiengKeyFields(&$fieldArray, &$belongsTo, $hasManyKey){			
			foreach($belongsTo as $key => $value){
					$model = ClassRegistry::init($key);				
					$forienKeyField = array(
						'name' =>  $model->hasMany[$hasManyKey]['foreignKey'],		
						'isForeignKey' => true, 
						'valueField' =>  'id',
						'displayField' =>   $model ->displayField,
						'model'=> $key);
					
					array_push($fieldArray, $forienKeyField);
			}
			ClassRegistry::flush();
		}
		
		
	private	function putExtjsModelNonForiengKeyFields(&$fieldArray, &$fields, &$model){			
			foreach($fields as $key => $value){
				if($model ->isForeignKey($key) == false)
					array_push($fieldArray, array('name' => $key, 'type'=>$value, 'isForeignKey' => false));
			}
			
		}
		
		function setExtjsModels(){		

			$extjsModels = array();
			$models = App::objects('Model');
			debug($models);
			
			foreach($models as $model){
				
				if($model == 'AppModel')
					continue;
				
				$plural = Inflector ::pluralize($model);		
				$path =  Inflector::underscore($plural );			
				
				$fieldArray = array();
				
				$this->$model = ClassRegistry::init($model);			
				
				$fields  = $this->$model->getColumnTypes();				
				$belongsTo = $this->$model->belongsTo;
				
		 		$this->putExtjsModelNonForiengKeyFields($fieldArray, $fields, $this->$model);								
				$this->putExtjsModelForiengKeyFields($fieldArray, $belongsTo, $this->$model->name);				
				array_push($extjsModels, array(
					'primaryKey' => $this->$model->primaryKey, 
					'displayField' => $this->$model->displayField, 
					'name' => $model , 
					'fields' => $fieldArray, 
					'path' => $path));
					
				unset($fieldArray);
				
			}
			ClassRegistry::flush();			
			echo json_encode($extjsModels));
			
		}
}
?>
