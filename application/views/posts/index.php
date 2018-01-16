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
	<div class="container begining" style="padding-top: 0px!important;">
		<?php if($this->session->flashdata('post_created')): ?>
		        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
		      <?php endif; ?>
		 <?php if($this->session->flashdata('post_updated')): ?>
		        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
		      <?php endif; ?>
	      <?php if($this->session->flashdata('post_deleted')): ?>
	        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
	      <?php endif; ?>

 <div class="container col-lg-12">
 	<div class="row">
 	<?php foreach($posts as $post) : ?>
 		<div class="col-md-3">
 			<div class="single-post">
 				<div class="post-thumb-h">
 					<a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"></a>
 				</div>
 				<div class="post-content">
 					<h4><a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><?php echo word_limiter($post['title'], 10); ?></a></h4>
 					<p><?php echo word_limiter($post['preview'], 30); ?></p>
 					<a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="btn-more">View</a>
 				</div>
 				<span class="post-date"><?php echo $post['created_at']; ?></span>
 			</div>
 		</div>
 		<?php endforeach; ?>
 	</div>
 </div>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>
</div>
