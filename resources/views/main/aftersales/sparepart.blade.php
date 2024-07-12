@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{asset('css/isolate-bootstrap.css')}}">
{!!$sparepart->content!!}

<div class="bootstrap-iso">
    <div class="container mt-5 mb-5">
    
        <h1>KATEGORI SPAREPART</h1>
        <div class="row">
            @foreach ($sparepart_kategori as $item)
                <div class="col-md-3">
                    <a style="color: black; text-decoration:none;" href="/aftersales/sparepart/{{$item->id}}">
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
</div>



   

@endsection
