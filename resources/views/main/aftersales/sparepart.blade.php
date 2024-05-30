@extends('layouts.main')

@section('content')
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset($sparepart->background)}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h1 class="text-white text-uppercase mb-3 animated slideInDown">{{$sparepart->text1}}</h1>
                                <h5 class="text-white col-lg-10 mb-4 pb-3 animated slideInDown">{{$sparepart->text2}}</h5>
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h1>KATEGORI SPAREPART</h1>
    <div class="row">
        @foreach ($sparepart_kategori as $item)
            <div class="col-md-3">
                <a href="/aftersales/sparepart/{{$item->id}}">
                <div class="d-flex justify-content-center">
                    <img class="" style="object-fit: contain; width: 70%; height: 280px;" src="/{{$item->gambar}}" alt="">
                </div>
                    <div class="text-center">
                        <h5 class="text-dark">{{$item->nama}}</h5>
                    </div>
                </a>
    
            </div>
        @endforeach
  </div>

  <h1 class="mt-5">KOMITMEN KAMI</h1>
    {!!$sparepart->content!!}

@endsection
