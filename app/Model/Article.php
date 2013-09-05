<?php 

	class Article extends AppModel {
		public $validate = array(
			'title' => array('rule' => 'notEmpty'),
			'content' => array('rule' => 'notEmpty')
			);
	}
	// End Article

?>