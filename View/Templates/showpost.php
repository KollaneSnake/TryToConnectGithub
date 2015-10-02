<?php ob_start() ?>

	<h2><?php echo $post['title'];?></h2>

		<div>
			Date: <?php echo $post ['date'];?>
		</div>

		<div>
			Autor: <?php echo $post ['autor'];?>
		</div>

		<div>
			Content: <?php echo $post ['content'];?>
		</div>

<?php $content=ob_get_clean(); ?>
	<?php include "View/Templates/Layout.php";