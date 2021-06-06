<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="<?=base_url('assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
    <div class="col-lg-7">
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Pengasuh</h1>
                            </div>

                            <?php echo form_open('Register/regis_pengasuh');?>
                            <form method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-5 mb-sm-0">
                                        <input type="text" class="form-control" id="nik" name="nik" minlength="16" maxlength="16" placeholder="NIK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-5 mb-sm-0">
                                        <input type="text" class="form-control" id="nama_pengasuh" name="nama_pengasuh" placeholder="Nama Lengkap"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-5 mb-5 mb-sm-0">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email">
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <label>Foto</label>
                                    <input type="hidden" name="foto" value="">
                                    <input type="file" name="foto">
                                </div> -->
                                
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password1" placeholder="Password">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-5 mb-sm-0">
                                    <button class="btn btn-primary btn-user btn-block" type="submit">
                                        Register Account
                                    </button>
                                </div>
                                
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                           
                            </form>
                            <?= form_close(); ?>

                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?=base_url('Register/login')?>">Already have an account? Login!</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/js/sb-admin-2.min.js')?>"></script>

</body>

</html>