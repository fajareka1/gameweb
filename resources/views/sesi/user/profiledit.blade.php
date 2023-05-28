@extends('basic.main')
@section('konten')
@include('komponen.navback')
<h1>saya suka keqingggg</h1>
@php $path = Storage::url('imgs/'.$data->profil_img); @endphp

<div  class="w-100 d-flex justify-content-center">
    <div class="layer text-light">
        <div class="w-100 row">
        
                    <div class="d-flex mb-4 mt-4">
                        <div class="">
                            <img src="{{ url($path) }}" width="200px" height="" alt="" srcset="" class="  border border-light ">
                        </div>
                        <div class="ms-4">
                            <h2 class="mt-2">{{ $data->username }}</h2>
                            <p class="mt-1 fw-bold">{{ $data->email }}</p>
                        </div>
                    </div>
                    <form class=" text-light" action="{{ route('profil.update',$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h1 class="text-light">Edit Profil</h1>
                        <div class="mb-2 d-flex w-100 mt-4">
                            <label for="profil_img" class="formlabel w-25">foto profil</label>
                            <input type="file" class="form-control bg-dark text-light" name="profil_img" value="{{ $data->profil_img }}" placeholder="{{ $data->profil_img }}">
                        </div>
                        <div class="mb-2 d-flex w-100">
                            <label for="usernamename" class="formlabel w-25">username</label>
                            <input type="text" class="form-control bg-dark text-light" name="username" value="{{ $data->username }}" placeholder="">
                            <input type="hidden" name="user_id" value="{{ $data->user_id }}">
                        </div>
                        <div class="mb-2 d-flex w-100">
                            <label for="email" class="formlabel w-25">email</label>
                            <input type="text" class="form-control bg-dark text-light" name="email" value="{{ $data->email }}" placeholder="">
                        </div>
                        <div class="mb-2 mt-3 d-grid">
                            <button class="btn btn-secondary" type="submit" name="submit">submit</button>
                        </div>
                    </form>
            
        
            
        </div>
    </div>
</div>

@endsection