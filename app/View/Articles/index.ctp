<h1> Articles </h1>

<?php echo $this->Html->link('Create article', array('controller' => 'articles', 'action' => 'add')); ?>

<table>
	<thead>
		<tr>
			<th> Title </th>
			<th> Content </th>
			<th> Actions </th>
		</tr>
	</thead>

	<tbody>
		<?php foreach($articles as $article): ?>
			<tr>
				<td> <?php echo $this->Html->link($article['Article']['title'], array('controller' => 'articles', 'action' => 'view', $article['Article']['id'])); ?> </td>
				<td> <?php echo $article['Article']['content']; ?> </td>
				<td> 
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $article['Article']['id'])); ?> 
					<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $article['Article']['id']), array('confirm' => 'Are you sure?')); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		<?php unset($article); ?>
	</tbody>

</table>