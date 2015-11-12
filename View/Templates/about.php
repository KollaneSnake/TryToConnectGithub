<?php $title = 'Обо мне'; ?>

<?php ob_start() ?>

<h2><a href="../index.php" class="fa fa-chevron-left"></a> Обо мне</h2>
<hr>
	<ul>
		<li>Juri Kiir</li>
		<li>2KTVRp2015</li>
	</ul>

<?php $content = ob_get_clean(); ?>

<?php include "View/Templates/layout.php";