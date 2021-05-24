<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    
                    <h1 class="h3 mb-2 text-gray-800">Detail CV</h1>
                        
                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                
                    <!-- Content Row -->
                    <div class="row">

                    <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CV Sitiari</h6>
                                </div>
                                <div class="card-body">
                                    <h6 class="title"><?=$detail->deskripsi?></h6>
                                </div>
                            </div> -->

                        </div>
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data CV</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr class="text-center">
                                            <th>Nama CV</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kota</th>
                                            <th>Visi</th>
                                            <th>Misi</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach ($detail as $key) { ?>
                                    <tr>
                                        <td class="text-center"><?=$key['nama']?></td>
                                        <td class="text-center"><?=$key['alamat']?></td>
                                        <td class="text-center"><?=$key['telepon']?></td>
                                        <td class="text-center"><?=$key['kelurahan']?></td>
                                        <td class="text-center"><?=$key['kecamatan']?></td>
                                        <td class="text-center"><?=$key['kota']?></td>
                                        <td class="text-center"><?=$key['visi']?></td>
                                        <td class="text-center"><?=$key['misi']?></td>
                                        <td class="text-center"><?=$key['deskripsi']?></td>
                                        <!-- <td class="text-center"> -->
                                        <!-- <a href="<?=base_url()?>Admin/editPelanggan/<?=$key['id']?>" class="btn btn-success btn-circle btn-sm">
                                        <i class="fa fa-edit"></i>
                                        </a> -->
                                        <!-- <a href="<?=base_url()?>Owner/DetailCV/<?=$key['id']?>" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i> 
                                        </a> -->
                                        <!-- <a href="<?=base_url()?>Admin/deletePelanggan/<?=$key['id']?>" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fa fa-trash"></i> 
                                        </a> -->
                                        <!-- </td> -->
                                    </tr>
                                    <?php ;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                
                        

                        <!-- Pending Requests Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>

</html>