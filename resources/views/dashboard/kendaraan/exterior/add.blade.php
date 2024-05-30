@extends('layouts/dashboard')
@section('url','Exterior kendaraan')
@section('title','Manajemen exterior kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$id_kendaraan}}" name="id_kendaraan">
                    <label for="">Judul</label>
                    <input type="text" required class="form-control" name="judul">
                    <label for="">Deskripsi</label>
                    <input type="text" required class="form-control" name="deskripsi">
                    <label for="">Foto</label>
                    <input type="file" required class="form-control" name="gambar">

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection