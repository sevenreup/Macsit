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

	<?php echo form_open_multipart('admin/pages/create_service'); ?>
	  <div class="form-group">
		<label class="btn-log">Service Name</label>
		<input type="text" class="form-control" name="name" placeholder="Add Service name">
	  </div>
	   <div class="form-group">
		<label class="btn-log">Service overview</label>
		<textarea class="form-control .inputgroup" name="overview" placeholder="Add overview service"></textarea>
	  </div>
	  <div class="form-group">
		<label class="btn-log">icon name class</label>
		<textarea class="form-control .inputgroup" name="icon" placeholder="Add icon name"></textarea>
	  </div>
	  <div class="form-group">
		<label class="btn-log">Service info</label>
		<textarea id="editor1" class="form-control" name="info" placeholder="Add Service information"></textarea>
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
