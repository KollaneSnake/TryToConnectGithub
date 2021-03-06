<?php $title = 'Новый пост'; ?>

<?php ob_start() ?>

<h2><a href="../index.php" class="fa fa-chevron-left"></a> Новый пост</h2>
<hr>
<div class="col-xs-4">
<form method="POST">
	<div class="form-group">
	 	<label for="add_autor">Автор</label>
	 	<input type="text" class="form-control" name="add_autor">
	</div>
	<div class="form-group">
	 	<label for="add_date">Время</label>
	 	<input type="text" class="form-control" name="add_date" value='<?php echo date("Y-m-d H:i:s"); ?>'>
	</div>
	<div class="form-group">
	 	<label for="add_title">Заголовок *</label>
	 	<input type="text" class="form-control" name="add_title">
	</div>
	<div class="form-group">
	 	<label for="add_content">Текст</label>
	 	<textarea rows="10" cols="45" name="add_content" class="form-control"></textarea>
	</div>
	<button type="submit" id="submit" name="submit" class="btn btn-default"><i class="fa fa-plus"></i>
 Добавить</button> 
	<button type="reset" reset="" name="" class="btn btn-default"><i class="fa fa-eraser"></i>
 Очистить</button>
</form>
</div>

<?php $content = ob_get_clean(); ?>

<?php include "View/Templates/layout.php";