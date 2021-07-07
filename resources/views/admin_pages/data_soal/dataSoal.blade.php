@extends('admin_pages.master-admin.app')

@section('judul','Data Soal - Halaman Admin')

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
                        <h4 class="text-bold text-dark text-center mt-3 mb-3">Berikut Daftar Subtes Pada Tes IST</h4>
                        <!-- Card Body -->
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Subtes</th>
                                        <th scope="col">Lihat Daftar Soal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Tes Pengetahuan Umum</td>
                                        <td><a class="btn btn-primary" href="{{route('sub1')}}">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Tes Kesamaan Kata</td>
                                        <td><a class="btn btn-primary" href="{{route('sub2')}}">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Tes Hubungan Kata</td>
                                        <td><a class="btn btn-primary" href="{{route('sub3')}}">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Tes Pengertian Kata</td>
                                        <td><a class="btn btn-primary" href="{{route('sub4')}}">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Tes Aritmatika</td>
                                        <td><a class="btn btn-primary" href="{{route('sub5')}}">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Tes Deret Angka</td>
                                        <td><a class="btn btn-primary" href="{{route('sub6')}}">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Tes Potongan Gambar</td>
                                        <td><a class="btn btn-primary" href="{{route('sub7')}}">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Tes Kemampuan Ruang</td>
                                        <td><a class="btn btn-primary" href="{{route('sub8')}}">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Tes Menghafal Cepat</td>
                                        <td><a class="btn btn-primary" href="{{route('sub9')}}">Lihat</a></td>
                                    </tr>
                                </tbody>
                            </table>
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
