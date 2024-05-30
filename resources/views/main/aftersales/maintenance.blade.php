@extends('layouts.main')

@section('content')
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset($maintenance->background)}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h1 class="text-white text-uppercase mb-3 animated slideInDown">{{$maintenance->text1}}</h1>
                                <h5 class="text-white col-lg-10 mb-4 pb-3 animated slideInDown">{{$maintenance->text2}}</h5>
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    {!!$maintenance->content!!}

@endsection
