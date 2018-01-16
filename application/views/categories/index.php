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
</header>
<div class="container begining">
       <?php if($this->session->flashdata('category_created')): ?>
       <?php echo '<p class="alert alert-success" data-dismiss="alert" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom"  
   title="Click to close">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom"  
   title="Click to close">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>
<div class="categories-grid row">
<?php foreach($m_category as $category) : ?>
	<div class="col-md-3 categories-hold-1">	
		<a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>">
			<img src="<?php echo site_url(); ?>assets/images/categories/<?php echo $category['category_image']; ?>"/>
			<div class="carousel-caption">
				<div class="category-caption">
					<h4><?php echo $category['name']; ?></h4>
				</div>
			</div></a>
	<div>
	<?php if($this->session->userdata('user_id') == $category['user_id'] || $this->session->userdata('admin')): ?>
	<button class="btn btn-cust-danger btn-lg" data-toggle="modal"  
	   data-target="#<?php echo $category['id']; ?>" style="float: none;"> 
	   Delete
	</button> 
	<div class="modal fade" id="<?php echo $category['id']; ?>" tabindex="-1" role="dialog"  
	   aria-labelledby="My<?php echo $category['name']; ?><?php echo $category['id']; ?>modal" aria-hidden="true"> 
	   <div class="modal-dialog"> 
	    <div class="modal-content"> 
	         <div class="modal-header"> 
	            <button type="button" class="close"  
	               data-dismiss="modal" aria-hidden="true"> 
	                  &times; 
	            </button> 
	            <h4 class="modal-title" id="my<?php echo $category['name']; ?><?php echo $category['id']; ?>Label">
	               <?php echo $category['name']; ?>
	            </h4> 
	         </div> 
	         <div class="modal-body"> 
	            Are you sure you want to delete <?php echo $category['name']; ?> category?
	         </div> 
	         <div class="modal-footer"> 
	            <button type="button" class="btn btn-default"  
	               data-dismiss="modal">Close 
	            </button> 
	            <form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
				<input type="submit" class=" btn-cust-danger center-block" value="delete">
			</form>
	         </div> 
	      </div>
		</div>
	</div>
	<?php endif; ?>
	<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	</div>
<?php endforeach; ?>
	<div class="clearfix"></div>
</div>
</div>