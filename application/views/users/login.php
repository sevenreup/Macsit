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

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>
<?php echo form_open('users/login'); ?>
	<div class="row">
	<div class="image-bg">
	<div class="container begining">
		<div class="col-md-4 col-md-offset-4">
			<div class="input-group margin-bottom-sm form-log">
				<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
				<input type="text" name="username" class="form-control text-input" placeholder="Enter Username" required>
			</div>
			<div class="input-group  margin-bottom-sm form-log">
			<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
				<input type="password" name="password" class="form-control text-input" placeholder="Enter Password" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block btn-cust">Login</button>
		</div>
		</div>
		</div>
	</div>
<?php echo form_close(); ?>
</header>
