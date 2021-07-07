@extends('master.app')

@section('judul','Subtes 8 - Tes IST')

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
            <a class="nav-link collapsed"><i class="fas fa-shapes "></i>
                <span >Tes Potongan Gambar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"><i class="fas fa-cubes "></i>
                <span >Tes Kemampuan Ruang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed"><i class="fas fa-memory text-white"></i>
                <span class="text-white">Tes Menghafal Cepat</span>
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
                    <h1 class="h3 mb-0 text-gray-800">Tes Menghafal Cepat</h1>
                    <h3><span id="menit2"></span>:<span id="detik2"></span> </h3>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Kata Yang Harus Dihafalkan</h6>
                            </div>
                            <div class="card-body">
                                <!-- <div class="chart-area"> -->
                                <div class="ml-5 mt-4">
                                    <table>
                                        @foreach ($kata as $item)
                                        <tr>
                                            <td><h5 class="font-weight-bold">{{ $item->kata_kunci}}</h5></td>
                                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                            <td><h5>
                                                {{$item->sub_kata1}},{{$item->sub_kata2}},{{$item->sub_kata3}},{{$item->sub_kata4}},{{$item->sub_kata5}}
                                            </h5></td>
                                        </tr>
                                        @endforeach
                                        
                                    </table>
                                    <br>
                                </div>
                                <p><b>Keterangan</b>&nbsp;&nbsp; : &nbsp;&nbsp;<i>Apabila Sudah Siap Dapat Langsung Mengklik Tombol " Mulai Mengerjakan " Dibawah Ini </i></p>
                                <!-- </div> -->
                                <div>
                                    <a class='badge badge-primary' href="{{ route('subtes-9')}}">Mulai Mengerjakan</a>
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
        @include('master.footer');
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

@endsection
@section('timer')
    <script type="text/javascript">
        if (sessionStorage.getItem("counter10")) {
            if (sessionStorage.getItem("counter10") == 0) {
                var value = 0;
                
            } else {
                var value = sessionStorage.getItem("counter10");
            }
        } else {
            var value = 180;
        }
        var counter10 = function () {
            if (value == 0) {
                sessionStorage.setItem("counter10", 0);
                value = 0;
                document.getElementById('menit2').innerHTML = 0;
                document.getElementById('detik2').innerHTML = 0;
                sessionStorage.removeItem('counter10');
                let links = "{{ route('subtes-9') }}";
                document.location.href=links;
            } else {
                var menit2 =Math.floor(value/60);
                var detik2 =value%60;
                if (menit2>=0) {
                    document.getElementById('menit2').innerHTML = menit2;
                }
                if (detik2 >=0) {
                    document.getElementById('detik2').innerHTML = detik2;
                }
                if (detik2==0) {
                    document.getElementById('menit2').innerHTML = menit2;
                }
                if (menit2<=0) {
                    document.getElementById('menit2').innerHTML = menit2;
                }
                value = parseInt(value) - 1;
                sessionStorage.setItem("counter10", value);
            }
        };

        var interval = setInterval(counter10, 1000);

    </script>
@endsection