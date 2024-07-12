@extends('layouts.main')

@section('content')
<section>
   <div class="masthead__wrapper">
      <!-- Swiper -->
      <div class="swiper-container" id="swiper-homepage">
         <div class="swiper-wrapper">
           @forelse ($banner as $idx => $item)
           <div class="swiper-slide">
               <div class="slider__background swiper-lazy" data-background="{{asset($item->background)}}">
                  <div class="swiper-lazy-preloader"></div>
               </div>
               <!--  .slider__background -->
               <div class="banner__background-responsive swiper-lazy" data-background="{{asset($item->background)}}">
                  <div class="swiper-lazy-preloader"></div>
               </div>
               <!--  .banner__background-responsive -->
               <div class="banner__content banner__content--flex">
                  <div class="banner__content-wrapper mg-b-20-sm mg-b-160-md">
                     @if ($item->link)
                     <a href="{{$item->link}}" class="button button-white button-banner mg-r-20-md mg-b-10-sm mg-b-0-md ev-bl ev-ib-lg">{{$item->text_link}}</a>
                     @endif
                     
                     @if ($item->link2)
                     <a href="{{$item->link2}}" class="button button-white button-banner ev-bl ev-ib-lg">{{$item->text_link2}}</a>
                     @endif
                     
                  </div>
               </div>
               <!--  .banner__content -->
               <div class="banner__overlay"></div>
               <!--  .banner__overlay -->
            </div>
           @empty
               
           @endforelse
            
         </div>
         <!-- Add Pagination -->
         <div class="swiper-pagination" id="swiper-homepage-pagination"></div>
      </div>
   </div>
</section>

<section id="cars" class="tracked-section mg-t-20-sm mg-b-10-sm mg-t-30-md pd-b-40-sm">
   <div class="swiper-container slider slider--cars" data-settings="{
   " autoheight":="" true="" }"="">
   <div class="swiper-wrapper">
       @forelse ($kendaraan as $item)
       <div class="swiper-slide">
           <div class="slider__item">
              <div class="slider__item-wrapper">
                 <div class="slider__item-head mg-b-70-sm mg-b-20-md">
                    <a href="/produk/kendaraan/{{$item->slug}}" class="link-trap learnmorehome_thumbnail"></a>
                    <div class="slider__item-image">
                       <img src="{{$item->gambar}}" srcset="{{$item->gambar}} 1x, {{$item->gambar}} 2x" alt="XFORCE">
                    </div>
                    <div class="slider__item-background">
                       <img src="{{$item->background_thumbnail}}" srcset="{{$item->background_thumbnail}} 1x, {{$item->background_thumbnail}} 2x" alt="">
                    </div>
                 </div>
                 <div class="slider__item-body">
                    <h3>{{$item->nama}}</h3>
                    <p>Mulai dari {{$item->harga}}</p>
                    <a href="/produk/kendaraan/{{$item->slug}}" class="button button-outline-secondary learnmorehome_thumbnail">Selengkapnya</a>
                 </div>
              </div>
           </div>
        </div>
       @empty
           
       @endforelse
      

   </div>
   <div class="swiper-button-prev swiper-cars-button-prev"></div>
   <div class="swiper-button-next swiper-cars-button-next"></div>
   </div>
</section>

<div class="py-5" style="padding-top: 50px; background-color: black;">
   <div id="carousel-youtube" class="owl-carousel my-5 owl-theme container">
       @foreach ($youtube as $item)
       <div>
           <iframe style="width: 100%; aspect-ratio: 16 / 9;" src="{{$item->link}}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
       </div>
       @endforeach    
   </div>
</div>
<section>
   <div class="banner banner--full c-white text-center text-md-left">
      <div class="banner__container">
         <div class="container">
            <div class="row">
               <div class="ev-sm-12 pd-t-20-sm pd-b-15-sm fs-12-sm fs-20-md">
                  MITSUBISHI MOTORS 50th Anniversary
               </div>
            </div>
         </div>
         <div class="border-bottom"></div>
         <div class="container">
            <div class="row">
               <div class="ev-sm-12 pd-t-20-sm pd-b-30-sm">
                  <h2 class="title-primary_large mg-t-70-md">EVERY ADVENTURE IN LIFE IS WONDERFUL</h2>
                  <p class="fs-24-md mg-b-0-md">#TemanSejalan</p>
                  <a href="https://www.mitsubishi-motors.co.id/life-adventure" class="button button-outline-white mg-t-80-sm mg-t-50-md mg-b-100-md mg-b-0-sm">See Our Story</a>
               </div>
            </div>
         </div>
      </div>
      <div class="banner__background d-desktop lazy" data-bg="https://static.mitsubishi-motors.co.id/compress/assets/img/media-banner-desktop.webp" data-bg-hidpi="https://static.mitsubishi-motors.co.id/compress/assets/img/media-banner-desktop@2x.webp"></div>
      <div class="banner__background d-mobile lazy" data-bg="https://static.mitsubishi-motors.co.id/compress/assets/img/media-banner.webp" data-bg-hidpi="https://static.mitsubishi-motors.co.id/compress/assets/img/media-banner@2x.webp"></div>
   </div>
</section>
<section id="promos" class="tracked-section pd-t-35-sm pd-t-50-md pd-b-60-md pd-b-40-sm bg-grey overflow-hidden">
   <div class="container">
      <div class="row">
         <div class="ev-12-sm">
            <h2 class="title-primary_large mg-b-30-sm text-center">PROMOSI</h2>
         </div>
      </div>
      <div class="row">
         <div class="ev-12-sm">
            <div class="card card--clean card--clean-horizontal pd-x-30-sm pd-x-20-md">
               <div class="card__image mg-b-15-sm mg-b-0-md">
                  <img src="{{asset($promo->gambar)}}" srcset="{{asset($promo->gambar)}} 1x, {{asset($promo->gambar)}} 2x" alt="">
               </div>
               <div class="card__content pd-x-20-sm pd-x-0-md pd-l-80-md">
                  <div class="card__meta fs-12-sm fs-16-md c-soft ev-uppercase mg-b-10-sm">
                     <span>{{date('d M Y',strtotime($promo->tanggal))}}</span>
                  </div>
                  <h3 class="card__title fs-20-sm fs-32-md">
                     <a href="/berita/{{$promo->slug}}">{{$promo->judul}}</a>
                  </h3>
                  <p class="c-dark-grey-solid fs-14-sm fs-16-md mg-b-20-sm mg-b-30-md">{{$promo->judul}}</p>
                  <a id="learnmorehome_promo" href="/berita/{{$promo->slug}}" class="button button-underline-secondary">Selengkapnya</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="news-events" class="tracked-section bg-black c-white mg-b-10-sm mg-b-40-md pd-t-40-sm pd-b-40-sm overflow-hidden">
<div class="container">
<div class="row">
<div class="ev-sm-12 text-center">
   <h2 class="title-primary_large mg-b-20-sm">Berita &amp; Kegiatan</h2>
