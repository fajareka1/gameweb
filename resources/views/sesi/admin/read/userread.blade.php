@extends('basic.main')
@include('komponen.adminnav')

@section('konten')
<h1>saya suka keqingggg</h1>
<div class="w-100 d-flex justify-content-center mb-3">
    <div class="w-75 d-flex">
        <h3 class="w-100 me-5 pe-5 text-light">List User</h3>
        <div class="w-50 ms-5 ps-5 d-flex text-end ">
            <a class="expand-lg-5 btn btn-outline-light me-2" href="/create/user">Tambah User</a>
            <a class="expand-lg-5 btn btn-outline-light" href="/export">Export</a>
        </div>
    </div>
</div>
<div class="w-100 d-flex justify-content-center">
    <div class="w-75">
    
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

    
        
    </div>
</div>

@endsection