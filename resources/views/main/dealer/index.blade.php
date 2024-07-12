@extends('layouts.main')

@section('content')
{{-- https://alamat.thecloudalert.com/api/kabkota/get/ --}}
<link rel="stylesheet" href="{{asset('css/isolate-bootstrap.css')}}">
<div class="bootstrap-iso">
    <br><br><br>
<div class="container mt-5">
    <form class="row align-items-center">
        <div class="col-md-2">
            <label for="">Layanan dealer</label> <br>
            <input type="checkbox" value="Bodi & Cat" name="layanan[]">
                    <label for="">Bodi & Cat</label> <br>
                    <input type="checkbox" value="Sales" name="layanan[]">
                    <label for="">Sales</label> <br>
                    <input type="checkbox" value="Service" name="layanan[]">
                    <label for="">Service</label> <br>
                    <input type="checkbox" value="Suku Cadang" name="layanan[]">
                    <label for="">Suku Cadang</label>
        </div>
        <div class="col-md-2 mt-md-0 mt-4">
            <label for="">Kota/Kabupaten</label>
            <select name="kota" class="form-select" id="">
                <option selected disabled>--Pilih kota</option>
                @foreach ($kota as $item)
                    <option value="{{$item->kota}}">{{$item->kota}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <button class="btn btn-dark">Filter</button>
        </div>
    </form>

    <hr>

    <div class="row mb-5 pb-4">
        @forelse ($dealer as $item)
            <div class="col-md-4 col-6 my-2 my-md-0">
                <div class="card">
                    <div class="container mt-4">
                        <h4>{{$item->nama}}</h4>
                        <p>{{$item->layanan}}</p>
                        <a href="{{$item->gmaps}}" class="btn btn-sm btn-dark">Cek google maps</a>
                    </div>

                        <div class="bg-light py-1">
                            <div class="container">
                                <b>Alamat</b> <br>
                                {{$item->alamat}} - {{$item->kota}}
                            </div>
                        </div>

                        <div class="container py-1">
                            <b>Showroom</b> <br>
                            {!! nl2br($item->showroom) !!}
                        </div>

                        <div class="bg-light py-1">
                            <div class="container">
                                <b>Service</b> <br>
                                {!! nl2br($item->service) !!}
                            </div>
                        </div>

                        <div class="container py-1">
                            <b>Telepon</b> <br>
                            {{$item->telepon}}
                        </div>
             
                </div>
            </div>
        @empty
            
        @endforelse
    </div>

</div>
</div>
@endsection