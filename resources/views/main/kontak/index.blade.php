@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">KONTAK KAMI</h1>
    <h1>Kantor pusat</h1>
    {!! nl2br(getSetting()->alamat)!!}

    <h1 class="mt-5">Hotline</h1>
    {!! nl2br(getSetting()->hotline)!!}

    <div class="d-flex gap-4 mt-5">
        <a href="{{getSetting()->instagram}}"><i class="fab fa-instagram fa-2x"></i></a>
                                <a href="{{getSetting()->twitter}}"><i class="fab fa-twitter fa-2x"></i></a>
                                <a href="{{getSetting()->facebook}}"><i class="fab fa-facebook-f fa-2x"></i></a>
                                <a href="{{getSetting()->youtube}}"><i class="fab fa-youtube fa-2x"></i></a>
                                <a href="{{getSetting()->linkedin}}"><i class="fab fa-linkedin-in fa-2x"></i></a>
    </div>
</div>
@endsection