@foreach ($data as $item)
@php
    $db = new PDO('mysql:host=localhost;dbname=tes_ist3;','root','');
@endphp
@php
    $state = $db->prepare("SELECT * FROM `jawaban_subtes_1s` WHERE sub1_idUser=:id;");
    $state->bindValue(':id',$item->id_user);
    $state->execute();
    $hasil=$state->fetchAll(PDO::FETCH_ASSOC);
    foreach ($hasil as $key ) {
        echo $key['sub1_nilaiJawaban'];
    }
@endphp
@endforeach
