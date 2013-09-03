<h1> Articles </h1>

<table>
	<thead>
		<tr>
			<th> Title </th>
			<th> Content </th>
		</tr>
	</thead>

	<tbody>
		<?php foreach($articles as $article): ?>
			<tr>
				<td> <?php echo $this->Html->link($article['Article']['title'], array('controller' => 'articles', 'action' => 'view', $article['Article']['id'])); ?> </td>
				<td> <?php echo $article['Article']['content']; ?> </td>
			</tr>
		<?php endforeach; ?>
		<?php unset($article); ?>
	</tbody>

</table>