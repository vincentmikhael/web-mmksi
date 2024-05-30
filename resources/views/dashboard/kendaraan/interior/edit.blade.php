@extends('layouts/dashboard')
@section('url','Interior kendaraan')
@section('title','Manajemen interior kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Edit data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Judul</label>
                    <input type="text" value="{{$interior->judul}}" required class="form-control" name="judul">
                    <label for="">Deskripsi</label>
                    <input type="text" value="{{$interior->deskripsi}}" required class="form-control" name="deskripsi">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="gambar">

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection