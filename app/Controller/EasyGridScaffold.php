<?php

App::uses('Scaffold', 'Controller');

class EasyGridScaffold extends Scaffold {
	 
 /**
 * When methods are now present in a controller
 * scaffoldView is used to call default Scaffold methods if:
 * `public $scaffold;` is placed in the controller's class definition.
 *
 * @param CakeRequest $request Request object for scaffolding
 * @return mixed A rendered view of scaffold action, or showing the error
 * @throws MissingActionException When methods are not scaffolded.
 * @throws MissingDatabaseException When the database connection is undefined.
 */
	protected function _scaffold(CakeRequest $request) {
		$db = ConnectionManager::getDataSource($this->ScaffoldModel->useDbConfig);
		$prefixes = Configure::read('Routing.prefixes');
		$scaffoldPrefix = $this->scaffoldActions;

		if (isset($db)) {
			if (empty($this->scaffoldActions)) {
				$this->scaffoldActions = array(
					'read', 'index', 'list', 'view', 'add', 'create', 'edit', 'update', 'delete', 'grid'
				);
			} elseif (!empty($prefixes) && in_array($scaffoldPrefix, $prefixes)) {
				$this->scaffoldActions = array(
					$scaffoldPrefix . '_index',
					$scaffoldPrefix . '_list',
					$scaffoldPrefix . '_view',
					$scaffoldPrefix . '_read',
					$scaffoldPrefix . '_add',
					$scaffoldPrefix . '_create',
					$scaffoldPrefix . '_edit',
					$scaffoldPrefix . '_update',
					$scaffoldPrefix . '_delete',
					$scaffoldPrefix . '_grid'
				);
			}

	
			
			if (in_array($request->params['action'], $this->scaffoldActions)) {
				if (!empty($prefixes)) {
					$request->params['action'] = str_replace($scaffoldPrefix . '_', '', $request->params['action']);
				}
				switch ($request->params['action']) {
					case 'index':
					case 'list':
						$this->_scaffoldIndex($request);
					break;
					case 'grid':
						$this->_scaffoldGrid($request);
					break;
					case 'view':
						$this->_scaffoldView($request);
					break;
					case 'read':
						$this->_scaffoldRead($request);
					break;
					case 'add':
					case 'create':
						$this->_scaffoldSave($request, 'add');
					break;
					case 'edit':
						$this->_scaffoldSave($request, 'edit');
					case 'update':
						$this->_scaffoldUpdate($request, 'update');
					break;
					case 'delete':
						$this->_scaffoldDelete($request);
					break;
				}
			} else {
				throw new MissingActionException(array(
					'controller' => $this->controller->name,
					'action' => $request->action
				));
			}
		} else {
			throw new MissingDatabaseException(array('connection' => $this->ScaffoldModel->useDbConfig));
		}
	}

	protected function _scaffoldGrid(CakeRequest $request){
	    $models = $this->ScaffoldModel->getAllExtjsModels();			
		$this->controller->set('modelsForExjts', $models);		
		$this->controller->set('modelName' , 	$this->ScaffoldModel->name);
	}
	
	protected function _scaffoldUpdate(CakeRequest $request, $action = 'update') {
		$formAction = 'update';
		$this->layout = 'ajax';		
		$this->controller->viewClass = 'Json';
		$HTTP_RAW_POST_DATA = file_get_contents('php://input');		
		//convert top level stdclass to array
		$jsonData = get_object_vars(json_decode($HTTP_RAW_POST_DATA));			
		
		$success = $this->ScaffoldModel->save($jsonData, array('validate' => true));

		if($success !== false){			
			unset($success);
			$success = true;
		}
		$this->controller->set(array('data' => $success, '_serialize' => 'data'));
 
	}
	
	function _getPage($page, $limit, $conditions, $orderBy){
		$params = array(
				'conditions' => $conditions,
				'recursive' => -1, //int
				'order' => $orderBy, //string or array defining order
				'limit' => $limit, //int
				'page'=>$page, //int   
				'callbacks' => false 
			);	

		$countParams = array(
				'conditions' => $conditions,
				'recursive' => -1, //int
				'order' => $orderBy, //string or array defining order
				'callbacks' => false 
			);
			
			$page =  $this->ScaffoldModel->find('all', $params);
			$count = $this->ScaffoldModel->find('count', $countParams);
			
			
			$toReturn = array();
			for($i =0; $i< count($page); $i++){
				array_push($toReturn, $page[$i][$this->ScaffoldModel->name ]);
			}			
			
			return(array( $this->ScaffoldModel->name  => $toReturn, 'total' => $count));
	}
	
	protected function _scaffoldRead(CakeRequest $request){
		$this->layout = 'ajax';
		$this->controller->viewClass = 'Json';
		$urlParams = ($request->query);		
		$page = $urlParams['page'];	
		$limit =  $urlParams['limit'];
		$conditions = array();
		$order = array();
		
		if(isset($urlParams['filter'])){
			$filters =  json_decode($urlParams['filter']);
			
			for($i = 0; $i < count($filters); $i++){
				$conditions[$this->ScaffoldModel->className . '.' . $filters[$i]->property] = $filters[$i]->value;	
			}
			
		}
		if(isset($urlParams['sort'])){
			$sorters =  json_decode($urlParams['sort']);
			
				for($i = 0; $i < count($sorters); $i++){
				$order[$this->ScaffoldModel->className . '.' . $sorters[$i]->property] = $sorters[$i]->direction;	
			}
		}		

		$toJson = $this->_getPage($page,$limit,$conditions,$order);
		
		unset($order);
		unset($conditions);
		$this->controller->set(array('data' => $toJson, '_serialize' => 'data')); 
		
	}
}

?>
