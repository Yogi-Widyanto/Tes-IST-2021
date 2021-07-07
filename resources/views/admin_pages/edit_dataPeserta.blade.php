@extends('admin_pages.master-admin.app')

@section('judul','Data Peserta - Halaman Admin')

@section('isi')
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a href="{{route('home.admin')}}" class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Tes IST 2021</div>
    </a>

    <hr class="sidebar-divider my-0">            
    <div class="sidebar-heading">Menu</div>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('data-peserta')}}"><i class="fas fa-users text-white"></i>
            <span class="text-white">Data Peserta</span>
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
                            @foreach ($data as $item)
                            <form action="{{ route('editData.peserta') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id_user }}"> <br/>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input id="nama_lengkap" class="form-control" type="text" name="nama_lengkap" value="{{$item->nama_lengkap}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email" value="{{$item->email}}">
                                </div>

                                <div class="form-group">
                                    <label for="ket">Keterangan Tes</label>
                                    <select id="ket" class="form-control" name="ket">
                                        <option>Belum Selesai</option>
                                        <option>Selesai</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                            @endforeach
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






