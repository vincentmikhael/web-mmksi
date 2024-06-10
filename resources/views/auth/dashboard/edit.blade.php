@extends('layouts/dashboard')
@section('url','Cabang Dealer')
@section('title','Manajemen cabang dealer')
@section('content')

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tambah users</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <form method="POST" action="" class="row" enctype="multipart/form-data">
              @csrf
                <div class="col-md-12">
                  <label for="">Username</label>
                  <input type="text" class="form-control" value="{{$user->username}}" name="username">
                  @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-12">
                          <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                      </div>
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
  
                <div class="col-12 mt-4">
                <button class="btn btn-primary">Submit</button>
                </div> 
              </form>
            </div>
          </div>
        </div>
      </div>

      @endsection