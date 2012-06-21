<?php
App::uses('AppController', 'Controller');
App::uses('EasyGridScaffold', 'Controller');
/**
 * PayBatches Controller
 *
 * @property PayBatch $PayBatch
 */
class PayBatchesController extends AppController {
var $components = array('EasyGrid');
	public $scaffold;
	
	protected function _getScaffold(CakeRequest $request) {
		return new EasyGridScaffold($this, $request);
	}
	
	function grid(){
	
	
		$this->EasyGrid->setExtjsModels();
	
	
	}


}
