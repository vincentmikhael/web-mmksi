@extends('layouts/dashboard')
@section('url','Sparepart kategori')
@section('title','Manajemen sparepart kategori')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Edit data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama</label>
                    <input type="text" value="{{$kategori->nama}}" class="form-control" name="nama">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="gambar">

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection