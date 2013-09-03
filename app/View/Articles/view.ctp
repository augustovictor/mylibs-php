<h3> <?php echo h($article['Article']['title']); ?> </h1>

<p>
	<small>
		Created: <?php echo h($article['Article']['created']); ?>
	</small>
</p>

<hr />

<p>
	<h3>Content:</h3>
	<?php echo h($article['Article']['content']); ?>
</p>