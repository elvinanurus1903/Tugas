<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>IMAGE</th>
        </tr>
    </thead>
    <tbody>
    @php $id = 1 @endphp
    @foreach($users as $user)
        <tr>
            <td>{{ $id++ }}</td>
            <td>{{ $user->nim }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->email }}</td>
             <td>{{ $user->image }}</td>
        </tr>
    @endforeach
    </tbody>
</table>