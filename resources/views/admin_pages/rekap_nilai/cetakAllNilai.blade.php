<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .garis {
            border: 0;
            border-top: 1px dashed #8c8c8c;
            text-align: center;
        }
        .garis::after{
            content: '\002700';
            display: inline-block;
            position: relative;
            top: -13px;
            padding: 0 3px;
            background: #fff;
            color: #8c8c8c;
            font-size: 18px;
        }
    </style>
    
    <title>Cetak Nilai</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h4 class="text-center">Rekap Nilai Tes IST 2021</h4><br>
                @foreach ($data as $key)
                <hr>
                <div class="row">
                    <div class="col-6">
                        <table class="table table-borderless">
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
                        </table>
                        
                    </div>
                </div>
                <hr>
                <table class="table table-light">
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
                        @php
                            $db = new PDO('mysql:host=localhost;dbname=tes_ist3;','root','');
                            // subtes 1
                            $state = $db->prepare("SELECT * FROM `jawaban_subtes_1s` WHERE sub1_idUser=:id;");
                            $state->bindValue(':id',$key->id_user);
                            $state->execute();
                            $s1=$state->fetchAll(PDO::FETCH_ASSOC);
                            $state2 = $db->prepare("SELECT * FROM `subtes_1s`");
                            $state2->execute();
                            $jumlah1=$state2->fetchAll(PDO::FETCH_ASSOC);
                            // subtes 2
                            $state3 = $db->prepare("SELECT * FROM `jawaban_subtes_2s` WHERE sub2_idUser=:id;");
                            $state3->bindValue(':id',$key->id_user);
                            $state3->execute();
                            $s2=$state3->fetchAll(PDO::FETCH_ASSOC);
                            $state4 = $db->prepare("SELECT * FROM `subtes_2s`");
                            $state4->execute();
                            $jumlah2=$state4->fetchAll(PDO::FETCH_ASSOC);
                            //subtes 3
                            $state5 = $db->prepare("SELECT * FROM `jawaban_subtes_3s` WHERE sub3_idUser=:id;");
                            $state5->bindValue(':id',$key->id_user);
                            $state5->execute();
                            $s3=$state5->fetchAll(PDO::FETCH_ASSOC);
                            $state6 = $db->prepare("SELECT * FROM `subtes_3s`");
                            $state6->execute();
                            $jumlah3=$state6->fetchAll(PDO::FETCH_ASSOC);
                            //subtes 4
                            $state7 = $db->prepare("SELECT * FROM `jawaban_subtes_4s` WHERE sub4_idUser=:id;");
                            $state7->bindValue(':id',$key->id_user);
                            $state7->execute();
                            $s4=$state7->fetchAll(PDO::FETCH_ASSOC);
                            $state8 = $db->prepare("SELECT * FROM `subtes_4s`");
                            $state8->execute();
                            $jumlah4=$state8->fetchAll(PDO::FETCH_ASSOC);
                            //subtes 5
                            $q1 = $db->prepare("SELECT * FROM `jawaban_subtes_5s` WHERE sub5_idUser=:id;");
                            $q1->bindValue(':id',$key->id_user);
                            $q1->execute();
                            $s5=$q1->fetchAll(PDO::FETCH_ASSOC);
                            $q2 = $db->prepare("SELECT * FROM `subtes_5s`");
                            $q2->execute();
                            $jumlah5=$q2->fetchAll(PDO::FETCH_ASSOC);
                            //subtes 6
                            $q3 = $db->prepare("SELECT * FROM `jawaban_subtes_6s` WHERE sub6_idUser=:id;");
                            $q3->bindValue(':id',$key->id_user);
                            $q3->execute();
                            $s6=$q3->fetchAll(PDO::FETCH_ASSOC);
                            $q4 = $db->prepare("SELECT * FROM `subtes_6s`");
                            $q4->execute();
                            $jumlah6=$q4->fetchAll(PDO::FETCH_ASSOC);
                            //subtes 7
                            $q5 = $db->prepare("SELECT * FROM `jawaban_subtes_7s` WHERE sub7_idUser=:id;");
                            $q5->bindValue(':id',$key->id_user);
                            $q5->execute();
                            $s7=$q5->fetchAll(PDO::FETCH_ASSOC);
                            $q6 = $db->prepare("SELECT * FROM `subtes_7s`");
                            $q6->execute();
                            $jumlah7=$q6->fetchAll(PDO::FETCH_ASSOC);
                            //subtes 8
                            $st1 = $db->prepare("SELECT * FROM `jawaban_subtes_8s` WHERE sub8_idUser=:id;");
                            $st1->bindValue(':id',$key->id_user);
                            $st1->execute();
                            $s8=$st1->fetchAll(PDO::FETCH_ASSOC);
                            $st2 = $db->prepare("SELECT * FROM `subtes_8s`");
                            $st2->execute();
                            $jumlah8=$st2->fetchAll(PDO::FETCH_ASSOC);
                            //subtes 9
                            $st3 = $db->prepare("SELECT * FROM `jawaban_subtes_9s` WHERE sub9_idUser=:id;");
                            $st3->bindValue(':id',$key->id_user);
                            $st3->execute();
                            $s9=$st3->fetchAll(PDO::FETCH_ASSOC);
                            $st4 = $db->prepare("SELECT * FROM `subtes_9s`");
                            $st4->execute();
                            $jumlah9=$st4->fetchAll(PDO::FETCH_ASSOC);


                        @endphp
                        @php
                            $t1=0;
                            $f1=0;
                        @endphp
                        {{-- Subtes 1 --}}
                        @foreach ($s1 as $item)
                            @if ($item['sub1_nilaiJawaban'] == 'benar')
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
                            @if ($item['sub2_nilaiJawaban'] == 'benar')
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
                            @if ($item['sub3_nilaiJawaban'] == 'benar')
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
                            @if ($item['sub4_nilaiJawaban'] == 'benar')
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
                            @if ($item['sub5_nilaiJawaban'] == 'benar')
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
                            @if ($item['sub6_nilaiJawaban'] == 'benar')
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
                            @if ($item['sub7_nilaiJawaban'] == 'benar')
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
                            @if ($item['sub8_nilaiJawaban'] == 'benar')
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
                            @if ($item['sub9_nilaiJawaban'] == 'benar')
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

                        {{-- jumlah data --}}
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
                <hr class="garis">
                <br><br><br>


                @endforeach
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