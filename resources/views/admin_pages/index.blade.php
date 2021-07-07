@extends('admin_pages.master-admin.app')

@section('judul','Halaman Admin')

@section('isi')
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home.admin')}}">
        <div class="sidebar-brand-text mx-3">Tes IST 2021</div>
    </a>

    <hr class="sidebar-divider my-0">            
    <div class="sidebar-heading">Menu</div>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('data-peserta')}}"><i class="fas fa-users"></i>
            <span>Data Peserta</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('data.soal')}}"><i class="fas fa-book"></i>
            <span>Data Soal</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('ubah.password')}}"><i class="fas fa-exchange-alt"></i>
            <span>Ubah Password</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('tanggal.tes')}}"><i class="fas fa-calendar-check"></i>
            <span>Tanggal Tes</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('rekap')}}"><i class="fas fa-book-reader"></i>
            <span>Lihat Hasil Tes</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="modal" data-target="#logoutModal" href="#"><i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        @include('admin_pages.master-admin.navAdmin')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h3 class="m-0 font-weight-bold text-primary text-center">
                                Selamat Datang Admin di Halaman Admin Tes IST 2021
                            </h3>
                            <hr class="sidebar-divider d-none d-md-block">
                            <h5 class="m-0 font-weight-bold text-primary">Ketentuan Pada Halaman Admin Ini Adalah : </h5>
                            <ol type="1" class="m-0 font-weight-bold text-primary">
                                <li><h6 class="mt-3 m-0 font-weight-bold text-primary"> Admin dapat menghapus data peserta </h6></li>
                                <li><h6 class="mt-3 m-0 font-weight-bold text-primary"> Admin dapat mengedit data peserta (kecuali passwordnya) </h6></li>
                                <li><h6 class="mt-3 m-0 font-weight-bold text-primary"> Admin dapat menambahkan soal </h6></li>
                                <li><h6 class="mt-3 m-0 font-weight-bold text-primary"> Admin dapat mengedit soal </h6></li>
                                <li><h6 class="mt-3 m-0 font-weight-bold text-primary"> Admin dapat menghapus soal </h6></li>                                
                                <li><h6 class="mt-3 m-0 font-weight-bold text-primary"> Admin dapat melihat hasil rekap tes setiap peserta </h6></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <!-- Footer -->
    @include('master.footer')
    <!-- End of Footer -->
</div>
    
@endsection






