@extends('master.app')

@section('judul','Subtes 7 - Tes IST')

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
            <a class="nav-link collapsed"><i class="fas fa-book "></i>
                <span >Tes Kesamaan Kata</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"><i class="fas fa-handshake "></i>
                <span >Tes Hubungan Kata</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"><i class="fas fa-book-open "></i>
                <span >Tes Pengertian Kata</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"><i class="fas fa-square-root-alt "></i>
                <span >Tes Aritmatika</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"><i class="fas fa-sort-numeric-up "></i>
                <span >Tes Deret Angka</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"><i class="fas fa-shapes text-white"></i>
                <span class="text-white">Tes Potongan Gambar</span>
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
                    <h1 class="h3 mb-0 text-gray-800">Tes Potongan Gambar</h1>
                </div>
                <div class="row">
                    @foreach ($tes_t7 as $item)
                    <div class="col">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Jawaban Opsi Gambar </h6>
                            </div>
                            @php
                                $linkMain='for-subtes/image_tes/'.$item->mainSoal_t7;
                                $linkSoal='for-subtes/image_tes/'.$item->keterangan_t7;
                            @endphp
                            <div class="card-body">
                                <img  class="ukuran-gambar" src=" {{asset($linkMain)}} " alt="{{asset($linkMain)}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Soal {{ $item->idsoal_t7 }} </h6>
                            </div>
                            <div class="card-body">                                 
                                <img src="{{asset($linkSoal)}}" alt="{{asset($linkSoal)}}">
                                <form method="post" action="{{route ('cekdata7')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->idsoal_t7 }}"> <br/> 
                                    <input type="hidden" id="save" value="{{ $item->idsoal_t7 }}">
                                    <input type="hidden" name="jwbSoal" value="{{ $item->t7_jawaban }}">
                                    <div class="kotak">
                                        <div class="opsi d-inline">
                                            <input id="r1" type="radio" name="r1" value="a">
                                            <div class="lebar" for="r1"><h5 id="t1">a</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r2" type="radio" name="r2" value="b">
                                            <div class="lebar" for="r2"><h5 id="t2">b</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r3" type="radio" name="r3" value="c">
                                            <div class="lebar" for="r3"><h5 id="t3">c</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r4" type="radio" name="r4" value="d">
                                            <div class="lebar" for="r4"><h5 id="t4">d</h5></div>
                                        </div><br>
                                        <div class="opsi d-inline">
                                            <input id="r5" type="radio" name="r5" value="e">
                                            <div class="lebar" for="r5"><h5 id="t5">e</h5></div>
                                        </div><br>
                                        @if ($item->idsoal_t7 == $tes_t7->total())
                                            <input type="submit" class="btn btn-primary" value="kunci" id="kunci">
                                            <a href="{{ route('hint.subtes8') }}" class="btn btn-warning" id="kirim"> Kirim </a>
                                        @else
                                            <input type="submit" class="btn btn-primary" value="kunci" id="kunci">
                                        @endif
                                        <div class="mt-5">
                                            {{-- {{ $tes_t7->links () }}<br> --}}
                                            @if ($tes_t7->hasPages())
                                                <ul class="pagination" role="navigation">
                                                    {{-- Previous Page Link --}}
                                                    @if ($tes_t7->onFirstPage())
                                                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                                        </li>
                                                    @else
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $tes_t7->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                                        </li>
                                                    @endif
        
                                                    <?php
                                                        $start = $tes_t7->currentPage() - 1; // show 2 pagination links before current
                                                        $end = $tes_t7->currentPage() + 1; // show 2 pagination links after current
                                                        if($start < 1) {
                                                            $start = 1; // reset start to 1
                                                            $end += 1;
                                                        } 
                                                        if($end >= $tes_t7->lastPage() ) $end = $tes_t7->lastPage(); // reset end to last page
                                                    ?>
        
                                                    @if($start > 1)
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $tes_t7->url(1) }}">{{1}}</a>
                                                        </li>
                                                        @if($tes_t7->currentPage() >3)
                                                            {{-- "Three Dots" Separator --}}
                                                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                                        @endif
                                                    @endif
                                                        @for ($i = $start; $i <= $end; $i++)
                                                            <li class="page-item {{ ($tes_t7->currentPage() == $i) ? ' active' : '' }}">
                                                                <a class="page-link" href="{{ $tes_t7->url($i) }}">{{$i}}</a>
                                                            </li>
                                                        @endfor
                                                    @if($end < $tes_t7->lastPage())
                                                        @if($tes_t7->currentPage() + 2 != $tes_t7->lastPage())
                                                            {{-- "Three Dots" Separator --}}
                                                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                                        @endif
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $tes_t7->url($tes_t7->lastPage()) }}">{{$tes_t7->lastPage()}}</a>
                                                        </li>
                                                    @endif
        
                                                    {{-- Next Page Link --}}
                                                    @if ($tes_t7->hasMorePages())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $tes_t7->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
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
        if (sessionStorage.getItem("counter7")) {
            if (sessionStorage.getItem("counter7") == 0) {
                var value = 0;
                
            } else {
                var value = sessionStorage.getItem("counter7");
            }
        } else {
            var value = 420;
        }


        var counter7 = function () {
            if (value == 0) {
                sessionStorage.setItem("counter7", 0);
                value = 0;
                document.getElementById('menit').innerHTML = 0;
                document.getElementById('detik').innerHTML = 0;
                sessionStorage.removeItem('counter7');
                let links = "{{ route('hint.subtes8') }}";
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
                sessionStorage.setItem("counter7", value);
            }
            // document.getElementById('menit').innerHTML = menit;
            // document.getElementById('detik').innerHTML = detik;
        };

        var interval = setInterval(counter7, 1000);

    </script>
@endsection