@extends('layouts/dashboard')
@section('url','Aksesoris kendaraan')
@section('title','Manajemen aksesoris kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama aksesoris</label>
                    <input type="text" value="{{$aksesoris->nama}}" required class="form-control" name="nama">
                    <label for="">Harga</label>
                    <input type="text" value="{{$aksesoris->harga}}" required onkeyup="inputRp(this,'Rp')" class="form-control" name="harga">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="gambar">

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection