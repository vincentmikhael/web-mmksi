@extends('layouts.main')

@section('content')
{{-- https://alamat.thecloudalert.com/api/kabkota/get/ --}}
<div class="container mt-5">
    <form class="row align-items-center">
        <div class="col-2">
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
        <div class="col-2">
            <label for="">Kota/Kabupaten</label>
            <select name="kota" class="form-select" id="">
                <option selected disabled>--Pilih kota</option>
                @foreach ($kota as $item)
                    <option value="{{$item->kota}}">{{$item->kota}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <button class="btn btn-primary">Filter</button>
        </div>
    </form>

    <hr>

    <div class="row">
        @forelse ($dealer as $item)
            <div class="col-4">
                <div class="card">
                    <div class="container mt-4 mb-3">
                        <h3>{{$item->nama}}</h3>
                        <p>{{$item->layanan}}</p>
                        <a href="{{$item->gmaps}}" class="badge bg-danger">Cek google maps</a>
                    </div>

                        <div class="bg-light py-2">
                            <div class="container">
                                <p>Alamat</p>
                                {{$item->alamat}} - {{$item->kota}}
                            </div>
                        </div>

                        <div class="container py-2">
                            <p>Showroom</p>
                            {!! nl2br($item->showroom) !!}
                        </div>

                        <div class="bg-light py-2">
                            <div class="container">
                                <p>Service</p>
                                {!! nl2br($item->service) !!}
                            </div>
                        </div>

                        <div class="container py-2">
                            <p>Telepon</p>
                            {{$item->telepon}}
                        </div>
             
                </div>
            </div>
        @empty
            
        @endforelse
    </div>

</div>
@endsection