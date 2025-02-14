<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    @foreach ($students as $student)
        <tr>
        <td>ID       : {{ $student->id }}        </td>
        <td>NIM      : {{ $student->nim }}       </td>
        <td>Nama     : {{ $student->name }}      </td>
        <td>Prodi    : {{ $student->prodi }}     </td>
        <td>Angkatan : {{ $student->angkatan }}  </td>
        <td>Alamat   : {{ $student->alamat }}    </td>
        </tr>
    @endforeach
    </table>
</body>
</html>