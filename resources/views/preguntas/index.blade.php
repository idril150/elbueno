<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>listado de preguntas</h1>
    <a href="{{route('preguntas.create')}}">crear pregunta</a>
    <ul>      
        {{-- @foreach($preguntas as $preg)
            <p>{{ $preg->texto }}</p>
        @endforeach
         --}}
        @foreach ($preguntas as $pregunta)
            <li>
                <a href="{{route('preguntas.show',$pregunta->id)}}">{{$pregunta->texto}}</a>
            </li>
        @endforeach
    </ul>
    {{$preguntas->links()}}


</body>
</html>