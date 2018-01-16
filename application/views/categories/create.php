<header class="top-header cat-create" style="background: url('/Macsit/assets/img/1 (1).jpg')fixed">
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
<div class="container begining">
<h2><?= $title ;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control text-input" name="name" placeholder="Enter name" required>
	</div>
	<div class="form-group">
	  <label class="btn-log">Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>
	<button type="submit" class="btn btn-cust" style="float: none;">Submit</button>
</form>
</div>
</header>