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
			 <div class="container col-lg-12 ">
				<div class="row">
				<h3>Posts</h3>
				<?php if($posts) : ?>
				<?php foreach($posts as $post) : ?>
					<div class="col-md-3">
						<div class="single-post">
							<div class="post-thumb-h">
								<a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"></a>
							</div>
							<div class="post-content">
								<h4><a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><?php echo $post['title']; ?></a></h4>
								<p><?php echo word_limiter($post['preview'], 30); ?></p>
								<a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="btn-more">View</a>
							</div>
							<span class="post-date"><?php echo $post['created_at']; ?></span>
						</div>
					</div>
					<?php endforeach; ?>
				<?php else : ?>
					<?php echo('This User has no Posts'); ?>
				<?php endif?>
				</div>
			</div>
        </div>
        <div id="tabs-3">
        	<div class="categories-grid">
        	<h3>Categories</h3>
        	<?php if($m_category) : ?>
				<?php foreach($m_category as $category) : ?>
						<div class="col-md-3 categories-hold-1">	
							<figure class="category-hold-2">
							<a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>">
								<img src="<?php echo site_url(); ?>assets/images/categories/<?php echo $category['category_image']; ?>"/>
								<div class="carousel-caption">
									<div class="category-caption">
										<h4><?php echo $category['name']; ?></h4>
									</div>
								</div></a>
							</figure>
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
        	<?php else : ?>
        		<?php echo('This User has no Categories'); ?>
        	<?php endif?>
				
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