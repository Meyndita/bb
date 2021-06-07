<div class="container">
    <div class="col-md-5 mx-auto mt-3">
    <div class="card card-user">
      <div class="card-header">
                <!-- Nested Row within Card Body -->
                <!-- <div class="row"> -->
                <div class="col-lg-12">
                        <div class="p-3">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Biodata CV</h1>
                            </div>

                            <form action="" method="POST">
                            <?=form_open('Admin/CV')?>
                                <div class="form-group row">
                                    <div class="col-sm-9 mb-5 mb-sm-0">
                                        <div class="name"> Nama CV </div>
                                            <input type="text" class="form-control" id="nik" name="nik"
                                            value="<?=$get->nama?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-8 mb-5 mb-sm-0">
                                    <div class="name"> Email </div>
                                    <input type="email" class="form-control" id="email" name="email"
                                    value="<?=$get->email?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-6 mb-5 mb-sm-0">
                                    <div class="name"> No. Telepon </div>
                                    <input type="text" class="form-control" id="telepon" name="telepon"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-12 mb-5 mb-sm-0">
                                    <div class="name"> Alamat Lengkap </div>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-5 mb-3 mb-sm-0">
                                    <div class="name"> Kota </div>
                                    <input type="text" class="form-control" id="kota" name="kota"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <div class="name"> Deskripsi </div>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                        placeholder="">
                                    </div>
                                </div>
                            
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