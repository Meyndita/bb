<div class="container-fluid">
    <br>

                    <!-- Page Heading -->
                     <h1 class="h3 mb-2 text-gray-800">Data User</h1>
                     <br>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Superadmin</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Username</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach ($hasilSuperadmin as $key) { ?>
                                        <tr>      
                                            <td class="text-center"><a type="button" data-toggle="modal" data-target="#detail<?=$key['username']?>"><?=$key['username']?></a></td>
                                            <td class="text-center"><a type="button" data-toggle="modal" data-target="#detail<?=$key['username']?>"><?=$key['nama_lengkap']?></a></td>
                                            <td class="text-center"><a type="button" data-toggle="modal" data-target="#detail<?=$key['username']?>"><?=$key['email']?></a></td>
                                            <td class="text center">
                                            <a href="<?=base_url()?>Superadmin/deleteUser/<?=$key['username']?>" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                            </a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Username</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach ($hasilAdmin as $key) { ?>
                                        <tr>      
                                            <td class="text-center"><a type="button" data-toggle="modal" data-target="#detail<?=$key['username']?>"><?=$key['username']?></a></td>
                                            <td class="text-center"><a type="button" data-toggle="modal" data-target="#detail<?=$key['username']?>"><?=$key['nama_lengkap']?></a></td>
                                            <td class="text-center"><a type="button" data-toggle="modal" data-target="#detail<?=$key['username']?>"><?=$key['email']?></a></td>
                                            <td class="text center">
                                            <a href="<?=base_url()?>Admin/deleteUser/<?=$key['username']?>" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                            </a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengasuh</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Username</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach ($hasilAdmin as $key) { ?>
                                        <tr>      
                                            <td class="text-center"><a type="button" data-toggle="modal" data-target="#detail<?=$key['username']?>"><?=$key['username']?></a></td>
                                            <td class="text-center"><a type="button" data-toggle="modal" data-target="#detail<?=$key['username']?>"><?=$key['nama_lengkap']?></a></td>
                                            <td class="text-center"><a type="button" data-toggle="modal" data-target="#detail<?=$key['username']?>"><?=$key['email']?></a></td>
                                            <td class="text center">
                                            <a href="<?=base_url()?>Pengasuh/deleteUser/<?=$key['username']?>" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                            </a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>