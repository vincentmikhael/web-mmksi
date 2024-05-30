@extends('layouts/dashboard')
@section('url','Cabang Dealer')
@section('title','Manajemen cabang dealer')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Edit data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama cabang</label>
                    <input type="text" value="{{$cabang->nama}}" required class="form-control" name="nama">
                    <label for="">No Telepon</label>
                    <input type="text" value="{{$cabang->telepon}}" required class="form-control" name="telepon">
                    <label for="">Kota</label>
                    <input type="text" value="{{$cabang->kota}}" required class="form-control" name="kota">
                    <label for="">Alamat</label>
                    <input type="text" value="{{$cabang->alamat}}" required class="form-control" name="alamat">
                    <label for="">Showroom</label>
                    <textarea class="form-control" name="showroom" required>{{$cabang->showroom}}</textarea>
                    <label for="">Service</label>
                    <textarea class="form-control" name="service" required>{{$cabang->service}}</textarea>
                    <label for="">Link google maps</label>
                    <input type="text" required class="form-control" value="{{$cabang->gmaps}}" name="gmaps">
                    <label for="">Layanan</label> <br>
                    <input type="checkbox" {{in_array('Bodi & Cat',explode(', ',$cabang->layanan)) ? 'checked' : ''}} value="Bodi & Cat" name="layanan[]">
                    <label for="">Bodi & Cat</label> <br>
                    <input type="checkbox" {{in_array('Sales',explode(', ',$cabang->layanan)) ? 'checked' : ''}} value="Sales" name="layanan[]">
                    <label for="">Sales</label> <br>
                    <input type="checkbox" {{in_array('Service',explode(', ',$cabang->layanan)) ? 'checked' : ''}} value="Service" name="layanan[]">
                    <label for="">Service</label> <br>
                    <input type="checkbox" {{in_array('Suku Cadang',explode(', ',$cabang->layanan)) ? 'checked' : ''}} value="Suku Cadang" name="layanan[]">
                    <label for="">Suku Cadang</label>
                    <br>
                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection