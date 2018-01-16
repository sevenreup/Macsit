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
<div class="item active">
<img src="/Macsit/assets/img/1 (1).jpg" alt="First slide">
<div class="carousel-caption">
	<h3>First slide</h3>
	<p>This example text and shit</p>
</div>
</div>
<div class="item">
<img src="/Macsit/assets/img/1 (2).jpg" alt="Second slide">
<div class="carousel-caption">This Caption 2</div>
</div>
<div class="item">
<img src="/Macsit/assets/img/1 (3).jpg" alt="Third slide">
<div class="carousel-caption">This Caption 3</div>
</div>
</div>
<!-- Carousel nav -->
<a class="carousel-control left" href="#myCarousel"
data-slide="prev"></a>
<a class="carousel-control right" href="#myCarousel"
data-slide="next"></a>
</div>
                  
</div>
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>
      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>
 <div class="services-container">
 	<div class="col-md-6 services-left">
 		<div class="services-grid1">
 			<div class="col-md-4 service-grid">
 				<i class="fa fa-language" aria-hidden="true"></i>
 				<h5>Language Lessons</h5>
 				<p>Lorem ipsum dolor sit amet </p>
 			</div>
 			<div class="col-md-4 service-grid">
 				<i class="fa fa-language" aria-hidden="true"></i>
 				<h5>Language Lessons</h5>
 				<p>Lorem ipsum dolor sit amet </p>
 			</div>
 			<div class="col-md-4 service-grid">
 				<i class="fa fa-language" aria-hidden="true"></i>
 				<h5>Language Lessons</h5>
 				<p>Lorem ipsum dolor sit amet </p>
 			</div>
 			<div class="clearfix"></div>
 		</div>
 		<div class="services-grid2">
 			<div class="col-md-4 service-grid">
 				<i class="fa fa-language" aria-hidden="true"></i>
 				<h5>Language Lessons</h5>
 				<p>Lorem ipsum dolor sit amet </p>
 			</div>
 			<div class="col-md-4 service-grid">
 				<i class="fa fa-language" aria-hidden="true"></i>
 				<h5>Language Lessons</h5>
 				<p>Lorem ipsum dolor sit amet </p>
 			</div>
 			<div class="col-md-4 service-grid">
 				<i class="fa fa-language" aria-hidden="true"></i>
 				<h5>Language Lessons</h5>
 				<p>Lorem ipsum dolor sit amet </p>
 			</div>
 			<div class="clearfix"></div>
 		</div>
 	</div>
 	<div class="col-md-6 services-right">
 		<div class="services-info">
			<h3 class="service-tittle">Our best services</h3>
			<p class="more-service">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor. In hac habitasse platea dictumst. Donec nunc nunc,interdum sed aliquet quis.</p>
			<a class="btn btn-primary" href="single.html">Learn more</a>
		</div>
 	</div>
 	<div class="clearfix"></div>
 </div>