@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
    .swiper-container-wrapper--timeline .swiper-slide {
  display: flex;
  background: #fff;
  min-height: 300px;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
}

.swiper-container-wrapper--timeline .swiper-slide .title {
  font-size: 18px;
  opacity: 0;
  transition: 0.5s ease 0.5s;
}
.swiper-container-wrapper--timeline .swiper-slide-active .title {
  opacity: 1;
}
.swiper-container-wrapper--timeline .swiper-pagination-progressbar {
  position: relative;
  margin-bottom: 70px;
  background-color: transparent;
  height: 4px;
  border-bottom: 1px solid #888;
  width: 100%;
}
.swiper-container-wrapper--timeline .swiper-pagination-progressbar-fill {
  background-color: #000;
  height: 3px;
  top: 2px;
}
.swiper-container-wrapper--timeline .swiper-pagination-progressbar:before {
  position: absolute;
  top: 2px;
  height: 3px;
  background-color: #000;
  content: "";
}
.swiper-container-wrapper--timeline .swiper-pagination-progressbar:after {
  position: absolute;
  top: 3px;
  height: 1px;
  background-color: #888;
  content: "";
}
.swiper-container-wrapper--timeline .swiper-pagination-custom {
  position: relative;
  list-style: none;
  margin: 1rem 0;
  padding: 0;
  display: flex;
  line-height: 1.66;
  bottom: 0;
  z-index: 11;
  width: 100%;
  display: flex;
}
.swiper-container-wrapper--timeline .swiper-pagination-custom .swiper-pagination-switch {
  position: relative;
  width: 100%;
  height: 30px;
  line-height: 30px;
  display: block;
}
.swiper-container-wrapper--timeline .swiper-pagination-custom .swiper-pagination-switch .switch-title {
  position: absolute;
  font-weight: 400;
  right: 0;
  font-size: 12px;
  transform: translateX(50%);
  transition: 0.2s all ease-in-out;
  transition-delay: 0s;
  cursor: pointer;
  z-index: 1;
}
.swiper-container-wrapper--timeline .swiper-pagination-custom .swiper-pagination-switch .switch-title:after {
  position: absolute;
  top: calc(100% + 19px);
  right: 50%;
  transform: translateX(50%) translateY(-50%);
  width: 12px;
  height: 12px;
  background: #000;
  border-radius: 2rem;
  content: "";
  transition: 0.2s all ease-in-out;
  transition-delay: 0s;
  z-index: 1;
}
.swiper-container-wrapper--timeline .swiper-pagination-custom .swiper-pagination-switch.active .switch-title {
  font-weight: 400;
  transition-delay: 0.4s;
}
.swiper-container-wrapper--timeline .swiper-pagination-custom .swiper-pagination-switch.active .switch-title:after {
  background: #000;
  width: 25px;
  height: 25px;
  transition-delay: 0.4s;
}
.swiper-container-wrapper--timeline .swiper-pagination-custom .swiper-pagination-switch.active ~ .swiper-pagination-switch .switch-title {
  color: #888;
  font-weight: 16px;
}
.swiper-container-wrapper--timeline .swiper-pagination-custom .swiper-pagination-switch.active ~ .swiper-pagination-switch .switch-title:after {
  background: #888;
}
</style>
<div class="container mt-5">
    {!!$sejarah->content!!}
    

    <div class="container mt-5">
        <div class="swiper-container-wrapper swiper-container-wrapper--timeline">
          <!-- Timeline -->
          <ul class="swiper-pagination-custom">
            @foreach ($sejarah_timeline as $idx => $item)
            <li class='swiper-pagination-switch first {{$idx == 0 ? 'active' : ''}}'><span class='switch-title'>{{$item->tahun}}</span></li>
            @endforeach
            
          </ul>
          <!-- Progressbar -->
          <div class="swiper-pagination swiper-pagination-progressbar swiper-pagination-horizontal"></div>
          <!-- Swiper -->
          <div class="swiper swiper-container swiper-container--timeline">
            <div class="swiper-wrapper">
              <!-- Slides -->
              @foreach ($sejarah_timeline as $idx => $item)
              <div class="swiper-slide"><span class="title">
                <h2>{{$item->tahun}}</h2>
                <div>{{$item->deskripsi}}</div>
                
            </span></div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
</div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function () {
  var mySwiper = new Swiper(".swiper", {
    autoHeight: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    speed: 500,
    direction: "horizontal",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar"
    },
    loop: false,
    effect: "slide",
    spaceBetween: 30,
    on: {
      init: function () {
        $(".swiper-pagination-custom .swiper-pagination-switch").removeClass("active");
        $(".swiper-pagination-custom .swiper-pagination-switch").eq(0).addClass("active");
      },
      slideChangeTransitionStart: function () {
        $(".swiper-pagination-custom .swiper-pagination-switch").removeClass("active");
        $(".swiper-pagination-custom .swiper-pagination-switch").eq(mySwiper.realIndex).addClass("active");
      }
    }
  });
  $(".swiper-pagination-custom .swiper-pagination-switch").click(function () {
    mySwiper.slideTo($(this).index());
    $(".swiper-pagination-custom .swiper-pagination-switch").removeClass("active");
    $(this).addClass("active");
  });
});

    </script>
@endsection