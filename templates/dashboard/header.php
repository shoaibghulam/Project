
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deshboard</title>
    <!--CSS Links --> 
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/css/bootstrap.css?ts=<?=time()?>"">
   <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/css/style.css?ts=<?=time()?>"">
    <script src="<?php echo base_url() ?>/assets/admin/js/jquery-3.3.1.min.js?ts=<?=time()?>""></script>
    <script src="<?php echo base_url() ?>/assets/admin/js/bootstrap.js?ts=<?=time()?>""></script>
     <!-- Inserting TMC plugin for textarea-->
      
     
</head>
<body>
 <!--Navegation-->

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('Dashboard'); ?>">GS King</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url('Dashboard'); ?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url('Services'); ?>">Services</a></li>
       
         <li><a href="<?php echo base_url('Works'); ?>">Portfolio</a></li>
         <li><a href="<?php echo base_url('Skills'); ?>">Skills</a></li>
        <li><a href="<?php echo base_url('Setting'); ?>">Setting</a></li>
          <li><a href="<?php echo base_url(); ?>" target="_blank">View</a></li>
      
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="<?php echo base_url('AdminLoginbo/logout'); ?>">logout</a></li>
      </ul>
    </div>
  </div>
</nav> <!--/Navegation-->