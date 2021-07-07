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
                            @foreach ($data as $item)
                            <form action="{{route('update.sub3')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->idsoal_t3 }}"> <br/>
                                <div class="form-group">
                                    <label for="soal">Soal</label>
                                    <input id="soal" class="form-control" type="text" name="soal" value="{{$item->keterangan_t3}}">
                                </div>

                                <div class="form-group">
                                    <label for="opsia">Opsi A</label>
                                    <input id="opsia" class="form-control" type="text" name="opsia" value="{{$item->t3_opsia}}">
                                </div>

                                <div class="form-group">
                                    <label for="opsib">Opsi B</label>
                                    <input id="opsib" class="form-control" type="text" name="opsib" value="{{$item->t3_opsib}}">
                                </div>

                                <div class="form-group">
                                    <label for="opsic">Opsi C</label>
                                    <input id="opsic" class="form-control" type="text" name="opsic" value="{{$item->t3_opsic}}">
                                </div>

                                <div class="form-group">
                                    <label for="opsid">Opsi D</label>
                                    <input id="opsid" class="form-control" type="text" name="opsid" value="{{$item->t3_opsid}}">
                                </div>

                                <div class="form-group">
                                    <label for="opsie">Opsi E</label>
                                    <input id="opsie" class="form-control" type="text" name="opsie" value="{{$item->t3_opsie}}">
                                </div>

                                <div class="form-group">
                                    <label for="t3_jawaban">Jawaban Soal</label>
                                    <input id="t3_jawaban" class="form-control" type="text" name="jwb" value="{{$item->t3_jawaban}}">
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






