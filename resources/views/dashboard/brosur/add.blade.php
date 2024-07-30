@extends('layouts/dashboard')
@section('url','Brosur')
@section('title','Manajemen brosur')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul">
                    <label for="">Sampul</label> <br>
                    <small>*Rekomendasi ukuran gambar 800x1247</small>
                    <input type="file" class="form-control" name="sampul">
                    <label for="">Kategori</label>
                    <select name="kategori" class="form-control" id="">
                        <option value="KENDARAAN PENUMPANG" selected>KENDARAAN PENUMPANG</option>
                        <option value="KENDARAAN NIAGA RINGAN">KENDARAAN NIAGA RINGAN</option>
                    </select>
                    <label for="">File</label>
                    <input type="file" class="form-control" name="link">

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection