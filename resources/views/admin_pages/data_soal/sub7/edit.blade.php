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
                            <form action="{{route('update.sub7')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @php
                                    $opsi='for-subtes/image_tes/'.$item->mainSoal_t7;
                                    $soal='for-subtes/image_tes/'.$item->keterangan_t7;
                                @endphp
                                <input type="hidden" name="id" value="{{ $item->idsoal_t7 }}"> <br/>
                                <input type="hidden" name="opsiSoalSave" value="{{ $item->mainSoal_t7 }}"> <br/>
                                <input type="hidden" name="soalSave" value="{{ $item->keterangan_t7 }}"> <br/>
                                <div class="form-group">
                                    <label for="opsi">Pilihan Opsi</label>
                                    <input id="opsi" class="form-control" type="text" name="opsi" value="{{$item->mainSoal_t7}}" readonly>
                                </div>

                                <div class="form-group">
                                    <img src="{{ asset($opsi) }}" alt="{{ asset($opsi) }}" sizes="">
                                </div>

                                <div class="form-group">
                                    <label for="soal">Soal</label>
                                    <input id="soal" class="form-control" type="text" name="soal" value="{{$item->keterangan_t7}}" readonly>
                                </div>

                                <div class="form-group">
                                    <img src="{{ asset($soal) }}" alt="{{ asset($soal) }}" sizes="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="t6_jawaban">Jawaban Soal</label>
                                    <input id="t6_jawaban" class="form-control" type="text" name="lihatjwb" value="{{$item->t7_jawaban}}" readonly>
                                </div>

                                <hr>
                                <div class="form-group">
                                    <label for="updateOpsi">Pilihan Opsi <span class="font-italic">( abaikan jika menggunakan opsi diatas )</span></label>
                                    <input id="updateOpsi" class="form-control" type="file" name="updateOpsi">
                                    @if (session('file'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Ukuran File</strong> Terlalu Besar
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @elseif (session('file3'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Format Extension File</strong> Tidak Sesuai
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="updateSoal">Soal <span class="font-italic">( abaikan jika menggunakan opsi diatas )</span></label>
                                    <input id="updateSoal" class="form-control" type="file" name="updateSoal">
                                    @if (session('file2'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Ukuran File</strong> Terlalu Besar
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @elseif (session('file4'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Format Extension File</strong> Tidak Sesuai
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="t6_jawaban">Jawaban Soal</label>
                                    <input id="t6_jawaban" class="form-control" type="text" name="jwb" required>
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






