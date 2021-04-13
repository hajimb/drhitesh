<form role="form" id="deleteForm">
  	<div class="box-body" id="abc">
      	<input type="hidden" id="id" name="id" value="<?= $id;?>">
      	<input type="hidden" id="module" name="module" value="<?= $table;?>">
  	</div>
	<P><b>Are You Sure You Want To Delete <?= $message;?>?</p>
</form>