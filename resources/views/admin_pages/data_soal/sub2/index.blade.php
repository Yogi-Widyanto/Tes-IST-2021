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
                    <a class="badge badge-success mb-3" href="{{route('viewTambah.sub2')}}">Insert Soal</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-dark">
                            <h4>Subtes 2 ( Tes Kesamaan Kata )</h4>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Soal Subtes 2</th>
                                        <th scope="col">Opsi A</th>
                                        <th scope="col">Opsi B</th>
                                        <th scope="col">Opsi C</th>
                                        <th scope="col">Opsi D</th>
                                        <th scope="col">Opsi E</th>
                                        <th scope="col">Jawaban Soal</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sub2 as $item)
                                    <tr>
                                        <th scope="row">{{$item->idsoal_t2}}</th>
                                        <td>{{$item->keterangan_t2}}</td>
                                        <td>{{$item->t2_opsia}}</td>
                                        <td>{{$item->t2_opsib}}</td>
                                        <td>{{$item->t2_opsic}}</td>
                                        <td>{{$item->t2_opsid}}</td>
                                        <td>{{$item->t2_opsie}}</td>
                                        <td>{{$item->t2_jawaban}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="/admin/data-soal/subtes2/edit/{{$item->idsoal_t2}}">Edit</a>
                                            <a class="btn btn-danger" href="/admin/data-soal/subtes2/hapus/{{$item->idsoal_t2}}">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-5">
                                {{-- {{ $sub2->links () }}<br> --}}
                                @if ($sub2->hasPages())
                                    <ul class="pagination" role="navigation">
                                        {{-- Previous Page Link --}}
                                        @if ($sub2->onFirstPage())
                                            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                                <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $sub2->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                            </li>
                                        @endif

                                        <?php
                                            $start = $sub2->currentPage() - 1; // show 2 pagination links before current
                                            $end = $sub2->currentPage() + 1; // show 2 pagination links after current
                                            if($start < 1) {
                                                $start = 1; // reset start to 1
                                                $end += 1;
                                            } 
                                            if($end >= $sub2->lastPage() ) $end = $sub2->lastPage(); // reset end to last page
                                        ?>

                                        @if($start > 1)
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $sub2->url(1) }}">{{1}}</a>
                                            </li>
                                            @if($sub2->currentPage() >3)
                                                {{-- "Three Dots" Separator --}}
                                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                            @endif
                                        @endif
                                            @for ($i = $start; $i <= $end; $i++)
                                                <li class="page-item {{ ($sub2->currentPage() == $i) ? ' active' : '' }}">
                                                    <a class="page-link" href="{{ $sub2->url($i) }}">{{$i}}</a>
                                                </li>
                                            @endfor
                                        @if($end < $sub2->lastPage())
                                            @if($sub2->currentPage() + 2 != $sub2->lastPage())
                                                {{-- "Three Dots" Separator --}}
                                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                            @endif
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $sub2->url($sub2->lastPage()) }}">{{$sub2->lastPage()}}</a>
                                            </li>
                                        @endif

                                        {{-- Next Page Link --}}
                                        @if ($sub2->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $sub2->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
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






