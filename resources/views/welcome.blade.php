@extends('layouts.main')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banner as $idx => $item)
                <div class="carousel-item {{$idx == 0 ? 'active' : ''}}">
                    <img class="w-100" src="{{asset($item->background)}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">{{$item->sub_text}}</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">{{$item->main_text}}</h1>
                                    <a href="{{$item->link}}" class="btn btn-primary py-3 px-5 animated slideInDown">Selengkapnya<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
    
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    
    <div id="carousel-kendaraan" class="owl-carousel owl-theme container">
        @foreach ($kendaraan as $item)
        <div>
            <img class="" style="object-fit: contain; width: 100%; height: 280px;" src="{{$item->gambar}}" alt="">
            <div class="text-center">
                <h3 class="text-dark">{{$item->nama}}</h3>
                <p style="color: rgb(133, 133, 133)">Mulai dari {{$item->harga}}</p>
            </div>
            <div class="d-flex justify-content-center mt-4 mb-5">
                <a class="btn btn-outline-dark">
                    <h6 class="my-0 py-2">Selengkapnya</h6></a> 
            </div>
            
        </div>
        @endforeach  
    </div>
    
   
<div class="bg-dark py-5">
    <div id="carousel-youtube" class="owl-carousel my-5 owl-theme container">
        @foreach ($youtube as $item)
        <div>
            <iframe style="width: 100%; aspect-ratio: 16 / 9;" src="{{$item->link}}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        @endforeach    
    </div>
</div>



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset($promo->gambar)}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-primary text-uppercase">PROMO</h4>
                        <a href="/berita?kategori=Promosi">Selengkapnya</a>
                    </div>
                    
                    <h1 class="mb-4">{{$promo->judul}}</h1>
                    <p class="mb-4">{!!Illuminate\Support\Str::limit($promo->content,200)!!}</p>
          
                    <a href="/berita/{{$promo->slug}}" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
  
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="bg-dark">
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5 text-white">Berita & Promo</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Berita</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Promo</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Siaran Pers</h4>
                        </button>
            
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset($berita->gambar)}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-white">{{$berita->judul}}</h3>
                                    <p class="mb-4 text-white">{!!Illuminate\Support\Str::limit($berita->content,200)!!}</p>
                                    <a href="/berita/{{$berita->slug}}" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset($promo->gambar)}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-white">{{$promo->judul}}</h3>
                                    <p class="mb-4 text-white">{!!Illuminate\Support\Str::limit($promo->content,200)!!}</p>
                                    <a href="/berita/{{$promo->slug}}" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset($pers->gambar)}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-white">{{$pers->judul}}</h3>
                                    <p class="mb-4 text-white">{!!Illuminate\Support\Str::limit($pers->content,200)!!}</p>
                                    <a href="/berita/{{$pers->slug}}" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Service End -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('images/maintenance/maintenance.png')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <h1 class="mb-4">LAYANAN AFTER SERVICES</h1>
                    <p class="mb-4">{{$maintenance->text2}}</p>
          
                    <a href="/aftersales/maintenance" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>


 @endsection

 @section('js')
 <script>
    $('#carousel-youtube').owlCarousel({
loop:true,
margin:50,
nav:true,
navText : [`<button style="opacity: 1;" class="carousel-control-prev" type="button"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>`,`<button style="opacity: 1;" class="carousel-control-next" type="button"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>`],
responsive:{
    0:{
        items:1
    },
    700:{
        items:2
    },
    1000:{
        items:3
    }
}
})

$('#carousel-kendaraan').owlCarousel({
loop:true,
margin:50,
center: true,
animateIn: true,
nav:true,
navText : [`<button style="opacity: 1;" class="carousel-control-prev" type="button"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>`,`<button style="opacity: 1;" class="carousel-control-next" type="button"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>`],
responsive:{
    0:{
        items:1
    },
    700:{
        items:3
    },
    1000:{
        items:3
    }
}
})
</script>
 @endsection