</div>
</div>
<div class="row-flex justify-content-center">
<div class="ev-flex-sm-12 ev-flex-md-10">
   <div class="tab tab--clean">
      <ul class="tab__control">
         <li class="tab-link" data-tab="tab-berita">
            <a href="#tab-berita" class="">Berita</a>
         </li>
         <li class="tab-link" data-tab="tab-acara">
            <a href="#tab-acara" class="active">Kegiatan</a>
         </li>
         <li class="tab-link" data-tab="tab-siaran-pers">
            <a href="#tab-siaran-pers">Siaran Pers</a></li>					
      </ul>
      <div class="tab__list">
         <div class="tab__item" id="tab-berita">
            <div class="swiper-container slider sliders slider--card-clean pd-b-60-md slider-0 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-settings="{
               &quot;breakpoints&quot;: {
                  &quot;640&quot;: {
                     &quot;slidesPerView&quot;: 3,
                     &quot;spaceBetween&quot;: 24
                  }
               }
            }">
               <div class="swiper-wrapper" id="swiper-wrapper-91cab7d39966b2bf" aria-live="polite">
                           @forelse ($berita_list as $item)
                           <div class="swiper-slide" style="width: 374px; margin-right: 20px;" role="group" aria-label="1 / 3">
                     <div class="card card--clean">
                        <div class="card__image card__image--stacked mg-b-60-sm mg-b-0-md">
                           <img src="{{asset($item->gambar)}}" alt="{{$item->judul}}" class="d-mobile">
                           <img src="{{asset($item->gambar)}}" alt="{{$item->judul}}" class="d-desktop">
                        </div>
                        <div class="card__content card__content--stacked">
                           <div class="card__meta">
                              <span>{{date('d M Y',strtotime($item->tanggal))}}</span>
                           </div>
                           <h3 class="card__title c-white">
                              <a href="/berita/{{$item->slug}}">{{$item->judul}}</a>
                           </h3>
                           <a href="/berita/{{$item->slug}}" class="button button-underline-white">Selengkapnya</a>
                        </div>
                     </div>
                  </div>
                           @empty
                               
                           @endforelse
                                          </div>
               <div class="swiper-pagination swiper-pagination--light slider-pagination-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
               <div class="swiper-button-prev swiper-card-button-prev swiper-button-prev--light slider-button-prev-0 swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-91cab7d39966b2bf" aria-disabled="true"></div>
               <div class="swiper-button-next swiper-card-button-next swiper-button-next--light slider-button-next-0" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-91cab7d39966b2bf" aria-disabled="true"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
         </div>

         
         <div class="tab__item active" id="tab-acara">
            <div class="swiper-container slider sliders slider--card-clean pd-b-60-md slider-1 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-settings="{
               &quot;breakpoints&quot;: {
                  &quot;640&quot;: {
                     &quot;slidesPerView&quot;: 3,
                     &quot;spaceBetween&quot;: 24
                  }
               }
            }">
               <div class="swiper-wrapper" id="swiper-wrapper-ee0ee7f6672d75af" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                           @forelse ($promo_list as $item)
                           <div class="swiper-slide" style="width: 374px; margin-right: 20px;" role="group" aria-label="1 / 3">
                     <div class="card card--clean">
                        <div class="card__image card__image--stacked mg-b-60-sm mg-b-0-md">
                           <img src="{{asset($item->gambar)}}" alt="{{$item->judul}}" class="d-mobile">
                           <img src="{{asset($item->gambar)}}" alt="{{$item->judul}}" class="d-desktop">
                        </div>
                        <div class="card__content card__content--stacked">
                           <div class="card__meta">
                              <span>{{date('d M Y',strtotime($item->tanggal))}}</span>
                           </div>
                           <h3 class="card__title c-white">
                              <a href="/berita/{{$item->slug}}">{{$item->judul}}</a>
                           </h3>
                           <a href="/berita/{{$item->slug}}" class="button button-underline-white">Selengkapnya</a>
                        </div>
                     </div>
                  </div>
                           @empty
                               
                           @endforelse
                     
                                          </div>
               <div class="swiper-pagination swiper-pagination--light slider-pagination-1 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
               <div class="swiper-button-prev swiper-card-button-prev swiper-button-prev--light slider-button-prev-1 swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-ee0ee7f6672d75af" aria-disabled="true"></div>
               <div class="swiper-button-next swiper-card-button-next swiper-button-next--light slider-button-next-1" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ee0ee7f6672d75af" aria-disabled="true"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
         </div>

         
         <div class="tab__item" id="tab-siaran-pers">
            <div class="swiper-container slider sliders slider--card-clean pd-b-60-md slider-2 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-settings="{
               &quot;breakpoints&quot;: {
                  &quot;640&quot;: {
                     &quot;slidesPerView&quot;: 3,
                     &quot;spaceBetween&quot;: 24
                  }
               }
            }">
               <div class="swiper-wrapper" id="swiper-wrapper-b7e1a6942bbc4257" aria-live="polite">
                           @forelse ($pers_list as $item)
                           <div class="swiper-slide" style="width: 374px; margin-right: 20px;" role="group" aria-label="1 / 3">
                     <div class="card card--clean">
                        <div class="card__image card__image--stacked mg-b-60-sm mg-b-0-md">
                           <img src="{{asset($item->gambar)}}" alt="{{$item->judul}}" class="d-mobile">
                           <img src="{{asset($item->gambar)}}" alt="{{$item->judul}}" class="d-desktop">
                        </div>
                        <div class="card__content card__content--stacked">
                           <div class="card__meta">
                              <span>{{date('d M Y',strtotime($item->tanggal))}}</span>
                           </div>
                           <h3 class="card__title c-white">
                              <a href="/berita/{{$item->slug}}">{{$item->judul}}</a>
                           </h3>
                           <a href="/berita/{{$item->slug}}" class="button button-underline-white">Selengkapnya</a>
                        </div>
                     </div>
                  </div>
                           @empty
                               
                           @endforelse
                                          </div>
               <div class="swiper-pagination swiper-pagination--light slider-pagination-2 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
               <div class="swiper-button-prev swiper-card-button-prev swiper-button-prev--light slider-button-prev-2 swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b7e1a6942bbc4257" aria-disabled="true"></div>
               <div class="swiper-button-next swiper-card-button-next swiper-button-next--light slider-button-next-2" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b7e1a6942bbc4257" aria-disabled="true"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</section>
