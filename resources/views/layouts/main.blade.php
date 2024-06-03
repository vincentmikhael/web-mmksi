<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{getSetting()->title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{getSetting()->meta_deskripsi}},{{getSetting()->meta_sitename}},{{getSetting()->meta_title}}" name="keywords">
    <meta content="{{getSetting()->meta_deskripsi}}" name="description">
    <meta property="og:site_name" content="{{getSetting()->sitename}}">
    <!-- Favicon -->
    <link href="{{asset(getSetting()->favicon)}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" integrity="sha512-GQz6nApkdT7cWN1Cnj/DOAkyfzNOoq+txIhSEK1G4HTCbSHVGpsrvirptbAP60Nu7qbw0+XlAAPGUmLU2L5l4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('css')
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        .text-nav-bottom{
            width: 150px;
            text-align: center;
        }
        .fixed-bottom{
            margin-bottom: 65px;
        }
        .wrapper-bottom{
            border-radius: 50px;
        }
        @media only screen and (max-width: 800px) {
            .text-nav-bottom{
            width: 50px;
            font-size: 12px;
        }
        .fixed-bottom{
            margin-bottom: 0px;
        }
        .wrapper-bottom{
            border-radius: 0px;
        }
        .back-to-top{
            margin-bottom: 60px !important;
            margin-right: -30px !important;
        }
        .footer{
            margin-bottom: 85px;
        }
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <nav style="border-bottom: 3px solid #D81324" class="navbar navbar-expand-lg bg-dark navbar-dark shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img style="width: 65px; height: 65px; object-fit: cover;" src="{{asset(getSetting()->icon)}}" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Tentang kami</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/tentang-kami/sejarah-perusahaan" class="dropdown-item">Sejarah perusahaan</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <div data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#exampleModal" class="nav-link active">Kendaraan</div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">After sales</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/aftersales/maintenance" class="dropdown-item d-flex align-items-center gap-5">
                            <img style="width: 100px;" src="https://static.mitsubishi-motors.co.id/assets/img/aftersales-service-thumb-21102022.jpg" alt="">
                            <h5>Maintenance</h5>
                        </a>
                        <a href="/aftersales/bodicat" class="dropdown-item d-flex align-items-center gap-5">
                            <img style="width: 100px;" src="https://static.mitsubishi-motors.co.id/assets/img/body-paint-menu-thumb.jpg" alt="">
                            <h5>Bodi & Cat</h5>
                        </a>
                        <a href="/aftersales/aksesoris" class="dropdown-item d-flex align-items-center gap-5">
                            <img style="width: 100px;" src="https://bosowaberlian.co.id/mitsubishi/wp-content/uploads/2023/01/aftersales-aksesoris-1030x579.webp" alt="">
                            <h5>Aksesoris</h5>
                        </a>
                        <a href="/aftersales/sparepart" class="dropdown-item d-flex align-items-center gap-5">
                            <img style="width: 100px;" src="https://static.mitsubishi-motors.co.id/assets/img/sparepart-thumb-21102022.jpg" alt="">
                            <h5>Sparepart</h5>
                        </a>
              
                    </div>
                </div>
                <a href="/berita?kategori=Promosi" class="nav-item nav-link active">Promosi</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Berita & kegiatan</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/berita?kategori=Berita" class="dropdown-item">Berita</a>
                        <a href="/berita?kategori=Siaranpers" class="dropdown-item">Siaran pers</a>
                    </div>
                </div>
            </div>
            <a href="/dealer" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">CARI DEALER<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
              <h3>Passenger Car</h3>
              <div class="row">
                    @foreach (getKendaraan2() as $item)
                        <div class="col-6 col-md-3">
                            <a href="/produk/kendaraan/{{$item->slug}}">
                            <div class="d-flex justify-content-center">
                                <img class="" style="object-fit: contain; width: 80%; height: 280px;" src="/{{$item->gambar}}" alt="">
                            </div>
                                <div class="text-center">
                                    <h5 class="text-dark">{{$item->nama}}</h5>
                                    <small style="color: rgb(133, 133, 133)">Mulai dari {{$item->harga}}</small>
                                </div>
                            </a>
                                <div class="d-flex justify-content-center mt-4 mb-5">
                                    <a href="https://wa.me/{{getSetting()->whatsapp}}" class="btn btn-outline-dark">
                                        <p class="my-0">Konsultasi pembelian</p></a> 
                                </div>
                
                        </div>
                    @endforeach
              </div>

              <h3 class="mt-5">Light Commercial Vehicle</h3>
              <div class="row">
                @foreach (getKendaraan1() as $item)
                    <div class="col-6 col-md-3">
                        <a href="/produk/kendaraan/{{$item->slug}}">
                        <div class="d-flex justify-content-center">
                            <img class="" style="object-fit: contain; width: 80%; height: 280px;" src="/{{$item->gambar}}" alt="">
                        </div>
                            <div class="text-center">
                                <h5 class="text-dark">{{$item->nama}}</h5>
                                <small style="color: rgb(133, 133, 133)">Mulai dari {{$item->harga}}</small>
                            </div>
                        </a>
                            <div class="d-flex justify-content-center mt-4 mb-5">
                                <a href="https://wa.me/{{getSetting()->whatsapp}}"  class="btn btn-outline-dark">
                                    <p class="my-0">Konsultasi pembelian</p></a> 
                            </div>
            
                    </div>
                @endforeach
          </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Navbar End -->

    @yield('content')

    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">

                            <div class="py-5">
                                <h1 class="text-white mb-4">CALL TO ACTION</h1>
                                <p class="text-white mb-0">Kami siap membantu Anda. Biarkan kami membantu menemukan solusi transportasi yang tepat untuk kebutuhan Anda.</p>
                            </div>
                            <div class="row g-3">
                         
                                <div class="col-12">
                                    <a href="/dealer" class="btn btn-light w-100 py-3" type="submit">Cari dealer</a>
                                </div>
                                <div class="col-12">
                                    <a href="/kontak" class="btn btn-outline-light w-100 py-3" type="submit">Hubungi kami</a>
                                </div>
                            </div>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-bottom">
        <div class="container bg-dark py-3 wrapper-bottom d-flex justify-content-around align-items-center">
            <a href="/dealer" class="text-white text-nav-bottom d-flex align-items-center gap-2 flex-column flex-md-row"> <i class="fas fa-map-marker-alt"></i> Cari Dealer</a>
            <a href="/list-brosur" class="text-white text-nav-bottom d-flex align-items-center gap-2 flex-column flex-md-row"><i class="fas fa-download"></i>Download Brosur</a>
            <a href="/test-drive" class="text-white text-nav-bottom d-flex align-items-center gap-2 flex-column flex-md-row"><i class="fas fa-car"></i>Test Drive</a>
            <a href="/#carousel-kendaraan" class="text-white text-nav-bottom d-flex align-items-center gap-2 flex-column flex-md-row"><i class="fas fa-list"></i>Price List</a>
        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; All Right Reserved.

                    </div>
                    
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                                <a href="{{getSetting()->instagram}}"><i class="fab fa-instagram"></i></a>
                                <a href="{{getSetting()->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{getSetting()->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{getSetting()->youtube}}"><i class="fab fa-youtube"></i></a>
                                <a href="{{getSetting()->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="https://wa.me/{{getSetting()->whatsapp}}" class="btn btn-lg btn-primary mb-4 btn-lg-square back-to-top"><i class="fab fa-whatsapp"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    @yield('js')
</body>

</html>