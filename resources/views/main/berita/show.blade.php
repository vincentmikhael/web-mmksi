@extends('layouts.main')

@section('content')
{{-- <link rel="stylesheet" href="{{asset('css/isolate-bootstrap.css')}}">
<div class="bootstrap-iso">
<div class="container mt-5 pt-5">
    <p class="mt-3 mb-0 pb-0">{{date('d M Y',strtotime($berita->tanggal))}}</p>
     <h2 class="my-0 py-0">{{$berita->judul}}</h2>
    <div class="d-flex mb-5 mt-4 justify-content-center">
        <img src="{{asset($berita->gambar)}}" alt="">
    </div>
    
    

     {!! $berita->content !!}

     <div class="d-flex justify-content-center gap-3 mt-5">
        <a href="/list-brosur" class="btn btn-danger">DOWNLOAD BROSUR</a>
        <a href="/dealer" class="btn btn-outline-dark">CARI DEALER</a>
     </div>

     <div class="d-flex justify-content-center mt-5">
        <div onclick="copy()" style="border: 1px solid black; border-radius: 50%; padding-top: 12px; padding-bottom: 8px; padding-left: 10px; padding-right: 14px; cursor: pointer;"><i style="font-size: 23px;" class="fa fa-share-alt"></i></div>
     </div>

     

</div>
</div> --}}
<div class="container">
	
    <div class="row">
        
        <div class="ev-sm-12 ev-md-8 center-block text-center">
            <div class="mg-b-30-md mg-b-10-sm">
                <img class="d-none d-md-block" src="{{asset($berita->gambar)}}" alt="">					
                <img class="d-md-none" src="{{asset($berita->gambar)}}" alt="">
            </div> <!--  .mg-b-30-sm -->
        </div> <!--  .ev-sm-12 -->

        <div class="ev-sm-12 ev-md-7 center-block">
            <div class="article">
                
                <label class="tag ev-ib">{{date('d M Y',strtotime($berita->tanggal))}}</label>
                <h1 class="title-primary_medium mg-b-30-sm">{{$berita->judul}}</h1> <!--  .title-primary_medium -->
                
                {!! $berita->content !!}
                
            </div> <!--  .article -->

        </div> <!--  .ev-sm-10 center-block -->
    </div> <!--  .row -->

    <div class="row mg-t-30-sm">
        <div class="ev-sm-12 text-center d-desktop">
            <a href="/list-brosur" class="button button-primary mg-r-10-sm">Download Brosur</a><a href="/dealer" class="button button-outline-secondary">cari dealer</a>
        </div> <!--  .ev-sm-12 -->
        <div class="row-flex flex-col text-center d-mobile">
            <div><a href="/list-brosur" class="button button-primary mg-b-10-sm">Download Brosur</a></div>
            <div><a href="/dealer" class="button button-outline-secondary">cari dealer</a></div>
        </div>
    </div> <!--  .row -->
    <div class="row mg-b-30-md">
        <div class="share">
            <div class="share__wrapper">
<div class="share-button">
  <input class="toggle-input" id="toggle-input" type="checkbox">
  <label for="toggle-input" class="toggle"></label>
  <ul class="network-list">
    <li class="link">
        <div class="copied"></div>
        <a class="copy-to-clipboard" href="javascript:;">Copy</a>
        <input readonly="" type="text" value="{{request()->url()}}">
    </li>
    <li class="twitter">
                        <a href="javascript:;" onclick="popUp=window.open('https://twitter.com/intent/tweet?ref_src=twsrc%5Etfw&amp;text=Mitsubishi+Indonesia+%7C+CARA+PARKIR+PARALEL+MOBIL+MITSUBISHI+MOTORS+BERFITUR+ELECTRIC+PARKING+BRAKE+%7C+Berita&amp;tw_p=tweetbutton&amp;url={{request()->url()}}', 'popupwindow', 'scrollbars=yes,width=600,height=400');popUp.focus();return false">Tweet This!</a>
                </li>
    <li class="facebook">
        <a class="facebook customer share" href="https://www.facebook.com/sharer.php?u={{request()->url()}}" title="Facebook share" target="_blank"></a>      
    </li>
  </ul>
</div>
</div> <!--  .share__wrapper -->				
        </div> <!--  .share -->
    </div> <!--  .row -->
    
</div>
@endsection

@section('js')
    <script>
        function copy(){
            navigator.clipboard.writeText(window.location.href + "/{{$berita->slug}}");
            alert('Copied the text!')
        }
    </script>
@endsection