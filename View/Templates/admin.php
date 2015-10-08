<?php ob_start() ?>
	<h2>Administration</h2>
	<form action="add" method="POST" name="form1">
		<table>
			<tr>
				<td>Autor:</td>
				<td><input type="text" name="add_autor"></td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input type="text" name="add_date" value="<?php echo date("Y-m-d H:i:s"); ?>"></td>
			</tr>
			<tr>
				<td>Title:</td>
				<td><input type="text" name="add_title"></td>
			</tr>
			<tr>
				<td>Content:</td>
				<td><textarea name="add_content"></textarea></td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="Clear"></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<?php $content=ob_get_clean(); ?>
	<?php include "View/Templates/Layout.php";