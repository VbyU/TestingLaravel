<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>
    <a href="www.google.com">google</a>
    <h2>Nama = {{ $nama }}</h2>
    <ul>
        @foreach ($pelajaran as $item)
        <li>
            <h3>{{ $item }}</h3>
            
        </li>
        @endforeach 

    </ul>
</body>
</html>