    <div class="container">
    <div class="col-md-5 mx-auto mt-3">
    <div class="card card-user">
      <div class="card-header">
                <!-- Nested Row within Card Body -->
                <!-- <div class="row"> -->
                <div class="col-lg-12">
                        <div class="p-3">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Biodata Pengasuh</h1>
                            </div>

                            <form action="" method="POST">
                            <?=form_open('Pengasuh/editPengasuh')?>
                                <div class="form-group row">
                                    <div class="col-sm-9 mb-5 mb-sm-0">
                                        <div class="name"> NIK </div>
                                            <input type="text" class="form-control" id="nik" name="nik"
                                            value="<?=$get->nik?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 mb-5 mb-sm-0">
                                    <div class="name"> Nama Lengkap </div>
                                        <input type="text" class="form-control" id="nama_pengasuh" name="nama_pengasuh"
                                        value="<?=$get->nama_pengasuh?>"> 
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
                                <div class="col-sm-5 mb-5 mb-sm-0">
                                    <div class="name"> Tanggal Lahir </div>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-5 mb-5 mb-sm-0">
                                    <div class="name"> Kategori </div>
                                    <select name="kategori">
                                            <option disabled="disabled" selected="selected">Kategori</option>
                                            <option>Baby Sitter 1</option>
                                            <option>Baby Sitter 2</option>
                                            <option>Baby Sitter 3</option>
                                            <option>Baby Sitter 4</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-5 mb-5 mb-sm-0">
                                    <div class="name"> Agama </div>
                                    <select name="agama">
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
                                <div class="col-sm-12 mb-5 mb-sm-0">
                                    <div class="name"> Alamat Lengkap </div>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="name"> Pendidikan Terakhir </div>
                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-5 mb-3 mb-sm-0">
                                    <div class="name"> Status </div>
                                    <input type="text" class="form-control" id="status" name="status"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="mt-1">
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