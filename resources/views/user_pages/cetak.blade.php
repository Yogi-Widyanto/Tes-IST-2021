<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Cetak Nilai</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h4 class="text-center">Rekap Nilai Tes Ist 2021</h4><br>
                <hr>
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
                            @endforeach
                        </table>
                        
                    </div>
                </div>
                <hr>
            
                <table class="table">
                    <thead class="thead-light">
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
                <hr>
                
            </div>
        </div>
    </div>



    <script type="text/javascript">
        window.print();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>
