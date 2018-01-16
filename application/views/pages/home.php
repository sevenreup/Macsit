<div class="banner">
	<div id="myCarousel" class="carousel slide"  data-ride="carousel" data-interval="5000" data-pause="false">
		<!-- Carousel indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- Carousel items -->
		<div class="carousel-inner">
			<?php foreach($recent_posts as $post) : ?>
				<div class="item active">
					<a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"></a>
					<div class="carousel-caption">
						<h3><a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><?php echo $post['title']; ?></a></h3>
						<p><?php echo word_limiter($post['preview'], 20); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- Carousel nav -->
		<a class="carousel-control left" href="#myCarousel"
		data-slide="prev"></a>
		<a class="carousel-control right" href="#myCarousel"
		data-slide="next"></a>
	</div>               
</div>
	
      <?php if($this->session->flashdata('user_registered')): ?>
      	<div class="alert alert-success fade" ">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php echo '<p style="padding: 0;>'.$this->session->flashdata('user_registered').'</p>'; ?>
        </div>
      <?php endif; ?>
      <?php if($this->session->flashdata('user_loggedin')): ?>
      	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php echo '<p style="padding: 0;">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    	</div>
      <?php endif; ?>
    
  <div class="services-container">
 	<div class="col-md-6 services-left">
 		<div class="services-grid1">
 		<?php foreach($services as $service) : ?>
				<div class="col-md-4 service-grid">
					<i class="fa <?php echo $service['icon'];?>" aria-hidden="true"></i>
					<h5><?php echo $service['name'];?></php></h5>
					<p><?php echo word_limiter( $service['overview'], 10); ?></p>
				</div>
			<?php endforeach; ?>
 			<div class="clearfix"></div>
 		</div>

 	</div>
 	<div class="col-md-6 services-right" style=" background: url('<?php echo site_url();?>assets/img/1 (1).jpg') no-repeat center fixed!important; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; -ms-background-size: cover; ">
 		<div class="services-info">
			<h3 class="service-tittle">Our Mission Statement</h3>
			<p class="more-service">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor. In hac habitasse platea dictumst. Donec nunc nunc,interdum sed aliquet quis.</p>
			<a class="btn btn-primary" href="<?php echo site_url(); ?>about/services">See more</a>
		</div>
 	<div class="clearfix"></div>
 </div>
 <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
 	<div class="container events">
 		<div class="row">
 			<h2 class="events-title">Upcoming events</h2>
			 <?php foreach($events as $event) : ?>
			 	<div class="col-md-3">
				 			<div class="ui_box">
					         <div class="ui_box_top highlight">
					            <h1><?php echo $event['event_title']; ?></h1>
					            <h2><?php echo $event['event_place']; ?></h2>
					         </div>
					         <div class="ui_box_inner">
					            <p>Date: <?php echo $event['event_date']; ?></p>
					            <p><?php echo word_limiter($event['event_body'], 5); ?></p>
					            <p><?php echo $event['event_speaker']; ?></p>
					         </div>
					         <div class="drop">
					            <p>Join Now</p>
					            <div class="arrow"></div>
					         </div>
				      		</div>
				 		</div>
			 <?php endforeach; ?>
			 <div class="clearfix"></div>
		</div>
	</div>