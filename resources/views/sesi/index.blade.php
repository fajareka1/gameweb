@extends('basic.main3')
@extends('komponen.navbar')

@section('konten')
    <div class=" center rounded px-3 py-3 mx-auto d-flex kontainer text-light login">
        <img class="me-4 ms-2" src="img/logog2.png" alt="" width="260px" height="260px" >
        <div class="w-100 h-auto me-2">
            <h2 class="w-100 text-center">Login</h2>
            <form action="/sesi/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="formlabel">Email</label>
                    <input type="email" class="form-control bg-dark text-light" name="email" value="{{ Session::get('email') }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="formlabel">password</label>
                    <input type="password" class="form-control bg-dark text-light" name="password">
                </div>
                <div class="mb-3 d-grid">
                    <button class="btn btn-primary " type="submit" name="submit">login</button>
            </div>
            </form>
        </div>

    </div>
@endsection
