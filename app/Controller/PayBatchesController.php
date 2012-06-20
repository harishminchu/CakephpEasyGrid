<?php
App::uses('AppController', 'Controller');
App::uses('EasyGridScaffold', 'Controller');
/**
 * PayBatches Controller
 *
 * @property PayBatch $PayBatch
 */
class PayBatchesController extends AppController {
	public $scaffold;
	
	protected function _getScaffold(CakeRequest $request) {
		return new EasyGridScaffold($this, $request);
	}


}
