@extends('admin_pages.master-admin.app')

@section('judul','Data Soal - Halaman Admin')

@section('isi')
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
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
        <a class="nav-link collapsed" href="{{route('data.soal')}}"><i class="fas fa-book text-white"></i>
            <span class="text-white">Data Soal</span>
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
                            <h4>Tambah Soal Untuk Subtes 9</h4>
                            <form action="{{route('tambah.hafsub9')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="kata_kunci">Kata Kunci</label>
                                    <input id="kata_kunci" class="form-control" type="text" name="kata_kunci" >
                                </div>

                                <div class="form-group">
                                    <label for="sub1">Sub Kata 1</label>
                                    <input id="sub1" class="form-control" type="text" name="sub1" >
                                </div>

                                <div class="form-group">
                                    <label for="sub2">Sub Kata 2</label>
                                    <input id="sub2" class="form-control" type="text" name="sub2" >
                                </div>

                                <div class="form-group">
                                    <label for="sub3">Sub Kata 3</label>
                                    <input id="sub3" class="form-control" type="text" name="sub3" >
                                </div>

                                <div class="form-group">
                                    <label for="sub4">Sub Kata 4</label>
                                    <input id="sub4" class="form-control" type="text" name="sub4" >
                                </div>

                                <div class="form-group">
                                    <label for="sub5">Sub Kata 5</label>
                                    <input id="sub5" class="form-control" type="text" name="sub5" >
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Tambah Hafalan" class="btn btn-primary">
                                </div>
                            </form>
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






