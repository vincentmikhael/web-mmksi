@extends('layouts/dashboard')
@section('url','karir')
@section('title','Manajemen karir')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Edit data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama perusahaan</label>
                    <input type="text" value="{{$karir->perusahaan}}" required class="form-control" name="perusahaan">
                    <label for="">Job Desk</label>
                    <input type="text" value="{{$karir->pekerjaan}}" required class="form-control" name="pekerjaan">
                    <label for="">Penempatan</label> <br>
                    <small>*tambahkan tanda koma (,) untuk data lebih dari satu. (contoh: "Makkasar, Jakarta Mall, Surabaya")</small>
                    <input type="text" value="{{$karir->tempat}}" required class="form-control" name="tempat">
                    <label for="">Kualifikasi</label>
                    <textarea name="kualifikasi" class="form-control">{{$karir->kualifikasi}}</textarea>
                    <br>
                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection