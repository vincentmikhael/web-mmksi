@extends('layouts/dashboard')
@section('url','Kendaraan')
@section('title','Manajemen kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Kategori kendaraan</label>
                    <select name="kategori" required class="form-select">
                        <option value="Passenger Car" selected>Passenger Car</option>
                        <option value="Light Commercial Vehicle">Light Commercial Vehicle</option>
                    </select>
                    <label for="">Nama kendaraan</label>
                    <input type="text" required class="form-control" name="nama">
                    <label for="">Harga mulai</label>
                    <input type="text" required onkeyup="inputRp(this,'Rp')" class="form-control" name="harga">
                    <label for="">Gambar kendaraan</label> <br>
                    <small>*Rekomendasi gambar horizontal (ex. 648x280, dll)</small>
                    <input type="file" required class="form-control" name="gambar">
                    <label for="">Gambar background</label>
                    <input type="file" required class="form-control" name="background">
                    <label for="">Gambar background thumbnail</label>
                    <input type="file" required class="form-control" name="background_thumbnail">
                    <label for="">Sub text 1</label>
                    <input type="text" required class="form-control" name="subtext1">
                    <label for="">Sub text 2</label>
                    <input type="text" required class="form-control" name="subtext2">
                    <label for="">Link 360 exterior</label> <small>Link iframe <a href="https://sirv.com">Sirv</a>. <br> 
                    <input type="text" placeholder="<iframe...." class="form-control" name="foto_exterior">

                    <label for="">Foto 360 interior (foto panorama)</label>
                    <input type="file" class="form-control" name="foto_interior">

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection