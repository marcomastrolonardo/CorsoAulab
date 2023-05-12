<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>fdeparture
        @foreach ($fdeparture as $volodep)

        <li><a href="{{ route('flights',['ref'=>$volodep['id']]) }}">{{$volodep['id']}}</a></li>
    
        @endforeach
    </ul>
    <ul>farrival
        @foreach ($farrival as $voloarr)

        <li><a href="{{ route('flights',['ref'=>$voloarr['id']]) }}">{{$voloarr['id']}}</a></li>
    
        @endforeach
    </ul>

    <!-- Componenti -->
    <x-banner />
    <x-alert />

</body>
</html>