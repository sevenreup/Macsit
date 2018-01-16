<!DOCTYPE html>
<html lang="en">

<head>

    <title>cimixit</title>

<!--meta decrelation-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Macsit website and blog">
    <meta name="author" content="Sevenreup4ill">
<!--end of meta shit-->

<!--stylesheet linking-->
    <link href="/Macsit/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Macsit/assets/css/try.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Macsit/assets/css/blog.css" />
    <link rel="stylesheet" type="text/css" href="/Macsit/assets/css/Pages.css" />
    <link rel="stylesheet" type="text/css" href="/Macsit/assets/font-awesome/css/font-awesome.min.css">
<!--end of stylesheet linking-->
    <script  src="/Macsit/assets/js/jquery.js"></script>
    <script  src="/Macsit/assets/js/bootstrap.min.js"></script>
    <script  src="/Macsit/assets/js/clean-blog.min.js"></script>
    <script type="text/javascript" language="javascript">
         $(document).ready(function() {
            $("div").next(".item").removeClass("active");
         });
      </script>
</head>

<body>
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-vis nav-justified navbar-custom">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle btn btn-primary" data-toggle="collapse"
    			data-target="#example-navbar-collapse">
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
                <h1><a class="navbar-brand " href="<?php echo base_url(); ?>">
                <div>The Logo</div>
                <span>The logo head line</span></a></h1>
                </div>
                <div class="collapse navbar-collapse"  id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>posts">Posts</a></li>
                        <li><a href="<?php echo base_url(); ?>categories">Category</a></li>
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <?php if($this->session->userdata('admin') && $this->session->userdata('logged_in')): ?>
                        	<li><a href="<?php echo base_url(); ?>admin">Admin</a></li>
                        <?php endif; ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <?php if(!$this->session->userdata('logged_in')) : ?>
                        <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
                        <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
                    <?php endif; ?>
                    <?php if($this->session->userdata('logged_in')) : ?>
                      <li class="dropdown">
                    <a class="dropdown-toggle" aria-expanded="false" href="#" data-toggle="dropdown"><i class="fa fa-user"></i> 
                    <?php $logged_user = $this->session->userdata('username');
                    echo $logged_user;?> 
                     <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>posts/create"><i class="fa fa-fw fa-envelope"></i>  Create post</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>categories/create"><i class="fa fa-fw fa-gear"></i> Create category</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(); ?>users/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container" style="
    width: 100%;
    padding: 0;">