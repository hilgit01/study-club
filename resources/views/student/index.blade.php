<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1" cellspacing="0">
        <tr>
            <th>ID      </th>
            <th>NIM     </th>
            <th>Nama    </th>
            <th>Prodi   </th>
            <th>Angkatan</th>
            <th>Alamat  </th>
            <th>Action  </th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>ID       : {{ $student->id }}        </td>
            <td>NIM      : {{ $student->nim }}       </td>
            <td>Nama     : {{ $student->name }}      </td>
            <td>Prodi    : {{ $student->prodi }}     </td>
            <td>Angkatan : {{ $student->angkatan }}  </td>
            <td>Alamat   : {{ $student->alamat }}    </td>
            <td>
                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <form action="{{ route('student.update', $student->id ) }}" method="POST">
                    <a><button>Edit</button></a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('student.create') }}">tambah data</a>
</body>
</html>