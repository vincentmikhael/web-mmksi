@extends('layouts.main')

@section('content')
<div class="container mt-5">
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
@endsection

@section('js')
    <script>
        function copy(){
            navigator.clipboard.writeText(window.location.href + "/{{$berita->slug}}");
            alert('Copied the text!')
        }
    </script>
@endsection