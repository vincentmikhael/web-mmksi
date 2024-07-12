@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{asset('css/isolate-bootstrap.css')}}">
<br><br><br>
<div class="" style="background-color: black; padding-top: 50px; padding-bottom: 50px;">
    <div class="container text-center">
        <h1 class="title-primary_large c-white">KONTAK KAMI</h1>
    </div>
</div>
<div class="bootstrap-iso">
    

<div class="container mg-y-40-sm mg-y-80-md pd-x-80-md mt-5">
    <h1>Kantor pusat</h1>
    {!! nl2br(getSetting()->alamat)!!}

    <h1 class="mt-5">Hotline</h1>
    {!! nl2br(getSetting()->hotline)!!}

    <div class="footer__social">
        <h2 class="">TETAP TERHUBUNG DENGAN KAMI</h2>
        <ul>
           <li>
              <a href="{{getSetting()->facebook}}" class="social-media" id="facebook-icon" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
           </li>
           <li>
              <a href="{{getSetting()->twitter}}" class="social-media" id="twitter-icon" target="_blank">
              <i aria-hidden="true">
              <img style="margin-bottom: 5px" src="/web/images/sCkJDTl8WevJ.svg" aria-hidden="true" alt="">
              </i>
              </a>
           </li>
           <li>
              <a href="{{getSetting()->linkedin}}" class="social-media" id="instagram-icon" target="_blank">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
           </li>

           <li>
              <a href="{{getSetting()->instagram}}" class="social-media" id="instagram-icon" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
           </li>

           <li>
              <a href="{{getSetting()->youtube}}" class="social-media" id="youtube-icon" target="_blank">
              <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
           </li>
           {{-- <li>
              <a href="javascript:;" data-animation-duration="700" data-fancybox="" data-src="#subscribe"><i class="fa fa-envelope" aria-hidden="true"></i></a>
           </li> --}}
        </ul>
     </div>
</div>
</div>
<br>
@endsection