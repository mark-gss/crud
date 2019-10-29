<table border="1">
    <thead>
        <th>Username</th>
        <th>Email</th>
    </thead>
    <tbody>
        @foreach ($data as $record)
        <tr>
            <td>{{ $record->username }}</td>
            <td>{{ $record->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>