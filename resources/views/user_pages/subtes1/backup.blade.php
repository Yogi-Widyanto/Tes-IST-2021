<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Subtes 1 - Tes IST</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0bfd8d6dbd.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset ('for-subtes/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3">Tes IST 2021</div>
            </a>

            <hr class="sidebar-divider my-0">            
            <div class="sidebar-heading">Daftar Soal</div>
            
            <li class="nav-item">
                <a class="nav-link collapsed"><i class="fas fa-globe text-white"></i>
                    <span class="text-white">Tes Pengetahuan Umum</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"><i class="fas fa-book"></i>
                    <span>Tes Kesamaan Kata</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"><i class="fas fa-handshake"></i>
                    <span>Tes Hubungan Kata</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"><i class="fas fa-book-open"></i>
                    <span>Tes Pengertian Kata</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"><i class="fas fa-square-root-alt"></i>
                    <span>Tes Aritmatika</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"><i class="fas fa-sort-numeric-up"></i>
                    <span>Tes Deret Angka</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"><i class="fas fa-shapes"></i>
                    <span>Tes Potongan Gambar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"><i class="fas fa-cubes"></i>
                    <span>Tes Kemampuan Ruang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed"><i class="fas fa-memory"></i>
                    <span >Tes Menghafal Cepat</span>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> <i class="fa fa-bars"></i>
                    </button>                    
                    
                    <!-- berisi data nama yang login -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small text-capitalize">user</span>
                                <img class="img-profile rounded-circle" src="{{ asset('for-subtes/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i
                                        class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tes Pengetahuan Umum</h1>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                @foreach ($tes_t1 as $item)
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Soal {{ $item->idsoal_t1 }} </h6>
                                </div>
                                <div class="card-body">                                 
                                    <h5 id="ket">{{ $item->keterangan_t1 }}</h5>
                                    <form method="post" action="{{route ('cekdata')}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->idsoal_t1 }}"> <br/> 
                                        <div class="kotak">
                                            <h4>{{ $item->soalt1 }}</h4>
                                            <div class="form-group d-inline">
                                                <input id="r1" type="radio" name="r1" value="{{ $item->t1_opsia }}">
                                                <label id="t1" for="r1">{{ $item->t1_opsia }}</label>
                                            </div><br>
                                            <div class="form-group d-inline">
                                                <input id="r2" type="radio" name="r2" value="{{ $item->t1_opsib }}">
                                                <label id="t2" for="r2">{{ $item->t1_opsib }}</label>
                                            </div><br>
                                            <div class="form-group d-inline">
                                                <input id="r3" type="radio" name="r3" value="{{ $item->t1_opsic }}">
                                                <label id="t3" for="r3">{{ $item->t1_opsic }}</label>
                                            </div><br>
                                            <div class="form-group d-inline">
                                                <input id="r4" type="radio" name="r4" value="{{ $item->t1_opsid }}">
                                                <label id="t4" for="r4">{{ $item->t1_opsid }}</label>
                                            </div><br>
                                            <div class="form-group d-inline">
                                                <input id="r5" type="radio" name="r5" value="{{ $item->t1_opsie }}">
                                                <label id="t5" for="r5">{{ $item->t1_opsie }}</label>
                                            </div><br>
                                            @if ($item->idsoal_t1 == $tes_t1->total())
                                                <input type="submit" class="btn btn-primary" value="kunci" id="kunci">
                                                <a href="{{ route('next.subtes2') }}" class="btn btn-warning" id="kirim"> Kirim </a>
                                            @else
                                                <input type="submit" class="btn btn-primary" value="kunci" id="kunci">
                                            @endif
                                            <div class="mt-5">
                                                {{-- {{ $tes_t1->links () }}<br> --}}
                                                @if ($tes_t1->hasPages())
                                                    <ul class="pagination" role="navigation">
                                                        {{-- Previous Page Link --}}
                                                        @if ($tes_t1->onFirstPage())
                                                            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                                                <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                                            </li>
                                                        @else
                                                            <li class="page-item">
                                                                <a class="page-link" href="{{ $tes_t1->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                                            </li>
                                                        @endif
            
                                                        <?php
                                                            $start = $tes_t1->currentPage() - 1; // show 2 pagination links before current
                                                            $end = $tes_t1->currentPage() + 1; // show 2 pagination links after current
                                                            if($start < 1) {
                                                                $start = 1; // reset start to 1
                                                                $end += 1;
                                                            } 
                                                            if($end >= $tes_t1->lastPage() ) $end = $tes_t1->lastPage(); // reset end to last page
                                                        ?>
            
                                                        @if($start > 1)
                                                            <li class="page-item">
                                                                <a class="page-link" href="{{ $tes_t1->url(1) }}">{{1}}</a>
                                                            </li>
                                                            @if($tes_t1->currentPage() >3)
                                                                {{-- "Three Dots" Separator --}}
                                                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                                            @endif
                                                        @endif
                                                            @for ($i = $start; $i <= $end; $i++)
                                                                <li class="page-item {{ ($tes_t1->currentPage() == $i) ? ' active' : '' }}">
                                                                    <a class="page-link" href="{{ $tes_t1->url($i) }}">{{$i}}</a>
                                                                </li>
                                                            @endfor
                                                        @if($end < $tes_t1->lastPage())
                                                            @if($tes_t1->currentPage() + 2 != $tes_t1->lastPage())
                                                                {{-- "Three Dots" Separator --}}
                                                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                                            @endif
                                                            <li class="page-item">
                                                                <a class="page-link" href="{{ $tes_t1->url($tes_t1->lastPage()) }}">{{$tes_t1->lastPage()}}</a>
                                                            </li>
                                                        @endif
            
                                                        {{-- Next Page Link --}}
                                                        @if ($tes_t1->hasMorePages())
                                                            <li class="page-item">
                                                                <a class="page-link" href="{{ $tes_t1->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
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
                                    </form>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            @include('master.footer');
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    
    </a>
    
    <script src="{{ asset ('for-subtes/js/jqueryopsi.js') }}"></script>
    <!-- Logout Modal-->
    @include('master.modalLogout')
    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    
</body>

</html>