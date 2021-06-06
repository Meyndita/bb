<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link href="<?=base_url('assets/img/logo.ico')?>" rel="shortcut icon"/> -->
		
		<!-- <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>"/>
		<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>"/> -->
		
		<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>"/>
		<!-- <link rel="stylesheet" type="text/css" href="<?=base_url('assets/babycare/templatelogin/css/main.css')?>"> -->
		<title><?=$title= 'Register Pelanggan'?></title>
<title>Register</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/css/util.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/css/main.css')?>">
<!--===============================================================================================-->
</head>
	<body>
		<div id="preloder">
			<div class="loader"></div>
		</div>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Registrasi Pelanggan
				</span>
			</div>
            <form class="user" method="post" action="<?php echo base_url(); ?>auth/register/verify">

			<div class="login100-form validate-form"> 
				
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input type="text" name="username" class="form-control" id="exampleLastName" placeholder="Username" minlength="4" maxlength="16" value="<?php echo set_value('username'); ?>" required>
						<span class="focus-input100"></span>
						<?php echo form_error('username'); ?>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input type="password" name="password" class="form-control" id="exampleLastName" placeholder="Password" value="<?php echo set_value('password'); ?>" required>
						<span class="focus-input100"></span>
						<?php echo form_error('password'); ?>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Nama Lengkap is required">
						<span class="label-input100">Nama Lengkap</span>
						<input type="text" name="name" class="form-control" id="exampleLastName" placeholder="Nama Lengkap" value="<?php echo set_value('name'); ?>" required>
						<span class="focus-input100"></span>
						<?php echo form_error('name'); ?>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="No.HP is required">
						<span class="label-input100">Nomor Telepon</span>
						<input type="number" name="phone_number" class="form-control" id="exampleLastName" placeholder="No. Hp" minlength="9" maxlength="15" value="<?php echo set_value('phone_number'); ?>" required>
						<span class="focus-input100"></span>
						<?php echo form_error('phone_number'); ?>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
                        <input type="email" class="form-control form-control-user border-left-primary" id="email" name="email" placeholder="Masukkan Email"  minlength="10" value="<?= set_value('email');?>" required is_unique>
						<span class="focus-input100"></span>
						<?php echo form_error('email'); ?>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Alamat is required">
						<span class="label-input100">Alamat</span>
						<input type="text" name="address" class="form-control" id="exampleLastName" placeholder="Alamat" value="<?php echo set_value('address'); ?>" required>
						<span class="focus-input100"></span>
						<?php echo form_error('address'); ?>
					</div>
					<div class="row ml-5 mt-2">
						<div class="container-login100-form-btn ml-3">
                        <input type="submit" name="register" value="Register" class="login100-form-btn" />
						</div>
					</div>

				</div>
                </form>

			</div>
		</div>
	</div>
	

<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?=base_url('assets/templatelogin2/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/daterangepicker/moment.min.js')?>"></script>
<script src="<?=base_url('assets/templatelogin2/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/js/main.js')?>"></script>

<script src="<?=base_url('assets/templatelogin2/js/jquery-3.2.1.min.js')?>"></script>
	<script src="<?=base_url('assets/templatelogin2/js/main.js')?>"></script>
	
</body>
</html>
