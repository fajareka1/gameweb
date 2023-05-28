@extends('basic.main')
@include('komponen.navback')

@section('konten')
<h1>saya suka keqingggg</h1>
<div class="w-100 d-flex justify-content-center mb-3 mt-3">
    <div class="w-75 d-flex">
        <h3 class=" text-light">Tambah User</h3>
    </div>
</div>
<div class="w-100 d-flex justify-content-center">
    <div class="w-75 ">

        <div class="">
    
            <form class=" text-light" action="/create/admin" method="POST">
                @csrf
                <div class="mb-2 d-flex w-100">
                    <label for="name" class="formlabel w-25">name</label>
                    <input type="text" class="form-control bg-dark text-light" name="name" value="{{ Session::get('name') }}">
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="email" class="formlabel w-25">Email</label>
                    <input type="email" class="form-control bg-dark text-light" name="email" value="{{ Session::get('email') }}">
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="password" class="formlabel w-25">password</label>
                    <input type="password" class="form-control bg-dark text-light" name="password" >
                </div>
                <div class="mb-2 d-flex w-100">
                    <label for="floatingSelect" class="w-25">Role</label>
                    <select class="form-select bg-dark text-light" name="role_id" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Admin</option>
                        <option value="2">user</option>
                      </select>
                </div>
                <div class="mb-2 mt-3 d-grid">
                    <button class="btn btn-secondary" type="submit" name="submit">register</button>
                </div>
            </form>
    
        </div>
    </div>
</div>
@endsection