<header class="top-header" style="background: url('<?php echo site_url(); ?>assets/img/1 (1).jpg')fixed">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="page-heading">
					<h1><?= $title; ?></h1>
					<hr class="small"/>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">
	<div class="image-bg">
	<div class="container begining create-box">
	<?php echo validation_errors(); ?>

	<?php echo form_open_multipart('admin/pages/create_position'); ?>
	  <div class="form-group">
		<label class="btn-log">Position name</label>
		<input type="text" class="text-input" name="name" placeholder="Add Position name">
	  </div>
	   <div class="form-group">
		  <label class="btn-log">Username</label>
		  <select name="user_id" class="text-input">
			  <?php foreach($unused_pos as $user): ?>
				<option value="<?php echo $user['id']; ?>"><?php echo $user['name']; ?></option>
			  <?php endforeach; ?>
		  </select>
	  </div>
	   <div class="form-group">
		<label class="btn-log">Duties</label>
		<textarea class="text-input" name="duties" placeholder="Add position duty"></textarea>
	  </div>
	  <div class="form-group">
		<label class="btn-log">Position info</label>
		<textarea id="editor1" class="text-input" name="info" placeholder="Add position information"></textarea>
	  </div>
	  <div class="form-group">
		  <label class="btn-log">Upload Image</label>
		  <input type="file" name="userfile" size="20">
	  </div>
	  <button type="submit" class="btn btn-cust" style="float: none">Submit</button>
	  
	</form>
	</div>
	</div>
	</div>	
</div>
</header>
<script src="/Macsit/assets/editor/full/ckeditor.js" ></script>
<script>
	CKEDITOR.replace( 'editor1' );
</script>
