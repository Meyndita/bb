<div class="container-fluid">
<br>

                    <!-- Page Heading -->
                     <h1 class="h3 mb-2 text-gray-800">Daftar CV</h1>
                     <br>

                     <div class="col-lg-12 col-6 text-right">
                     <a href="<?=base_url('Owner/addCV')?>" class="btn btn-info">
                        <span class="icon text-white-50"></span>
                        <span class="text">Daftar CV Baru</span>
                        </a>
                    </div>
                    <br>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data CV</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Nama CV</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $i = 1;
                                        foreach ($data as $key) { ?>
                                    <tr>
                                        <td class="text-center"><?=$i?></td>
                                        <td class="text-center"><?=$key['nama']?></td>
                                        <td class="text-center"><?=$key['alamat']?></td>
                                        <td class="text-center">
                                        <!-- <a href="<?=base_url()?>Admin/editPelanggan/<?=$key['id']?>" class="btn btn-success btn-circle btn-sm">
                                        <i class="fa fa-edit"></i>
                                        </a> -->
                                        <a href="<?=base_url()?>Owner/DetailCV/<?=$key['id']?>" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i> 
                                        </a>
                                        <!-- <a href="<?=base_url()?>Admin/deletePelanggan/<?=$key['id']?>" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fa fa-trash"></i> 
                                        </a> -->
                                        </td>
                                    </tr>
                                    <?php $i++;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>