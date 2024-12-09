<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<a href = "{{route('note.index')}}">ATRAS</a>
<form action="{{route('note.store')}}" method="POST">
    @csrf 
  <ul>
    <li>
      <label for="title">Titulo:</label>
      <input type="text" id="title" name="title" />
    </li>
    <li>
      <label for="description">Descripcion:</label>
      <input type="text" id="description" name="description" />
    </li>
    <li>
      <button type="submit">Enviar</button>
    </li>
  </ul>
</form>
</body>
</html>