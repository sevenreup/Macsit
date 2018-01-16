<div class="post-cover" style="background: url('<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>') center;">
	<div class="post-cover" style="background: url(/Macsit/assets/img/top.png) repeat;">
		<div class="post-cover-content">
			<h2><?php echo $post['title']; ?></h2>
			<small class="posted_date">Posted on: <?php echo $post['created_at']; ?></small><br>
		</div>
		</div>
</div>
<div class="post-body col-lg-12">
		<?php echo $post['body']; ?>
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
		<hr>
		<a class="btn btn-cust pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
		<?php endif; ?>
<?php if($this->session->userdata('user_id') == $post['user_id']  || $this->session->userdata('admin')): ?>
			<button class="btn btn-cust-danger btn-lg" data-toggle="modal"  
	   data-target="#<?php echo $post['id']; ?>" style="float: none;"> 
	   Delete
	</button> 
			
<div class="modal fade" id="<?php echo $post['id']; ?>" tabindex="-1" role="dialog"  
	   aria-labelledby="My<?php echo $post['title']; ?><?php echo $post['id']; ?>modal" aria-hidden="true"> 
	   <div class="modal-dialog"> 
	    <div class="modal-content"> 
	         <div class="modal-header"> 
	            <button type="button" class="close"  
	               data-dismiss="modal" aria-hidden="true"> 
	                  &times; 
	            </button> 
	            <h4 class="modal-title" id="my<?php echo $post['title']; ?><?php echo $post['id']; ?>Label">
	               <?php echo $post['title']; ?>
	            </h4> 
	         </div> 
	         <div class="modal-body"> 
	            Are you sure you want to delete <?php echo $post['title']; ?> post?
	         </div> 
	         <div class="modal-footer"> 
	            <button type="button" class="btn btn-default"  
	               data-dismiss="modal">Close 
	            </button> 
	            <?php echo form_open('/posts/delete/'.$post['id']); ?>
					<input type="submit" value="Delete" class="btn-cust-danger center-block">
				</form>
	         </div> 
	      </div>
		</div>
</div>			
			
<?php endif; ?>
</div>
<div class="col-lg-12 comment-block">
	<div class="container">
	<h3>Comments</h3>
	<?php if($comments) : ?>
		<?php foreach($comments as $comment) : ?>
			<div class="comment-item">
				<div class="avatar">
					<img src="<?php echo site_url(); ?>assets/img/com_icon.png">
					<strong><?php echo $comment['name']; ?></strong>
				</div>
				<div class="comment-data">
					<time datetime="<?php echo $comment['created_at']; ?>"><?php echo $comment['created_at']; ?></time>
				</div>
				<p><?php echo $comment['body']; ?></p>
			</div>
		<?php endforeach; ?>
	<?php else : ?>
		<p>No comments to display</p>
	<?php endif; ?>
	<hr>
</div>
<div class="comment">
	<div class="container">
		<h3>Add Comment</h3>	
<?php if(!$this->session->userdata('user_id') == $post['user_id']): ?>
		<?php echo validation_errors(); ?>
		<?php echo form_open('comments/create/'.$post['id']); ?>
		<div class="col-md-6 input-right">
			<div class="form-group">
				<input type="text" name="name" class="text-input" placeholder="Enter Name">
			</div>
			<div class="form-group">
				<input type="text" name="email" class="text-input" placeholder="Enter Email">
			</div>
		</div>
		<div class="col-md-6 input-left">
			<div class="form-group">
				<textarea name="body" class="text-input text-area" placeholder="Comment"></textarea>
			</div>
			<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
			<button class="btn-cust" type="submit">Submit</button>
		</div>

		</form>
		
<?php else : ?>
<?php echo validation_errors(); ?>
	<?php echo form_open('comments/create/'.$post['id']); ?>
	<div class="container input-right">
		<div class="form-group">
			<textarea name="body" class="text-input" placeholder="Comment"></textarea>
		</div>
		<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
		<button class="btn-cust" type="submit">Submit</button>
<?php endif; ?>
	</div>
	</div>
</div>
</div>
