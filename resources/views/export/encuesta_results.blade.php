<table>
    <thead>
        <tr>
            <th>Número de Control</th>            
            @foreach($preguntas as $pregunta)
                <th>{{ $pregunta->texto }}</th>
            @endforeach

        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{{$persona->Ncontrol}}</td>
                <td>{{$persona->name}}</td>
                @foreach($preguntas as $pregunta)
                    <td>{{ $respuestas->where('Ncontrol', $persona->Ncontrol)->where('pregunta_id', $pregunta->id)->first()->texto }}</td>
                @endforeach
{{--                 
                @foreach($pregunta->respuestas as $respuesta)
                    <tr>
                        <th>{{ $encuesta->name }}</th>
                        {{-- <th>{{ $pregunta->texto }}</th> 
                        <th>{{ $respuesta->texto }}</th>
                    </tr>
                @endforeach --}}
            </tr>
        @endforeach
    </tbody>
</table>
