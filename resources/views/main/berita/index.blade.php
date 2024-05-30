@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row">
        @forelse ($berita as $item)
            <div class="col-md-4">
                <a href="/berita/{{$item->slug}}">
                    <img src="{{$item->gambar}}" style="width: 100%; height: 250px; object-fit: cover;" alt="">
                    <p class="mt-3 mb-2 pb-0">{{date('d M Y',strtotime($item->tanggal))}}</p>
                    <h6 class="my-0 py-0">{{$item->judul}}</h6>
                </a>
            </div>
        @empty
            
        @endforelse
    </div>

</div>
@endsection