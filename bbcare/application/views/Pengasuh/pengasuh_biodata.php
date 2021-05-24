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
                                <h1 class="h4 text-gray-900 mb-4">Biodata Pengasuh</h1>
                            </div>

                            <form action="" method="POST">
                            <?=form_open('Pengasuh/addPengasuh')?>
                                <div class="form-group row">
                                    <div class="col-sm-7 mb-5 mb-sm-0">
                                        <div class="name"> NIK </div>
                                            <input type="text" class="form-control" id="nik" name="nik"
                                            value="<?=$get->nik?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-5 mb-sm-0">
                                    <div class="name"> Nama Lengkap </div>
                                        <input type="text" class="form-control" id="nama_pengasuh" name="nama_pengasuh"
                                        value="<?=$get->nama_pengasuh?>"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-5 mb-5 mb-sm-0">
                                    <div class="name"> Email </div>
                                    <input type="email" class="form-control" id="email" name="email"
                                    value="<?=$get->email?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-4 mb-5 mb-sm-0">
                                    <div class="name"> No. Telepon </div>
                                    <input type="text" class="form-control" id="telepon" name="telepon"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-5 mb-5 mb-sm-0">
                                    <div class="name"> Tanggal Lahir </div>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-5 mb-5 mb-sm-0">
                                    <div class="name"> Agama </div>
                                    <select name="subject">
                                            <option disabled="disabled" selected="selected">Agama</option>
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-10 mb-5 mb-sm-0">
                                    <div class="name"> Alamat Lengkap </div>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <div class="name"> Pendidikan Terakhir </div>
                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <div class="name"> Status </div>
                                    <input type="text" class="form-control" id="status" name="status"
                                        placeholder="">
                                    </div>
                                </div>
                                
                                <br>
                            
                                <div class="col-sm-4 mb-5 mb-sm-0">
                                    <button class="btn btn-primary btn-user btn-block" name="submit" type="submit">
                                        Submit
                                    </button>
                                </div>
                           
                            
                            <?=form_close();?>
                            </form>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div> -->

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