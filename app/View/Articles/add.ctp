<h3> New article </h3>

<?php 

	echo $this->Form->create('Article');
	echo $this->Form->input('title');
	echo $this->Form->input('content', array('rows' => '5'));
	echo $this->Form->end('Save article');

?>