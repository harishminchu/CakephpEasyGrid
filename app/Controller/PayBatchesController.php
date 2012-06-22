<?php
App::uses('AppController', 'Controller');

/**
 * PayBatches Controller
 *
 * @property PayBatch $PayBatch
 */
class PayBatchesController extends AppController {
 
	 
	function grid(){	
		$temp = $this->PayBatch->getAllExtjsModels();	
		debug($temp);
	}


}
