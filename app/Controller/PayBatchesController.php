<?php
App::uses('AppController', 'Controller');

/**
 * PayBatches Controller
 *
 * @property PayBatch $PayBatch
 */
class PayBatchesController extends AppController {
 
	 
	function grid(){	
		$models = $this->PayBatch->getExtjsModel();
		$associations = $this->PayBatch->getAssociated();
		debug($associations[2]);
	}


}
