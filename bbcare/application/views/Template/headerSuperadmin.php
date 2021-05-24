<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="<?=base_url('assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>
<title> Dashboard Superadmin | Baby Care </title>

<body">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3"> Superadmin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('Superadmin/index')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Superadmin/user')?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Daftar User</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Superadmin/pengasuh')?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengasuh</span></a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Superadmin/sewa')?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Persewaan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?=base_url(' ')?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

</body>
</html>