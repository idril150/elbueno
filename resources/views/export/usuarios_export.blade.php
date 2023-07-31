<table>
    <thead>
        <tr>
            <th>Número de Control</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Carrera</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->Ncontrol }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->telefono }}</td>
                <td>{{ $user->carrera }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
