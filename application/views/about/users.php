<header class="top-header" style="background: url('<?php echo site_url(); ?>assets/img/1 (1).jpg')fixed">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="page-heading">
				<div class="img">
					<img src="<?php echo site_url(); ?>assets/images/users/<?php echo $member_info['post_image']; ?>">
				</div>
					<h1><?php echo $member_info['name']; ?></h1>
					<hr class="small"/><h3>Position : <?php echo $member_info['position_name']; ?></h3>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="row">
		<h3>Personal info :</h3>
		<p><?php echo $member_info['duties']; ?></p>
		<h3>Position info :</h3>
		<p><?php echo $member_info['more_info']; ?></p>
	</div>
	<div class="post-body col-lg-12">
	<?php if($this->session->userdata('admin')): ?>
		<a class="btn btn-danger pull-left" href="<?php echo site_url('admin/pages/edit/'.$member_info['pos_slug']); ?>">Edit</a>
	<?php endif;?>
	</div>
</div>