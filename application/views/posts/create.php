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

<div class="row">
<div class="container begining">
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label class="btn-log">Title</label>
    <input type="text" class="text-input" name="title" placeholder="Add Title" required>
  </div>
   <div class="form-group">
    <label class="btn-log">Post Preview</label>
    <textarea class="text-input" name="preview" placeholder="Add a 80 word post preview"></textarea>
  </div>
  <div class="form-group">
    <label class="btn-log">Body</label>
    <textarea id="editor1" class="text-input" name="body" placeholder="Add Body" required></textarea>
  </div>
  <div class="form-group">
	  <label class="btn-log">Category</label>
	  <select name="category_id">
		  <?php foreach($categories as $category): ?>
		  	<option class="select-input" value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		  <?php endforeach; ?>
	  </select>
  </div>
  <div class="form-group">
	  <label class="btn-log">Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-cust" style="float: left;">Submit</button>
</form>
</div>
</div>
</header>
<script src="/Macsit/assets/editor/full/ckeditor.js" ></script>
<script>
	CKEDITOR.replace( 'editor1' );
</script>