<?php  

	class FoldersController extends AppController {
		public $helpers = array('Html', 'Form');

		public function index() {
			$this->set('folders', $this->Folder->find('all'));
		}
		// End index
	}
	// End FoldersController

?>