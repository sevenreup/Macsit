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
<div class="container">
	<h3 class="about-1title">Our Website is so cool we do alot of staff</h3>
	<div class="about-img">
		<h2>WEBSITE NAME</h2>
	</div>
	<div class="about-info">
		<div class="col-md-4 about-view" id="stage-1">
		</div>
		<div class="col-md-4 about-view" id="stage-2">
		</div>
		<div class="col-md-4 about-view" id="stage-3">
		</div>
	</div>
</div>
<div class="our-niggas">
	<div class="row">
		<div class="people-main">
			<h3>This are the guys incharge</h3>
			<div class="people">
			<?php foreach($member_info as $info) : ?>
				<div class="col-md-3 people-size">
					<div class="people-img">
						<img src="<?php echo site_url(); ?>assets/images/users/<?php echo $info['post_image']; ?>">
						<a href="<?php echo site_url('/about/position/'.$info['pos_slug']); ?>"><h4><?php echo $info['name']; ?></h4></a>
						<h5><?php echo $info['position_name']; ?></h5>
						<!--<p><//?php echo $info['duties']; ?><p>-->
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<script type="text/javascript" language="javascript"> 
   $(document).ready(function() { 
          $.getJSON('<?php echo site_url(); ?>assets/json/info.json', function(jd) { 
             $('#stage-1').html('<h5>' + jd.name_1 + '</h5>'); 
             $('#stage-1').append('<p class="about-p">' + jd.body_1+ '</p>'); 
             $('#stage-2').append('<h5>' + jd.name_2+ '<h5>'); 
             $('#stage-2').append('<p class="about-p">' + jd.body_2+ '</p>'); 
             $('#stage-3').append('<h5>' + jd.name_3+ '</h5>');
			 $('#stage-3').append('<p class="about-p">' + jd.body_3+ '</p>'); 
          }); 
   }); 
   </script>

