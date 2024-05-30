@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">
<style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans");
.wrapper {
  font-family: "Open Sans", sans;
  text-align: center;
  color: #444;
}

#threesixty {
  margin: 0 auto;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.g-hub {
  color: #444;
  font-size: 0.9em;
}

.buttons-wrapper {
  max-width: 200px;
  width: 100%;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.button {
  position: relative;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border: none;
  padding: 40px 7px 5px;
  cursor: pointer;
  background: #fff;
  font-size: 0;
}
.button::before, .button::after {
  content: "";
  position: absolute;
  top: 10px;
  left: 50%;
  border-left: 2px solid #000;
  border-top: 2px solid #000;
  width: 15px;
  height: 15px;
  transform: translate(-45%) rotate(-45deg);
}
.button::after {
  transform: translate(5%) rotate(-45deg);
}

#next::before {
  transform: translate(-90%) rotate(135deg);
}
#next::after {
  transform: translate(-50%) rotate(135deg);
}
#panorama {
    height: 500px;
}
@media only screen and (max-width: 800px) {
    #panorama {
    height: 300px;
}
}
</style>
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset($kendaraan->background)}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h1 class="text-white text-uppercase mb-3 animated slideInDown">{{$kendaraan->subtext1}}</h1>
                                <h5 class="text-white col-lg-10 mb-4 pb-3 animated slideInDown">{{$kendaraan->subtext2}}</h5>
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="d-flex justify-content-around">
        <a href="#lineup" class="h5 text-muted">LINEUP</a>
        <a href="#eksterior" class="h5 text-muted">EKSTERIOR</a>
        <a href="#interior" class="h5 text-muted">INTERIOR</a>
        <a href="#preview" class="h5 text-muted">36O PREVIEW</a>
        <a href="#safety" class="h5 text-muted">SAFETY</a>
        <a href="#performance" class="h5 text-muted">PERFORMANCE</a>
        <a href="#aksesoris" class="h5 text-muted">AKSESORIS</a>
    </div>

    <h1 class="mt-5">LINEUP</h1>
        <div id="lineup" class="row">
          @foreach ($lineup as $item)
            <div class="col-md-3">
                @foreach ($item->lineup_warna as $idx => $img)
                    <img style="width: 100%; height: 150px;" id="mobil-{{$idx}}" class="mobil {{$idx != 0 ? 'd-none' : 'd-block'}}" src="{{asset($img->gambar)}}" alt="">
                @endforeach
                <h5>{{$item->nama}}</h5>
                <div class="d-flex align-items-center gap-1">
                    @foreach ($item->lineup_warna as $idx => $warna)
                    <div onclick="ubahMobil({{$idx}})" style="width: 30px; height: 30px; background-color:{{$warna->kode_warna}}; "></div>
                    @endforeach
                    
                </div>
                <p class="mt-3 mb-0">Mulai dari</p>
                <h3 class="mt-0 pt-0">{{$item->harga}}</h3>
                <a href="https://wa.me/{{getSetting()->whatsapp}}" class="btn btn-outline-dark">KONSULTASI PEMBELIAN</a>
                
            </div>
           @endforeach
        </div>


    <h1 class="mt-5">EKSTERIOR</h1>
        <div id="eksterior" class="owl-carousel carousel-a my-5 owl-theme">
            @foreach ($exterior as $item)
            <div style="">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%; height: 300px; object-fit: contain;" src="{{asset($item->gambar)}}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>{{$item->judul}}</h3>
                        <p class="mt-4">{{$item->deskripsi}}</p>
                        <button class="btn btn-dark">CARI DEALER</button>
                    </div>
                </div>
                
            </div>
            @endforeach    
        </div>

        <h1 class="mt-5">INTERIOR</h1>
        <div id="interior" class="owl-carousel carousel-a my-5 owl-theme">
            @foreach ($interior as $item)
            <div style="">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%; height: 300px; object-fit: contain;" src="{{asset($item->gambar)}}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>{{$item->judul}}</h3>
                        <p class="mt-4">{{$item->deskripsi}}</p>
                        <button class="btn btn-dark">CARI DEALER</button>
                    </div>
                </div>
                
            </div>
            @endforeach    
        </div>

        <h1 class="mt-5">360 PREVIEW</h1>
        <nav id="preview">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Eksterior</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Interior</button>
            </div>
          </nav>


          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="wrapper">
                    <p>Drag, use keyboard arrows (&larr; & &rarr;) or click to rotate image.</p>
                      <div id="threesixty"></div>
                    <div class="buttons-wrapper">
                      <button class="button" id="prev">Prev</button>
                      
                        <button class="button" id="next">Next</button>
                    </div>
                  </div>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div style="width: 100%;" id="panorama"></div>
            </div>
 
          </div>


        

          

        <h1 class="mt-5">SAFETY</h1>
        <div id="safety" class="owl-carousel carousel-a my-5 owl-theme">
            @foreach ($safety as $item)
            <div style="">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%; height: 300px; object-fit: contain;" src="{{asset($item->gambar)}}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>{{$item->judul}}</h3>
                        <p class="mt-4">{{$item->deskripsi}}</p>
                        <button class="btn btn-dark">CARI DEALER</button>
                    </div>
                </div>
                
            </div>
            @endforeach    
        </div>

        <h1 class="mt-5">PERFORMANCE</h1>
        <div id="performace" class="owl-carousel carousel-a my-5 owl-theme">
            @foreach ($performance as $item)
            <div style="">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%; height: 400px; object-fit: contain;" src="{{asset($item->gambar)}}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>{{$item->judul}}</h3>
                        <p class="mt-4">{{$item->deskripsi}}</p>
                        <button class="btn btn-dark">CARI DEALER</button>
                    </div>
                </div>
                
            </div>
            @endforeach    
        </div>

        <h1>AKSESORIS</h1>

        <div id="aksesoris" class="owl-carousel owl-theme">
            @foreach ($aksesoris as $item)
                <div>
                    <img style="width: 100%; height: 200px; object-fit: cover;" src="{{asset($item->gambar)}}" alt="">
                    <h5 class="mt-3">{{$item->nama}}</h5>
                    <p>{{$item->harga}}</p>
                </div>
            @endforeach
        </div>


    </div>

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@mladenilic/threesixty.js/dist/threesixty.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <script>
        $('.carousel-a').owlCarousel({
    loop:false,
    dots: true,
    margin:10,
    nav:true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('#aksesoris').owlCarousel({
    loop:false,
    dots: true,
    margin:10,
    nav:true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }

    }
})

function ubahMobil(idx){
    document.querySelectorAll('.mobil').forEach(e=>{
        e.classList.remove('d-block')
        e.classList.add('d-none')
    })
    document.querySelector('#mobil-'+idx).classList.remove('d-none')
    document.querySelector('#mobil-'+idx).classList.add('d-block')
}

const threesixty = new ThreeSixty(document.getElementById('threesixty'), {
  image: '{{asset($kendaraan->foto_exterior)}}',
  width: 320,
  height: 320,
  count: '{{$kendaraan->isi_foto_exterior}}',
  perRow: 4,
  speed: 250,
  prev: document.getElementById('prev'),
  next: document.getElementById('next')
});

threesixty.play();
    </script>

<script>
    pannellum.viewer('panorama', {
        "type": "equirectangular",
        "panorama": "{{asset($kendaraan->foto_interior)}}",
        "autoLoad": true,
    });
    </script>
@endsection