<div class="container-fluid">
<br>

                    <!-- Page Heading -->
                     <h1 class="h3 mb-2 text-gray-800">Daftar Pengasuh</h1>
                     <br>

                     <!-- <div class="col-lg-12 col-6 text-right">
                     <a href="<?=base_url('Owner/addCV')?>" class="btn btn-info">
                        <span class="icon text-white-50"></span>
                        <span class="text">Daftar CV Baru</span>
                        </a>
                    </div> -->
                    <br>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengasuh</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <!-- <th>ID</th> -->
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    // if( !empty($results) ) {
                                        // foreach($results as $row) {
                                        //     echo '<tr>';
                                        //     echo '<td>'.$row->bcode.'</td>';
                                        //     echo '<td>'.$row->bname.'</td>';
                                        //     echo '<td>'.$row->btel.'</td>';
                                        //     echo '<td>'.$row->badd.'</td>';
                                        //     echo '</tr>';
                                        // }
                                    
                                        // $i = 1;
                                        foreach ($data as $key) { ?>
                                    <tr>
                                        <!-- <td class="text-center"><?=$i?></td> -->
                                        <td class="text-center"><?=$key['nama_pengasuh']?></td>
                                        <td class="text-center"><?=$key['email']?></td>
                                        <td class="text-center">
                                        <a href="<?=base_url()?>Pengasuh/editPengasuh/<?=$key['id']?>" class="btn btn-info">
                                        <i class="fa fa-edit"> Lengkapi Biodata </i>
                                        </a>
                                        <!-- <a href="<?=base_url()?>Admin/detailPelanggan/<?=$key['id']?>" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i> 
                                        </a> -->
                                        <!-- <a href="<?=base_url()?>Admin/deletePelanggan/<?=$key['id']?>" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fa fa-trash"></i> 
                                        </a> -->
                                        </td>
                                    </tr>
                                    
                                    <?php ;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>