@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{asset('css/isolate-bootstrap.css')}}">
<br><br><br>
{{-- <div class="container mg-y-40-sm mg-y-80-md pd-x-80-md"><div class="row-flex items-center"><div class="ev-flex-sm-12 ev-flex-md-6 pd-r-140-md"><h1 class="fs-32-sm fs-48-md fw-bold ev-uppercase c-dark mg-b-20-sm mg-b-0-md">Unduh Brosur</h1></div><div class="ev-flex-sm-12 ev-flex-md-6"><p><span data-sheets-userformat="{&quot;2&quot;:15307,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16448250},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:2101837}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;9&quot;:0,&quot;10&quot;:1,&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:2101837},&quot;15&quot;:&quot;Roboto&quot;,&quot;16&quot;:10}" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Dapatkan informasi lebih lengkap dengan mengunduh brosur produk Mitsubishi Motors terbaik pilihan Anda.&quot;}">Dapatkan informasi lebih lengkap dengan mengunduh brosur produk Mitsubishi Motors terbaik pilihan Anda.</span>&nbsp;</p></div></div></div>

<div class="bootstrap-iso">
<div class="container mt-5 mb-5">
    <div class="row">
    @foreach ($brosur as $item)
        <div class="col-md-3">
                <img style="width: 100%;" src="{{$item->sampul}}" alt="">
                <p class="mb-2 text-center pb-0 mt-2">{{$item->judul}}</p>
                <div class="d-flex justify-content-center">
                    <a style="color: black; text-decoration: none;" download href="{{$item->link}}">
                        <button class="btn btn-dark">Unduh</button>
                    </a>
                </div>
                
        </div>
    @endforeach
</div>
</div>
</div> --}}
<section class="section mg-y-0-sm">
    <div class="container mg-y-40-sm mg-y-80-md pd-x-80-md">
      <div class="row-flex items-center">
        <div class="ev-flex-sm-12 ev-flex-md-6 pd-r-140-md">
          <h1 class="fs-32-sm fs-48-md fw-bold ev-uppercase c-dark mg-b-20-sm mg-b-0-md">Unduh Brosur</h1>
        </div>
        <div class="ev-flex-sm-12 ev-flex-md-6">
          <p>
            <span data-sheets-userformat="{&quot;2&quot;:15307,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16448250},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:2101837}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;9&quot;:0,&quot;10&quot;:1,&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:2101837},&quot;15&quot;:&quot;Roboto&quot;,&quot;16&quot;:10}" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Dapatkan informasi lebih lengkap dengan mengunduh brosur produk Mitsubishi Motors terbaik pilihan Anda.&quot;}">Dapatkan informasi lebih lengkap dengan mengunduh brosur produk Mitsubishi Motors terbaik pilihan Anda.</span>&nbsp;
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="tab tab--clean tab--clean-v2">
        <ul class="tab__control mg-b-40-sm">
          <li class="tab-link" data-tab="tab-0">
            <a href="#tab-0" class="active">Kendaraan Penumpang</a>
          </li>
          <li class="tab-link" data-tab="tab-1">
            <a href="#tab-1" class="">Kendaraan Niaga Ringan</a>
          </li>
        </ul>
        <div class="tab__list">
          <div class="tab__item active" id="tab-0">
            <div class="row-flex">
                @foreach ($brosur_1 as $item)
              <div class="ev-flex-sm-12 ev-flex-md-3">
                <div class="card card--flyer">
                  <div class="card__thumbnail">
                    <a href="#" target="_blank">
                      <img src="{{$item->sampul}}" alt="">
                    </a>
                  </div>
                  <div class="card__body">
                    <h2 class="card__title c-black">{{$item->judul}}</h2>
                    <figure>
                      <a href="{{$item->link}}" download="" class="button button-underline-secondary">Unduh Langsung</a>
                    </figure>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="tab__item" id="tab-1">
            <div class="row-flex">
                @foreach ($brosur_2 as $item)
                <div class="ev-flex-sm-12 ev-flex-md-3">
                  <div class="card card--flyer">
                    <div class="card__thumbnail">
                      <a href="#" target="_blank">
                        <img src="{{$item->sampul}}" alt="">
                      </a>
                    </div>
                    <div class="card__body">
                      <h2 class="card__title c-black">{{$item->judul}}</h2>
                      <figure>
                        <a href="{{$item->link}}" download="" class="button button-underline-secondary">Unduh Langsung</a>
                      </figure>
                    </div>
                  </div>
                </div>
                @endforeach
      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection