@extends('layouts/dashboard')
@section('url','Performance kendaraan')
@section('title','Manajemen performance kendaraan')
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
                    <textarea name="deskripsi" id="content" rows="10" cols="80"></textarea>
                    <label for="">Foto</label>
                    <input type="file" required class="form-control" name="gambar">

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content', {
        toolbar: [
        { name: 'basicstyles', items: ['FontSize'] },
        { name: 'links', items: ['Link', 'Unlink'] }
    ],
    removeButtons: '',
    removePlugins: 'elementspath',
    resize_enabled: false
    });
</script>
@endsection