<?php 

	App::uses('AppModel', 'Model');

	class Article extends AppModel {

		var $name = 'Article';

		public $validate = array(
			'title' => array('rule' => 'notEmpty'),
			'content' => array('rule' => 'notEmpty')
			);

		public $hasAndBelongsToMany = array(
			'Folder' => array(
				'className' => 'Folder',
				'joinTable' => 'articles_folders',
				'foreignKey' => 'article_id',
				'associationForeignLey' => 'folder_id',
				'unique' => 'true',
				'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'finderQuery' => '',
                'with' => ''
			)
		);
	}
	// End Article

?>