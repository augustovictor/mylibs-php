<?php  

	class ArticlesController extends AppController {
		public $helpers = array('Html', 'Form');

		public function index() {
			$this->set('articles', $this->Article->find('all'));
		}
		// End index

		public function view($id = null) {
			if(!$id) {
				throw new NotFoundException(__('Invalid article'));
			}

			$article = $this->Article->findById($id);
			if(!$article) {
				throw new NotFoundException(__('Invalid article'));
			}

			$this->set('article', $article);
		}
		// End view


	}
	// End ArticlesController

?>