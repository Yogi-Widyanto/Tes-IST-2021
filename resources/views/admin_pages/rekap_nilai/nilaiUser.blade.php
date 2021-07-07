@extends('admin_pages.master-admin.app')

@section('judul','Halaman Admin')

@section('isi')
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home.admin')}}">
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
        <a class="nav-link collapsed" href="{{route('rekap')}}"><i class="fas fa-book-reader text-white"></i>
            <span class="text-white">Lihat Hasil Tes</span>
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
                        <h4 class="text-bold text-dark text-center mt-2 mb-4">Hasil Tes IST 2021</h4>
                        <div class="row">
                            <div class="col-6">
                                <table class="table table-borderless">
                                    @foreach ($data as $key)
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td>{{$key->nama_lengkap}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{$key->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Akses</td>
                                        <td>:</td>
                                        <td>
                                            @php
                                                date_default_timezone_set('Asia/Bangkok');
                                                echo date('d F Y');
                                            @endphp
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <a class="btn btn-success" href="/admin/rekap/nilai-user/{{$key->id_user}}" target="_blank">&nbsp;&nbsp;Cetak&nbsp;&nbsp;</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Subtes</th>
                                        <th scope="col">Benar</th>
                                        <th scope="col">Salah</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col">Jumlah Soal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Subtes 1 --}}
                                    @php
                                        $t1=0;
                                        $f1=0;
                                    @endphp
                                    @foreach ($s1 as $item)
                                        @if ($item->sub1_nilaiJawaban == 'benar')
                                            @php
                                                $t1+=1;
                                            @endphp
                                                
                                            @else
                                            @php
                                                $f1+=1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Tes Pengetahuan Umum</td>
                                        <td>{{$t1}}</td>
                                        <td>{{$f1}}</td>
                                        <td>{{$t1}}</td>
                                        <td>{{count($jumlah1)}}</td>
                                    </tr>
            
                                    {{-- Subtes 2 --}}
                                    @php
                                        $t2=0;
                                        $f2=0;
                                    @endphp
                                    @foreach ($s2 as $item)
                                        @if ($item->sub2_nilaiJawaban == 'benar')
                                            @php
                                                $t2+=1;
                                            @endphp
                                                
                                            @else
                                            @php
                                                $f2+=1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Tes Kesamaan Kata</td>
                                        <td>{{$t2}}</td>
                                        <td>{{$f2}}</td>
                                        <td>{{$t2}}</td>
                                        <td>{{count($jumlah2)}}</td>
                                    </tr>
            
                                    {{-- Subtes 3 --}}
                                    @php
                                        $t3=0;
                                        $f3=0;
                                    @endphp
                                    @foreach ($s3 as $item)
                                        @if ($item->sub3_nilaiJawaban == 'benar')
                                            @php
                                                $t3+=1;
                                            @endphp
                                                
                                            @else
                                            @php
                                                $f3+=1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Tes Hubungan Kata</td>
                                        <td>{{$t3}}</td>
                                        <td>{{$f3}}</td>
                                        <td>{{$t3}}</td>
                                        <td>{{count($jumlah3)}}</td>
                                    </tr>
                                    
                                    {{-- Subtes 4 --}}
                                    @php
                                        $t4=0;
                                        $f4=0;
                                    @endphp
                                    @foreach ($s4 as $item)
                                        @if ($item->sub4_nilaiJawaban == 'benar')
                                            @php
                                                $t4+=1;
                                            @endphp
                                                
                                            @else
                                            @php
                                                $f4+=1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Tes Pengertian Kata</td>
                                        <td>{{$t4}}</td>
                                        <td>{{$f4}}</td>
                                        <td>{{$t4}}</td>
                                        <td>{{count($jumlah4)}}</td>
                                    </tr>
            
                                    {{-- Subtes 5 --}}
                                    @php
                                        $t5=0;
                                        $f5=0;
                                    @endphp
                                    @foreach ($s5 as $item)
                                        @if ($item->sub5_nilaiJawaban == 'benar')
                                            @php
                                                $t5+=1;
                                            @endphp
                                                
                                            @else
                                            @php
                                                $f5+=1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Tes Aritmatika</td>
                                        <td>{{$t5}}</td>
                                        <td>{{$f5}}</td>
                                        <td>{{$t5}}</td>
                                        <td>{{count($jumlah5)}}</td>
                                    </tr>
            
                                    {{-- Subtes 6 --}}
                                    @php
                                        $t6=0;
                                        $f6=0;
                                    @endphp
                                    @foreach ($s6 as $item)
                                        @if ($item->sub6_nilaiJawaban == 'benar')
                                            @php
                                                $t6+=1;
                                            @endphp
                                                
                                            @else
                                            @php
                                                $f6+=1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Tes Deret Angka</td>
                                        <td>{{$t6}}</td>
                                        <td>{{$f6}}</td>
                                        <td>{{$t6}}</td>
                                        <td>{{count($jumlah6)}}</td>
                                    </tr>
            
                                    {{-- Subtes 7 --}}
                                    @php
                                        $t7=0;
                                        $f7=0;
                                    @endphp
                                    @foreach ($s7 as $item)
                                        @if ($item->sub7_nilaiJawaban == 'benar')
                                            @php
                                                $t7+=1;
                                            @endphp
                                                
                                            @else
                                            @php
                                                $f7+=1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Tes Potongan Gambar</td>
                                        <td>{{$t7}}</td>
                                        <td>{{$f7}}</td>
                                        <td>{{$t7}}</td>
                                        <td>{{count($jumlah7)}}</td>
                                    </tr>
            
                                    {{-- Subtes 8 --}}
                                    @php
                                        $t8=0;
                                        $f8=0;
                                    @endphp
                                    @foreach ($s8 as $item)
                                        @if ($item->sub8_nilaiJawaban == 'benar')
                                            @php
                                                $t8+=1;
                                            @endphp
                                                
                                            @else
                                            @php
                                                $f8+=1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Tes Kemampuan Ruang</td>
                                        <td>{{$t8}}</td>
                                        <td>{{$f8}}</td>
                                        <td>{{$t8}}</td>
                                        <td>{{count($jumlah8)}}</td>
                                    </tr>
            
                                    {{-- Subtes 9 --}}
                                    @php
                                        $t9=0;
                                        $f9=0;
                                    @endphp
                                    @foreach ($s9 as $item)
                                        @if ($item->sub9_nilaiJawaban == 'benar')
                                            @php
                                                $t9+=1;
                                            @endphp
                                                
                                            @else
                                            @php
                                                $f9+=1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Tes Menghafal Cepat</td>
                                        <td>{{$t9}}</td>
                                        <td>{{$f9}}</td>
                                        <td>{{$t9}}</td>
                                        <td>{{count($jumlah9)}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-right"><b>Jumlah</b></td>
                                        <td>
                                            {{
                                                $t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9
                                            }}
                                        </td>
                                        <td>
                                            {{
                                                $f1+$f2+$f3+$f4+$f5+$f6+$f7+$f8+$f9
                                            }}
                                        </td>
                                        <td>
                                            {{
                                                $t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9
                                            }}
                                        </td>
                                        <td>
                                            {{
                                                count($jumlah1)+count($jumlah2)+count($jumlah3)+count($jumlah4)+count($jumlah5)+count($jumlah6)+count($jumlah7)+count($jumlah8)+count($jumlah9)
                                            }}
                                        </td>
            
                                    </tr>
                                    
                                </tbody>
                            </table>
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






