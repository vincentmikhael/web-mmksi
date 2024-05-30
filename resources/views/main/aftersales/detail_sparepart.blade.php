@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>DATA SPAREPART</h1>
    <div class="row">
        @foreach ($sparepart as $item)
            <div class="col-md-3">
                <div class="d-flex justify-content-center">
                    <img class="" style="object-fit: contain; width: 60%; height: 280px;" src="/{{$item->gambar}}" alt="">
                </div>
                    <div class="text-center">
                        <h3 class="text-dark">{{$item->nama}}</h3>
                        <h5>{{$item->harga}}</h5>
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              BELI PRODUK
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach ($item->link as $link)
                                <li><a class="dropdown-item" href="{{$link->link}}">{{$link->nama}}</a></li>
                                @endforeach
                             
                            </ul>
                          </div>
                    </div>

            </div>
        @endforeach
  </div>

@endsection
