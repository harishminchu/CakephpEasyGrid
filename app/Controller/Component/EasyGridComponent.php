
<?php
class EasyGridComponent extends Component {

 



		function putExtjsModelForiengKeyFields(&$fieldArray, &$belongsTo, $hasManyKey){			
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
		
		
		function putExtjsModelNonForiengKeyFields(&$fieldArray, &$fields, &$model){			
			foreach($fields as $key => $value){
				if($model ->isForeignKey($key) == false)
					array_push($fieldArray, array('name' => $key, 'type'=>$value, 'isForeignKey' => false));
			}
			
		}
		
		function generateExtjsModels(){		

			$extjsModels = array();
			$models = App::objects('model');
			
			foreach($models as $model){
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
			$callingController = $this->_Collection->getController();
			$callingController->set('modelsForExjts', json_encode($extjsModels));
		}





}
?>
