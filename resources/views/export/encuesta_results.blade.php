<table>
    <thead>
        <tr>
            <th>Encuesta</th>
            <th>Pregunta</th>
            <th>Respuesta</th>
        </tr>
    </thead>
    <tbody>
        @foreach($preguntas as $pregunta)
            @foreach($pregunta->respuestas as $respuesta)
                <tr>
                    <td>{{ $encuesta->name }}</td>
                    <td>{{ $pregunta->texto }}</td>
                    <td>{{ $respuesta->texto }}</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
