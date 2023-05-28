@extends('basic.main')
@include('komponen.navback')
@php $path = Storage::url('imgs/'.$data->poster_file); @endphp
@php $path2 = Storage::url('imgs/'.$data->gameplay_file); @endphp
@php $path3 = Storage::url('imgs/'.$data->video_file); @endphp

@section('konten')
    <div class="w-100 d-flex justify-content-center text-light">
        <div class="layer justify-content-center rounded border">
            <div class="d-flex m-4 w-100">
                <img src="{{ url($path) }}" width="200px" alt="">
                <div class="ms-4 w-50 me-2">
                    <h2>{{ $data->name_game }}</h2>
                    <h2>prize</h2>
                </div>
                <div class="ms-4 w-25 d-flex justify-content-end">
                    <form action="/ingame" class="w-50" method="post">
                        @csrf
                        <input type="hidden" name="game_id" value="{{ $data->game_id }}">
                        <button class="w-100 me-1 btn btn-primary" name="submit" type="submit">edit</button>
                    </form> 
                </div>
            </div>
            <div class="m-4">
                <h1>Gameplay</h1>
                <video controls class="w-100 mb-2" src="{{ url($path3) }}"></video>
                <img class="" src="{{ url($path2) }}" alt="" srcset="" width="100%" height="auto">
            </div>
        </div>
    </div>

    <div class="mt-5 w-100 d-flex justify-content-center">
        <div class="layer rounded text-light d-flex">
            <div class="text-start m-4">
                <h1>Deskripsi</h1>
                <h4 class="mt-2">{{ $data->deskripsi_game }}</h4>
            </div>
        </div>
    </div>

    <div class="mt-5 w-100 d-flex justify-content-center">
        <div class="layer rounded text-light d-flex ">
            <div class="m-4">
                <h1>System requiredment</h1>
                <h4 class="mt-2">{{ $data->deskripsi_game }}</h4>
            </div>
        </div>
    </div>
@endsection