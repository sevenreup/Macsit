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
<div class="container">
	<div id="tabs-1"> 
         <ul> 
            <li><a href="#tabs-2">ALL POSTS</a></li> 
            <li><a href="#tabs-3">ALL CATEGORIES</a></li> 
         </ul> 
         <div id="tabs-2"> 
			 <div class="row admin-post">
				<?php foreach($posts as $post) : ?>
					<div class="col-md-3 admin-post-item btn-admin">
						<h4><a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><?php echo $post['title']; ?></a></h4>
						<span><?php echo $post['created_at'];?></span>
						<div>
							<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="pull-left btn-cust">Edit</a>
							<div class="pull-right">

							<button class="btn-cust-danger" data-toggle="modal" data-target="#post<?php echo $post['id']; ?>" style="float: none;">Delete</button> 
							</div>
							
							<div class="modal fade" id="post<?php echo $post['id']; ?>" tabindex="-1" role="dialog"  
								   aria-labelledby="My<?php echo $post['title']; ?><?php echo $post['id']; ?>modal" aria-hidden="true"> 
								   <div class="modal-dialog"> 
									<div class="modal-content"> 
										 <div class="modal-header"> 
											<button type="button" class="close"  
											   data-dismiss="modal" aria-hidden="true"> 
												  &times; 
											</button> 
											<h4 class="modal-title" id="my<?php echo $post['title']; ?><?php echo $post['id']; ?>Label">
											   <?php echo $post['title']; ?>
											</h4> 
										 </div> 
										 <div class="modal-body"> 
											Are you sure you want to delete <?php echo $post['title']; ?> post?
										 </div> 
										 <div class="modal-footer"> 
											<button type="button" class="btn btn-default"  
											   data-dismiss="modal">Close 
											</button> 
											<?php echo form_open('/posts/delete/'.$post['id']); ?>
												<input type="submit" value="Delete" class="btn-cust-danger center-block">
											</form>
										 </div> 
									  </div>
									</div>
							</div>
							
							
						</div>
						<div class="clearfix"></div>
					</div>
				<?php endforeach; ?>
			</div>
         </div> 
         <div id="tabs-3"> 
<div class="row admin-category">
			<?php foreach($categories as $category) : ?>
			<div class="col-md-6 admin-category-item btn-admin">
				<h4><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a></h4>
				<div>
						<a class="pull-left btn-cust" href="<?php echo site_url('/categories/posts/'.$category['id']); ?>">View</a>
					<div class="pull-right">
						<button class="btn-cust-danger" data-toggle="modal" data-target="#<?php echo $category['id']; ?>" style="float: none;">Delete</button>	
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
			
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
											Are you sure you want to delete <?php echo $category['name']; ?> post?
										 </div> 
										 <div class="modal-footer"> 
											<button type="button" class="btn btn-default"  
											   data-dismiss="modal">Close 
											</button>
											<form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
											<input type="submit" class="btn-cust-danger center-block" value="Delete">
											</form> 
										 </div> 
									  </div>
									</div>
							</div>
			<?php endforeach; ?>
		</div>
         </div> 
      </div> 
</div>
<script  src="/Macsit/assets/js/jquery-ui.js"></script>
<script> 
         $(function() { 
            $( "#tabs-1" ).tabs(); 
         }); 
</script>
<script>
	 $(document).ready(function() {
	 $(".ui-widget-content").addClass("admin-wid");
	 $(".ui-tabs-nav").addClass("nav");
		$(".ui-tabs-nav").addClass("admin-nav");
     $(".ui-tabs-nav").addClass("nav-tabs"); 
	 $(".ui-tabs-tab").addClass("admin-tabs");
   });
</script> 