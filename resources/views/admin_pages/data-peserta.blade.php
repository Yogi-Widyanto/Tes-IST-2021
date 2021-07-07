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
                        <h4 class="text-bold text-dark text-center mt-3 mb-3">Berikut Daftar Peserta Tes IST</h4>
                        <!-- Card Body -->
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status Tes</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataPeserta as $item)
                                    <tr>
                                        <th scope="row">{{$item->id_user}}</th>
                                        <td>{{$item->nama_lengkap}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->keteranganTes}}</td>
                                        <td><a class="btn btn-primary" href="/admin/data-peserta/edit/{{$item->id_user}}">Edit</a></td>
                                        <td><a class="btn btn-danger" href="/admin/data-peserta/hapus/{{$item->id_user}}">Hapus</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-5">
                                {{-- {{ $dataPeserta->links () }}<br> --}}
                                @if ($dataPeserta->hasPages())
                                    <ul class="pagination" role="navigation">
                                        {{-- Previous Page Link --}}
                                        @if ($dataPeserta->onFirstPage())
                                            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                                <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $dataPeserta->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                            </li>
                                        @endif

                                        <?php
                                            $start = $dataPeserta->currentPage() - 1; // show 2 pagination links before current
                                            $end = $dataPeserta->currentPage() + 1; // show 2 pagination links after current
                                            if($start < 1) {
                                                $start = 1; // reset start to 1
                                                $end += 1;
                                            } 
                                            if($end >= $dataPeserta->lastPage() ) $end = $dataPeserta->lastPage(); // reset end to last page
                                        ?>

                                        @if($start > 1)
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $dataPeserta->url(1) }}">{{1}}</a>
                                            </li>
                                            @if($dataPeserta->currentPage() >3)
                                                {{-- "Three Dots" Separator --}}
                                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                            @endif
                                        @endif
                                            @for ($i = $start; $i <= $end; $i++)
                                                <li class="page-item {{ ($dataPeserta->currentPage() == $i) ? ' active' : '' }}">
                                                    <a class="page-link" href="{{ $dataPeserta->url($i) }}">{{$i}}</a>
                                                </li>
                                            @endfor
                                        @if($end < $dataPeserta->lastPage())
                                            @if($dataPeserta->currentPage() + 2 != $dataPeserta->lastPage())
                                                {{-- "Three Dots" Separator --}}
                                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                            @endif
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $dataPeserta->url($dataPeserta->lastPage()) }}">{{$dataPeserta->lastPage()}}</a>
                                            </li>
                                        @endif

                                        {{-- Next Page Link --}}
                                        @if ($dataPeserta->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $dataPeserta->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                                <span class="page-link" aria-hidden="true">&rsaquo;</span>
                                            </li>
                                        @endif
                                    </ul>
                                @endif

                            </div>
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






