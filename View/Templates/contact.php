<?php ob_start() ?>
	<h2>About me</h2>
	<p>Beginer computer programmer, best of the best!<br>

	I know next languages...<br></p>
<?php $content=ob_get_clean(); ?>
	<?php include "View/Templates/Layout.php";