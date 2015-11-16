<?php $title = 'Редактирование'; ?>

<?php ob_start() ?>

<h2><a href="../index.php/show?id=<?php echo $post['id'];?>" class="fa fa-chevron-left"></a> Пост #<?php echo $post['id'];?> <b>Редактирование</b></h2>
<hr>
<form method="POST">
	<table class='table-condensed'>
		<tr>
			<td><b>Автор:</b></td>
			<td><input type="text" class="form-control" name="add_autor" value="<?php echo $post['autor'];?>"></td>
		</tr>
		<tr>
			<td><b>Дата:</b></td>
			<td>
				<input type="text" class="form-control" name="add_date" value="<?php echo $post['date'];?>">
			</td>
		</tr>
		<tr>
			<td><b>Заголовок:</b></td>
			<td><input type="text" class="form-control" name="add_title" value="<?php echo $post['title'];?>"></td>
		</tr>
		<tr>
			<td style="vertical-align: top;"><b>Текст:</b></td>
			<td><textarea rows="10" cols="45" class="form-control" name="add_content"><?php echo $post['content'];?></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" name="edit_post" class="btn btn-default"><i class="fa fa-floppy-o"></i> Сохранить</button>
			</td>
		</tr>
	</table>
</form>

<?php $content = ob_get_clean(); ?>

<?php include "View/Templates/layout.php"; ?>