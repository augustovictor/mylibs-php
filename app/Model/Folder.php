<?php  

	App::uses('AppModel', 'Model');

	class Folder extends AppModel {

		var $name = 'Folder';

		public $hasAndBelongsToMany = array(
			'Article' => array(
				'className' => 'Article',
                'joinTable' => 'articles_folders',
                'foreignKey' => 'folder_id',
                'associationForeignKey' => 'article_id',
                'unique' => true,
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
	// End Folder

?>