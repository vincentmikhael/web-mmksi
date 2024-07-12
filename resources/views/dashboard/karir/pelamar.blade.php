@extends('layouts/dashboard')
@section('url','Karir')
@section('title','Manajemen karir')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>lowongan {{$master_karir->pekerjaan}}</h6>
                <div>{{$master_karir->perusahaan}}</div>
              </div>
              <div class="card-body px-4 mt-5 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No telepon</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lokasi kerja</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gaji diharapkan</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gaji sebelumnya</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fasilitas diharapkan</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fasilitas sebelumnya</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CV</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($karir as $item)
                        <tr>
                          <td><h6 class="mb-0 text-sm">{{$item->nama}}</h6></td>
                          <td><h6 class="mb-0 text-sm">{{$item->no_telp}}</h6></td>
                          <td><h6 class="mb-0 text-sm">{{$item->email}}</h6></td>
                          <td><h6 class="mb-0 text-sm">{{$item->lokasi_kerja}}</h6></td>
                          <td><h6 class="mb-0 text-sm">{{$item->gaji_diharapkan}}</h6></td>
                          <td><h6 class="mb-0 text-sm">{{$item->gaji_sebelumnya}}</h6></td>
                          <td><h6 class="mb-0 text-sm">{{$item->fasilitas_diharapkan}}</h6></td>
                          <td><h6 class="mb-0 text-sm">{{$item->fasilitas_sebelumnya}}</h6></td>
                          <td> <a download="" class="btn btn-primary" href="{{asset($item->cv)}}">Download cv</a> </td>
                          {{-- <td class="align-middle">
                            <a href="/karir/edit/{{$item->id}}" class="text-success font-weight-bold text-xs" data-toggle="tooltip"> Cek Pelamar </a>
                            <a href="/karir/pelamar/{{$item->id}}" class="text-secondary mx-2 font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit pelamar"> Edit </a>
                            <a href="/karir/delete/{{$item->id}}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete karir"> Hapus </a>
                          </td> --}}
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