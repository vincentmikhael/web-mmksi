@extends('layouts/dashboard')
@section('url','Test drive')
@section('title','Permintaan test drive')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Permintaan test drive</h6>
              </div>
              <div class="card-body px-4 pt-0 pb-2">
                <div class="d-flex justify-content-end">
                    <a href="/brosur/add" class="btn btn-primary">Tambah data</a>
                </div>
                
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jam</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cabang</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kendaraan</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Telepon</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($testdrive as $item)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->nama}}</h6>
                              </div>
                            </div>
                          </td>
                          <td><h6>{{$item->tanggal}}</h6></td>
                          <td><h6>{{$item->jam}}</h6></td>
                          <td><h6>{{$item->cabang_id}}</h6></td>
                          <td><h6>{{$item->kendaraan_id}}</h6></td>
                          <td><h6>{{$item->no_telp}}</h6></td>
                          <td><h6>{{$item->email}}</h6></td>
                          <td><h6>{{$item->jenis_kelamin}}</h6></td>
    
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
@endsection