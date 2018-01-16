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
<div class="container begining">
	<div class="container">
		<div class="col-md-6">
		<a clas="btn btn-danger" href="<?php echo base_url(); ?>admin/pages/create_position">
			<div class="btn btn-info" style="width: 100%">
				<h2>Create position</h2>
			</div>
		</a>
	</div>
	<div class="col-md-6">
		<a clas="btn btn-danger" href="<?php echo base_url(); ?>admin/pages/create_service">
			<div class="btn btn-info" style="width: 100%">
				<h2>Add Service</h2>
			</div>
		</a>
	</div>
	<div class="col-md-6">
		<button class="btn btn-info" style="width: 100%" data-toggle="modal" data-target="#event"><h2>Add Event</h2></button>			
	</div>
	</div>
	<div class="container">
		<div id="tabs-1"> 
         <ul> 
            <li><a href="#tabs-2">Important Members</a></li> 
            <li><a href="#tabs-3">Unused position</a></li> 
         </ul> 
         <div id="tabs-2">
			<div class="container">
				<div class="row">
					<?php foreach($positions as $position) : ?>
						<a href="<?php echo site_url('/about/position/'.$position['pos_slug']); ?>">
							<div class="col-md-6 btn-danger btn">
								<h5><?php echo $position['name']; ?></h5>
								<div class="name-position">
									<h6 class="pull-left"><?php echo $position['position_name']?></h6>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
		 </div>
		 <div id="tabs-3">
			<div class="container">
				<div class="row">
					<?php foreach($unused_pos as $position) : ?>
						<a href="<?php echo site_url('admin/pages/edit/'.$position['pos_slug']); ?>">
							<div class="col-md-6 btn-danger btn">
								<div class="name-position">
									<h6 class="pull-left"><?php echo $position['position_name']?></h6>
									<h6 class="pull-right"><?php echo $position['duties']?></h6>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
		 </div>
		</div>
	</div>	
</div>


<div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="create-event" aria-hidden="true"> 
	<div class="modal-dialog">
	 
		<div class="modal-content" style="background: url('<?php echo site_url(); ?>assets/img/1 (1).jpg') fixed;">
		 <?php echo form_open_multipart('admin/pages'); ?>
			 <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
				<h4 class="modal-title" id="">Add an event
				</h4> 
			</div> 
		<div class="modal-body">
		 	<div class="col-md-6">
			  <div class="form-group">
				<label class="btn-log">Event title</label>
				<textarea type="text" class="text-input" name="title" placeholder="Add Event title" required></textarea>
			  </div>
			   <div class="form-group">
				  <label class="btn-log">Event location</label>
				  <input type="text" class="text-input" name="place" placeholder="Add Event location">
			  </div>
			  
			</div>
			<div class="col-md-6">
				<div class="form-group">
				<label class="btn-log">Event Date</label>
				<input id="event_day" class="text-input" name="date" placeholder="Add Event Date" required>
			  </div>
			  <div class="form-group">
				<label class="btn-log">Position info</label>
				<textarea class="text-input" name="body" placeholder="Add event information" required></textarea>
			  </div>
			  <div class="form-group">
				  <label class="btn-log">Upload Image</label>
				  <input type="file" name="userfile" size="20">
			  </div>
			</div>  
		<div class="clearfix"></div>
		 </div> 
		<div class="modal-footer"> 
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-cust" style="float: left;">Submit</button> 
		</div>
		 </form>
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
	 $("li.admin-tabs").removeClass("ui-state-active");
   });
</script>
<script> 
         $(function() { 
            $( "#event_day" ).datepicker(
            	{
            		dateFormat: "yy-mm-dd",
            		showAnim: "slide",
            		nextText: ">",
            		prevText: "<"
            	}); 
         }); 
</script> 