<section id="aftersales" class="tracked-section mg-b-10-sm mg-b-40-md">
   <div class="container">
      <div class="row">
         <div class="ev-sm-12 pd-x-10-sm pd-x-20-md">
            <div class="banner banner__secondary pd-x-0-sm mg-y-0-sm">
               <div class="banner__secondary-container">
                  <div class="banner__secondary-content pd-y-40-sm">
                     <div class="row-flex justify-content-md-end">
                        <div class="ev-flex-sm-12 ev-flex-xmd-5 pd-t-190-sm pd-t-70-md pd-b-70-md fs-14-sm fs-16-md">
                           <h2 class="title-primary_large mg-b-10-sm pd-r-40-sm pd-r-0-md">Layanan Purna Jual</h2>
                           <p>Layanan perawatan dan perbaikan kendaraan dilakukan oleh tenaga mekanik yang profesional dengan menggunakan peralatan yang modern.</p>
                           <a id="learnmorehome_aftersalesservice" href="/aftersales/maintenance" class="button button-outline-secondary">Selengkapnya</a>
                        </div>
                     </div>
                  </div>
                  <div class="banner__secondary-background banner__secondary-desktop lazy" data-bg="https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales-banner-desktop-03012022.webp" data-bg-hidpi="https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales-banner-desktop-03012022@2x.webp"></div>
                  <div class="banner__secondary-background banner__secondary-mobile banner-diamond--mobile-image lazy" data-bg="https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales-banner-mobile-03012022.webp" data-bg-hidpi="https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales-banner-mobile-03012022@2x.webp"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="download-apps" class="tracked-section mg-b-10-sm mg-b-40-md">
   <div class="container">
      <div class="row">
         <div class="ev-sm-12 pd-x-10-sm pd-x-20-md">
            <div class="banner banner__secondary pd-x-0-sm mg-y-0-sm">
               <div class="banner__secondary-container">
                  <div class="banner__secondary-content pd-t-35-md pd-y-30-sm pd-y-0-md">
                     <div class="container pd-x-20-sm pd-x-60-md">
                        <div class="row">
                           <div class="d-desktop">
                              <div class="ev-md-7 pd-x-0-sm c-white fs-15-sm fs-22-md">
                                 <h2 class="title-primary_xmedium-mmid mg-b-20-sm mg-b-20-md pd-r-20-sm pd-r-0-md">APLIKASI MY MITSUBISHI MOTORS ID SOLUSI KEBUTUHAN DAN INFORMASI KENDARAAN ANDA</h2>
                                 <!--  .title-primary_large -->
                                 <p class="mg-t-0-sm mg-b-0-md mg-b-250-sm">Akses digital Dokumen Kendaran hingga <br> 
                                    Service History dalam satu genggaman.<br>
                                 </p>
                                 <div class="detail mg-t-0-sm" style="display:flex;">
                                    <img class="mg-b-0-sm mg-t-20-md mg-r-20-md mg-r-20-sm" width="150" height="150" src="/web/images/z4aCzpwVMvBJ.webp" srcset="images/z4aCzpwVMvBJ.webp 2x" alt="App Store">
                                    <div class="detail-info mg-t-30-md fs-10-sm fs-16-md">
                                       <p>Unduh aplikasi My Mitsubishi Motors ID <br> di App Store dan Play Store.</p>
                                       <ul class="product__ads">
                                          <li>
                                             <a href="https://apps.apple.com/us/app/my-mitsubishi-motors-id/id1280830456" target="_blank">
                                             <img class="mg-b-0-sm" width="160" height="48" src="/web/images/CJfi3yXBMMWY.webp" srcset="images/appstore%402x.webp 2x" alt="App Store">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="https://mmksi.com/Download-MMID" target="_blank">
                                             <img class="mg-b-0-sm" width="160" height="49" src="/web/images/MWf32X4vMsUe.webp" srcset="images/googleplay%402x.webp 2x" alt="Google Play">
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="d-mobile">
                              <div class="ev-sm-20 pd-x-0-sm pd-y-0-sm c-white fs-16-sm fs-22-md">
                                 <h2 class="fs-22-sm title-primary_xmedium-mmid mg-b-10-sm mg-b-20-md pd-r-20-sm pd-r-0-md">APLIKASI <br>MY MITSUBISHI MOTORS ID SOLUSI KEBUTUHAN DAN INFORMASI KENDARAAN ANDA</h2>
                                 <!--  .title-primary_large -->
                                 <p class="mg-t-0-sm mg-b-0-md mg-b-20-sm">Akses digital Dokumen Kendaran hingga <br> 
                                    Service History dalam satu genggaman.<br>
                                 </p>
                                 <div class="detail mg-t-0-sm mg-b-350-sm" style="display:flex;">
                                    <img class="mg-b-0-sm mg-t-20-md mg-r-20-md mg-r-20-sm" width="90" height="90" src="/web/images/z4aCzpwVMvBJ.webp" srcset="images/z4aCzpwVMvBJ.webp 2x" alt="App Store">
                                    <div class="detail-info mg-b-50-sm fs-12-sm fs-16-md">
                                       <p>Unduh aplikasi My Mitsubishi Motors ID di App Store dan Play Store.</p>
                                       <ul class="product__ads">
                                          <li>
                                             <a href="https://apps.apple.com/us/app/my-mitsubishi-motors-id/id1280830456" target="_blank">
                                             <img class="mg-b-0-sm" width="100" height="30" src="/web/images/CJfi3yXBMMWY.webp" srcset="images/appstore%402x.webp 2x" alt="App Store">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="http://bit.ly/2XKLaUE" target="_blank">
                                             <img class="mg-b-0-sm" width="100" height="31" src="/web/images/MWf32X4vMsUe.webp" srcset="images/googleplay%402x.webp 2x" alt="Google Play">
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="banner__secondary-background banner__secondary-desktop lazy" data-bg="https://static.mitsubishi-motors.co.id/compress/assets/img/banner/choose_design_desktop.webp" data-bg-hidpi="https://static.mitsubishi-motors.co.id/compress/assets/img/banner/choose_design_desktop.webp"></div>
                  <div class="banner__secondary-background banner__secondary-mobile lazy" data-bg="https://static.mitsubishi-motors.co.id/compress/assets/img/banner/choose_design_mobilephone1.webp" data-bg-hidpi="https://static.mitsubishi-motors.co.id/compress/assets/img/banner/choose_design_mobilephone1.webp"></div>
                  <div class="d-desktop">
                     <div class="overlay overlay__black"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection