@extends('master.app')

@section('judul','Subtes 1 - Tes IST')

@section('isi')
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
            @include('master.nav');
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
                                    <input type="hidden" id="save" value="{{ $item->idsoal_t1 }}">
                                    <input type="hidden" name="jwbSoal" value="{{ $item->t1_jawaban }}">
                                    <div class="kotak">
                                        
                                        <div class="opsi d-inline">
                                            <input id="r1" type="radio" name="r1" value="{{ $item->t1_opsia }}">
                                            <div class="lebar" for="r1"><h5 id="t1">{{ $item->t1_opsia }}</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r2" type="radio" name="r2" value="{{ $item->t1_opsib }}">
                                            <div class="lebar" for="r2"><h5 id="t2">{{ $item->t1_opsib }}</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r3" type="radio" name="r3" value="{{ $item->t1_opsic }}">
                                            <div class="lebar" for="r3"><h5 id="t3">{{ $item->t1_opsic }}</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r4" type="radio" name="r4" value="{{ $item->t1_opsid }}">
                                            <div class="lebar" for="r4"><h5 id="t4">{{ $item->t1_opsid }}</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r5" type="radio" name="r5" value="{{ $item->t1_opsie }}">
                                            <div class="lebar" for="r5"><h5 id="t5">{{ $item->t1_opsie }}</h5></div>
                                        </div><br>
                                        @if ($item->idsoal_t1 == $tes_t1->total())
                                            <input type="submit" class="btn btn-primary" value="kunci" id="kunci">
                                            <a href="{{ route('hint.subtes2') }}" class="btn btn-warning" id="kirim"> Kirim </a>
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


@endsection
@section('timer')
    <script type="text/javascript">
        if (sessionStorage.getItem("counter")) {
            if (sessionStorage.getItem("counter") == 0) {
                var value = 0;
                
            } else {
                var value = sessionStorage.getItem("counter");
            }
        } else {
            var value = 360;
        }


        var counter = function () {
            if (value == 0) {
                sessionStorage.setItem("counter", 0);
                value = 0;
                document.getElementById('menit').innerHTML = 0;
                document.getElementById('detik').innerHTML = 0;
                sessionStorage.removeItem('counter');
                let links = "{{ route('hint.subtes2') }}";
                document.location.href=links;
            } else {
                var menit =Math.floor(value/60);
                var detik =value%60;
                if (menit>=0) {
                    document.getElementById('menit').innerHTML = menit;
                }
                if (detik >=0) {
                    document.getElementById('detik').innerHTML = detik;
                }
                if (detik==0) {
                    document.getElementById('menit').innerHTML = menit;
                }
                if (menit<=0) {
                    document.getElementById('menit').innerHTML = menit;
                }
                value = parseInt(value) - 1;
                sessionStorage.setItem("counter", value);
            }
            // document.getElementById('menit').innerHTML = menit;
            // document.getElementById('detik').innerHTML = detik;
        };

        var interval = setInterval(counter, 1000);

    </script>
@endsection