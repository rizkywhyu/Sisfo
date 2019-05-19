<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title><?= $title ;?> Si Pos</title>
      <link rel="stylesheet" href="<?php echo base_url('asset/css/style-flat.css');?>" type="text/css">
</head>
<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
			<div class="login-form">
				<?php echo form_open('auth/login'); ?>
				<div class="control-group">
				<?php echo form_input(array('type'=>"text", 'class'=>"login-field", 'placeholder'=>"username", 'id'=>"login-name" ,'name'=>"login-name")); ?>
				<div class="login-field-icon fui-user" for="login-name"></div>
				</div>

				<div class="control-group">
				<?php echo form_input(array('type'=>"password", 'class'=>"login-field", 'placeholder'=>"password", 'id'=>"login-pass" ,'name'=>"login-pass")); ?>
				<!-- <input type="password" class="login-field" value="" placeholder="password" id="login-pass"> -->
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<?php echo form_submit(array('id' => 'submit', 'value' => 'Login','class'=>"btn btn-primary btn-large btn-block")); ?>
				<!-- <a class="btn btn-primary btn-large btn-block" href="<?= base_url('index.php/auth/login');?>">login</a> -->
				<a class="login-link" href="#">Lost your password?</a>
				<?php echo form_close(); ?>
			</div>
			
		</div>
	</div>
	
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
			<h4>Untuk Melihat Data Transaksi</h4>
				<h1>ID TRANSAKSI</h1>
			</div>
			<span>&nbsp</span>
			<span>&nbsp</span>
			<div class="login-form">
				<?php echo form_open('auth/loginbyid'); ?>
				<div class="control-group">
				<?php echo form_input(array('type'=>"text", 'class'=>"login-field", 'placeholder'=>"id Transaksi", 'id'=>"loadid" ,'name'=>"loadid")); ?>
				<div class="login-field-icon fui-user" for="login-name"></div>
				</div>
				<?php echo form_submit(array('href'=>"index.phpauth/loginbyid", 'id' => 'submit', 'value' => 'Lihat','class'=>"btn btn-primary btn-large btn-block")); ?>
			</div>
			<!-- </form> -->
		</div>
	</div>
</html>
