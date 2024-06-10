@extends('layouts/dashboard')
@section('content')

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between pb-0">
              <h6>Pengaturan Website</h6>
              <small>Last updated by {{$setting->updated_by}}</small>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
             <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Title website</label>
                        <input type="text" required value="{{$setting->title}}" name="title" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Meta title</label>
                        <input type="text" required value="{{$setting->meta_title}}" name="meta_title" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Meta description</label>
                        <input type="text" required value="{{$setting->meta_deskripsi}}" name="meta_deskripsi" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Meta sitename</label>
                        <input type="text" required value="{{$setting->meta_sitename}}" name="meta_sitename" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Icon Website</label>
                        <input type="file" name="icon" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Favicon tab website</label>
                        <input type="file" name="favicon" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Nomor whatsapp (untuk kontak hubungi kami)</label> <br>
                        <small>*harus diawali dengan 62</small>
                        <input type="number" required value="{{$setting->whatsapp}}" placeholder="62xxxx" name="whatsapp" class="form-control">
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <label for="">Link linkedin</label>
                        <input type="text" required value="{{$setting->linkedin}}" name="linkedin" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Link youtube</label>
                        <input type="text" required value="{{$setting->youtube}}" name="youtube" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Link instagram</label>
                        <input type="text" required value="{{$setting->instagram}}" name="instagram" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Link facebook</label>
                        <input type="text" required value="{{$setting->facebook}}" name="facebook" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Link twitter</label>
                        <input type="text" required value="{{$setting->twitter}}" name="twitter" class="form-control">
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <label for="">Alamat kantor pusat</label>
                        <textarea name="alamat" class="form-control">{{$setting->alamat}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">Hotline</label>
                        <textarea name="hotline" class="form-control">{{$setting->alamat}}</textarea>
                    </div>
                </div>
                
                
                
                
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
             </form>
            </div>
          </div>
        </div>
      </div>

      @endsection