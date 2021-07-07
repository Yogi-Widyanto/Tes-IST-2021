<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout</title>
</head>
<body>
    <a href="{{ route ('logout') }}">Keluar</a>
    
    @php
        echo $data;
        echo $data2;

    @endphp

</body>
</html>