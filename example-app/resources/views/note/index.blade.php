<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notas</h1>
    <ul>
        <!-- @foreach ($notes as $note)
            <li>{{ $note->title }} -- {{$note->description}}</li>
        @endforeach -->

        @forelse($notes as $note)
            <li><a href="#">{{$note-->title}}<a/><a href="#">EDITAR</a> | <a href = "#">DELETE</a></li>
        @empty
        <p>No data.<p>
        @endforelse
    </ul>
</body>
</html>