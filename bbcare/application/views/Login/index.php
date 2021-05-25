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
		<title><?=$title?></title>
<title>Login</title>
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

		<!-- Main section start -->
		<!-- <div class="main-site-warp">
			<div class="site-menu-warp">
				<div class="close-menu">x</div> -->
				<!-- Main menu -->
				<!-- <ul class="site-menu">
					<li><a href="<?=base_url('Welcome')?>">Home</a></li>
					<li><a href="<?=base_url('Welcome/check')?>">Check your Shoes!</a></li>
					<li><a href="<?=base_url('Welcome/about')?>">About</a></li>
					<li><a href="<?=base_url('Login')?>">Login</a></li>
				</ul>
			</div>
			<header class="header-section">
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<div class="header-social">
					<a href=""><i class="fa fa-pinterest"></i></a>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-dribbble"></i></a>
					<a href=""><i class="fa fa-behance"></i></a>
				</div>
			</header> -->

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Login
				</span>
			</div>
			<?php echo form_open('Login/process');?>
			<div class="login100-form validate-form"> 
				
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukkan username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukkan password">
						<span class="focus-input100"></span>
					</div>
				
					<a href=<?=base_url('Login/register')?> class="txt1">
						Belum punya akun? Daftar Sekarang!
					</a>


					<!-- <div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div> -->
					<br>
					<div class="row ml-3 mt-2">
						<div class="container-login100-form-btn ml-3">
							<button class="login100-form-btn" type="submit">
								Login
							</button>
							<!-- <br>
							<br>
							<button class="login100-form-btn" type="submit" href=<?=base_url('Login/register')?> >
								Register
							</button> -->
						</div>
					</div>
					<!-- <div class="col md-8 mt-2">
						<div class="container-login100-form-btn ml-3">
							<button class="login100-form-btn" type="submit">
								Register
							</button>
						</div>
					</div> -->

				</div>
				<?= form_close(); ?>
			</div>
                    <!-- <a style="margin-left:650px;" href="<?php echo site_url() ?>Login/reg">Register Instansi &nbsp;&nbsp;</a>
					<a style="margin-left:650px;" href="<?php echo site_url() ?>Login/reg_pengasuh">Register Pengasuh &nbsp;&nbsp;</a> -->
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
