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
        <a class="nav-link collapsed" href="{{route('ubah.password')}}"><i class="fas fa-exchange-alt text-white"></i>
            <span class="text-white">Ubah Password</span>
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
                                Ubah Password Admin Tes IST 2021
                            </h3>
                            <hr class="sidebar-divider d-none d-md-block">
                            <form action="{{route('ubahPassword')}}" method="post">
                                @csrf
                                @foreach ($data as $item)
                                <input type="hidden" name="id" value="{{$item->id_admin}}">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input id="nama" class="form-control" type="text" name="nama" value="{{$item->namaLengkapAdmin}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="text" name="email" value="{{$item->email_admin}}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="password2">Password Baru</label>
                                    <input id="password2" class="form-control" type="password" name="password2">
                                </div>

                                <div class="form-group">
                                    <label for="password3">Konfirmasi Password Baru</label>
                                    <input id="password3" class="form-control" type="password" name="password3">
                                    @if (session('passwordBeda'))
                                        <div class="form-group">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Konfirmasi Password Baru</strong> Tidak Sama
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    @endif 
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Update" >
                                </div>
                                @endforeach
                            
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






