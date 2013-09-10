<h1> Folders </h1>

<table>
	<thead>
		<tr>
			<th> Title </th>
			<th> Files </th>
			<th> Actions </th>
		</tr>
	</thead>

	<tbody>
		<?php foreach($folders as $folder): ?>
			<tr>
				<td>
					<?php echo $this->Html->link($folder['Folder']['title'], array('controller' => 'folders', 'action' => 'view', $folder['Folder']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>