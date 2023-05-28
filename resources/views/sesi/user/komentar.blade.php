@extends('basic.main')
@include('komponen.navback')

@section('konten')

@foreach ($komen as $item)
    @foreach($user as $foto)
    @php $path = Storage::url('imgs/'.$foto->profil_img); @endphp
    <div class="w-100 d-flex justify-content-center text-center ">
        <div class="w-75 text-light border border-light rounded text-center mb-3" style="height: 250px">
            <div class="w-100 text-end">
                <form action="komentar/delete" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $item->id }}">
                    <button class="fw-bold btn btn-dark me-3">X</button>
                </form>
            </div>
            <div class="w-100 d-flex m-3">
                <div class="w-50 d-flex">
                    <img src="{{ url($path) }}" alt="" width="50px" height="50px" class="rounded-circle" srcset="">
                    <h3 class="mt-2 ms-2">{{ $foto->username }}</h3>
                </div>
                
                <div class="w-50 text-end">
                    <p class="fw-bold me-5">{{$item->updated_at}}</p>
                </div>
            </div>
            <p class="mt-5">"{{ $item->komentar }}"</p>
        </div>
    </div>
    @endforeach
@endforeach

