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
	<div class="services-cont">
	<?php foreach($services as $service) : ?>
		<div class="service">
			<div class="service-number">
				<b><?php 
					echo $in;
					$in++;
					?></b>
				<span>Serv</span>
			</div>
			<div class="service-item">
				<h5><?php echo $service['name']?></h5>
				<p><?php echo $service['info']?></p>
			</div>
		</div>
	<?php endforeach; ?>	
	</div>
</div>