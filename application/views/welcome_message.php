<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Log In Validation with CodeIgniter</a>
 </nav>

	<?php echo form_open('welcome/new'); ?>
	  <fieldset>
	    <legend>Sign in now!</legend>
	 
	    <div class="form-group">
	      <label for="exampleInputEmail1">Username</label>
	      <?php echo form_input(['name'=>'username', 'placeholder'=>'Username', 'class'=>'form-control']) ?>
	      <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
	      <?php echo form_error('username', '<div class="text-danger">', '</div>') ?>
	    </div>

	    <div class="form-group">
	      <label for="exampleInputPassword1">Password</label>
	      <?php echo form_password(['name'=>'password', 'placeholder'=>'Password', 'class'=>'form-control']) ?>
	      <?php echo form_error('password', '<div class="text-danger">', '</div>') ?>
	    </div>
	 
	    </fieldset>
	    <?php echo form_submit(['name'=>'submit', 'value'=>'Log In', 'class'=>'btn btn-primary']) ?>
	  </fieldset>

	<?php echo form_close(); ?>

</body>
</html>