@extends('layouts/main')

@section('content')
<link rel="stylesheet" href="{{asset('css/isolate-bootstrap.css')}}">
<div class="bootstrap-iso">
    <div class="container my-5 pt-5">
        <h6 class="mt-4">Form pengajuan lamaran</h6>
        <h3>{{$karir->pekerjaan}}</h3>

        @if(Session::has('success'))
        <p class="alert bg-success text-white">{{ Session::get('success') }}</p>
      @endif

        <form action="" method="POST" class="mt-4" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="karir_id" value="{{$karir->id}}">
                    <label for="">Posisi</label>
                    <input type="text" readonly value="{{$karir->pekerjaan}}" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="">Perusahaan</label>
                    <input type="text" readonly value="{{$karir->perusahaan}}" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="">Nama lengkap</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="">Nomor telepon</label>
                    <input type="number" name="no_telp" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="">Sumber informasi lowongan</label>
                    <select required class="form-control" name="sumber_informasi" id="">
                        <option value="" selected disabled>Pilih sumber lowongan</option>
                        <option value="Kompas">Kompas</option>
  <option value="Media Indonesia">Media Indonesia</option>
  <option value="Lowongan Kerja">Lowongan Kerja</option>
  <option value="JOB STREET">JOB STREET</option>
  <option value="Jobs DB">Jobs DB</option>
  <option value="Facebook">Facebook</option>
  <option value="Instagram">Instagram</option>
  <option value="WhatsApp">WhatsApp</option>
  <option value="Linkedin">Linkedin</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">Gaji diharapkan</label>
                    <input required type="text" onkeyup="inputRp(this,'Rp')" class="form-control" name="gaji_diharapkan" id=""/>
                </div>
                <div class="col-md-6">
                    <label for="">Gaji sebelumnya</label>
                    <input type="text" placeholder="Opsional" onkeyup="inputRp(this,'Rp')" class="form-control" name="gaji_sebelumnya" id=""/>
                </div>
                <div class="col-md-6">
                    <label for="">Fasilitas diharapkan</label>
                    <input required type="text" class="form-control" name="fasilitas_diharapkan" id=""/>
                </div>
                <div class="col-md-6">
                    <label for="">Fasilitas sebelumnya</label>
                    <input type="text" placeholder="Opsional" class="form-control" name="fasilitas_sebelumnya" id=""/>
                </div>
                <div class="col-md-6">
                    <label for="">Lokasi kerja</label>
                    <select required name="lokasi_kerja" class="form-control" id="">
                        <option value="" selected disabled>--Pilih lokasi</option>
                        @foreach (explode(',',$karir->tempat) as $item)
                            <option value="{{$item}}">{{$item}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">CV</label>
                    <input required type="file" class="form-control" name="cv">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-dark w-100 mt-5 ">Kirim</button>
                </div>
            </div>
            
            
            
            

        </form>
    </div>
</div>
@endsection