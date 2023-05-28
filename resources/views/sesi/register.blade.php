
@extends('basic/main3')
@extends('komponen.navbar')
@section('konten')
<div class=" center rounded px-3 py-3 mx-auto kontainer register d-flex log  text-light ">
    <img class="me-4 ms-2 mt-5" src="img/logog2.png" alt="" width="260px" height="260px" >
    <div class="w-100 h-auto me-2">
        <h3 class="w-100 text-center">Register</h3>
        <form action="/sesi/register" method="POST">
            @csrf
            <div class="mb-2">
                <label for="name" class="formlabel">name</label>
                <input type="text" class="form-control bg-dark text-light" name="name" value="{{ Session::get('name') }}">
            </div>
            <div class="mb-2">
                <label for="email" class="formlabel">Email</label>
                <input type="email" class="form-control bg-dark text-light" name="email" value="{{ Session::get('email') }}">
            </div>
            <div class="mb-2">
                <label for="password" class="formlabel">password</label>
                <input type="password" class="form-control bg-dark text-light" name="password" >
                <input type="hidden" value="2" name="role_id"  >
            </div>
            <div class="mb-2 mt-3 d-grid">
                <button class="btn btn-primary" type="submit" name="submit">register</button>
        </div>
        </form>
    </div>
</div>


@endsection