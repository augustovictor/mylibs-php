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

		public function add() {
			if($this->request->is('post')) {
				$this->Article->create();
				if($this->Article->save($this->request->data)) {
					$this->Session->setFlash(__('Your article has been saved.'));
					return $this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('Unable to save your article.'));
			}
		}
		// End add


	}
	// End ArticlesController

?>