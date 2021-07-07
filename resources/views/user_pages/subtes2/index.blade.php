@extends('master.app')

@section('judul','Subtes 2 - Tes IST')

@section('isi')
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-text mx-3">Tes IST 2021</div>
        </a>

        <hr class="sidebar-divider my-0">            
        <div class="sidebar-heading">Daftar Soal</div>
        
        <li class="nav-item">
            <a class="nav-link collapsed"><i class="fas fa-globe "></i>
                <span >Tes Pengetahuan Umum</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"><i class="fas fa-book text-white"></i>
                <span class="text-white">Tes Kesamaan Kata</span>
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
                    <h1 class="h3 mb-0 text-gray-800">Tes Kesamaan Kata</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-4">
                            @foreach ($tes_t2 as $item)
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Soal {{ $item->idsoal_t2 }} </h6>
                            </div>
                            <div class="card-body">                                 
                                <h5 id="ket">{{ $item->keterangan_t2 }}</h5>
                                <form method="post" action="{{route ('cekdata2')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->idsoal_t2 }}"> <br/> 
                                    <input type="hidden" id="save" value="{{ $item->idsoal_t2 }}">
                                    <input type="hidden" name="jwbSoal" value="{{ $item->t2_jawaban }}">
                                    <div class="kotak">
                                        
                                        
                                        <div class="opsi d-inline">
                                            <input id="r1" type="radio" name="r1" value="{{ $item->t2_opsia }}">
                                            <div class="lebar" for="r1"><h5 id="t1">{{ $item->t2_opsia }}</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r2" type="radio" name="r2" value="{{ $item->t2_opsib }}">
                                            <div class="lebar" for="r2"><h5 id="t2">{{ $item->t2_opsib }}</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r3" type="radio" name="r3" value="{{ $item->t2_opsic }}">
                                            <div class="lebar" for="r3"><h5 id="t3">{{ $item->t2_opsic }}</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r4" type="radio" name="r4" value="{{ $item->t2_opsid }}">
                                            <div class="lebar" for="r4"><h5 id="t4">{{ $item->t2_opsid }}</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r5" type="radio" name="r5" value="{{ $item->t2_opsie }}">
                                            <div class="lebar" for="r5"><h5 id="t5">{{ $item->t2_opsie }}</h5></div>
                                        </div><br>
                                        @if ($item->idsoal_t2 == $tes_t2->total())
                                            <input type="submit" class="btn btn-primary" value="kunci" id="kunci">
                                            <a href="{{ route('hint.subtes3') }}" class="btn btn-warning" id="kirim"> Kirim </a>
                                        @else
                                            <input type="submit" class="btn btn-primary" value="kunci" id="kunci">
                                        @endif
                                        <div class="mt-5">
                                            {{-- {{ $tes_t2->links () }}<br> --}}
                                            @if ($tes_t2->hasPages())
                                                <ul class="pagination" role="navigation">
                                                    {{-- Previous Page Link --}}
                                                    @if ($tes_t2->onFirstPage())
                                                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                                        </li>
                                                    @else
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $tes_t2->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                                        </li>
                                                    @endif
        
                                                    <?php
                                                        $start = $tes_t2->currentPage() - 1; // show 2 pagination links before current
                                                        $end = $tes_t2->currentPage() + 1; // show 2 pagination links after current
                                                        if($start < 1) {
                                                            $start = 1; // reset start to 1
                                                            $end += 1;
                                                        } 
                                                        if($end >= $tes_t2->lastPage() ) $end = $tes_t2->lastPage(); // reset end to last page
                                                    ?>
        
                                                    @if($start > 1)
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $tes_t2->url(1) }}">{{1}}</a>
                                                        </li>
                                                        @if($tes_t2->currentPage() >3)
                                                            {{-- "Three Dots" Separator --}}
                                                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                                        @endif
                                                    @endif
                                                        @for ($i = $start; $i <= $end; $i++)
                                                            <li class="page-item {{ ($tes_t2->currentPage() == $i) ? ' active' : '' }}">
                                                                <a class="page-link" href="{{ $tes_t2->url($i) }}">{{$i}}</a>
                                                            </li>
                                                        @endfor
                                                    @if($end < $tes_t2->lastPage())
                                                        @if($tes_t2->currentPage() + 2 != $tes_t2->lastPage())
                                                            {{-- "Three Dots" Separator --}}
                                                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                                        @endif
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $tes_t2->url($tes_t2->lastPage()) }}">{{$tes_t2->lastPage()}}</a>
                                                        </li>
                                                    @endif
        
                                                    {{-- Next Page Link --}}
                                                    @if ($tes_t2->hasMorePages())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $tes_t2->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
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
        if (sessionStorage.getItem("counter2")) {
            if (sessionStorage.getItem("counter2") == 0) {
                var value2 = 0;
                
            } else {
                var value2 = sessionStorage.getItem("counter2");
            }
        } else {
            var value2 = 420;
        }


        var counter2 = function () {
            if (value2 == 0) {
                sessionStorage.setItem("counter2", 0);
                value2 = 0;
                document.getElementById('menit').innerHTML = 0;
                document.getElementById('detik').innerHTML = 0;
                sessionStorage.removeItem('counter2');
                let links = "{{ route('hint.subtes3') }}";
                document.location.href=links;
            } else {
                var menit =Math.floor(value2/60);
                var detik =value2%60;
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
                value2 = parseInt(value2) - 1;
                sessionStorage.setItem("counter2", value2);
            }
            // document.getElementById('menit').innerHTML = menit;
            // document.getElementById('detik').innerHTML = detik;
        };

        var interval = setInterval(counter2, 1000);

    </script>
@endsection
