@extends('basic.main')
@include('komponen.adminnav')

@section('konten')
<h1>saya suka keqingggg</h1>
<div class="w-100" style="height: 100vh;">
    <div class="w-100 d-flex justify-content-center" style="">
        @foreach ($profil as $item)
        @php $path = Storage::url('imgs/'.$item->profil_img); @endphp
        <div class="text-center w-100 ">
            <img src="{{ url($path) }}" height="200px" width="200px" alt="" srcset="" class="rounded-circle">
            <h4 class="text-light mt-3">Welcome back : </h4>
            <h1 class="text-light">{{ $item->username }}</h1>
        </div>
        @endforeach
        
    </div>
    <div class="w-100 d-flex justify-content-center">
        <div class="w-75 mt-5 text-light">
            <p>Quote Todays :</p>
            <p>Ibu adalah sekolah. Ibu adalah lembaga pendidikan pertama. Ibulah yang membekali anak sikap, watak, kepribadian, akhlak, iman, dan pemahaman bahwa dunia ini berkerikil, dan kerikilnya dapat sering membuat si anak terjatuh. Ibu yang baik akan mempersiapkan anaknya menghadapi kerikil-kerikil itu agar ketajamannya tak membuat cedera hidup di dunia, apalagi cedera di akhirat kelak. - Hasyim El-Hanan, Merajut Rahmat Cinta
    
                Baca artikel detiksulsel, "101 Quotes atau Kata-kata Bijak tentang Ibu Yang Menyentuh Hati"</p>
        </div>
    </div>
</div>

@endsection