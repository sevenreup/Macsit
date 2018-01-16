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
<?php echo validation_errors(); ?>
<?php echo form_open('users/register'); ?>
	<div class="row">
	<div class="image-bg">
	<div class="container begining">
		<div class="col-md-4 col-md-offset-4">
			<label class="btn-log">Name</label>
			<div class="input-group  margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
				<input type="name" class="form-control text-input" name="name" placeholder="Name" required>
			</div>
			<label class="btn-log">Birthday</label>
			<div class="input-group  margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-address-card-o fa-fw"></i></span>
				<input type="text" class="form-control text-input" id="birthday" name="birthday" placeholder="yy-mm-dd">
			</div>
			<label class="btn-log">Email</label>
			<div class="input-group  margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
				<input type="email" class="form-control text-input" name="email" placeholder="Email" required>
			</div>
			<label class="btn-log">Username</label>
			<div class="input-group  margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-address-book-o fa-fw"></i></span>
				<input type="username" class="form-control text-input" name="username" placeholder="Username" required>
			</div>
			<label class="btn-log">Password</label>
			<div class="input-group  margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-unlock fa-fw"></i></span>
				<input type="password" class="form-control text-input" name="password" placeholder="Password" required>
			</div>
			<label class="btn-log">Confirm Password</label>
			<div class="input-group  margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-unlock fa-fw"></i></span>
				<input type="password" class="form-control text-input" name="password2" placeholder="Confirm Password" required>
			</div>
			<button type="submit" class="btn btn-cust btn-block btn-log">Submit</button>
		</div>
		</div>
		</div>
	</div>
<?php echo form_close(); ?>
</header>
<script  src="/Macsit/assets/js/jquery-ui.js"></script>
<script> 
         $(function() { 
            $( "#birthday" ).datepicker(
            	{
            		dateFormat: "yy-mm-dd",
            		showAnim: "slide",
            		nextText: ">",
            		prevText: "<",
            		maxDate: new Date(2001, 12 - 1, 31)
            	}); 
         }); 
</script> 
