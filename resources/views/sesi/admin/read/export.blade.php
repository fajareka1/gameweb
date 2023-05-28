<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DataUser.xls");
?>
<body>
    <table class="table table-dark table-striped">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
            
        </tr>
        @foreach ($data as $item)

                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role_name }}</td>
                        <td>
                            <form action="userlist/delete" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger" name="submit" type="submit">Hapus</button></form>
                        </td>
    
                    </tr>

        @endforeach
    </table>
</body>
</html>