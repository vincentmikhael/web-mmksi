@extends('layouts/dashboard')
@section('url','Lineup kendaraan')
@section('title','Manajemen lineup kendaraan')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Tabel lineup</h6>
              </div>
              <div class="card-body px-4 pt-0 pb-2">
                <div class="d-flex justify-content-end">
                    <a href="/kendaraan/{{$id_kendaraan}}/lineup/add" class="btn btn-primary">Tambah data</a>
                </div>
                
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                          <th class="text-secondary opacity-7"></th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated by</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($lineup as $item)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
    
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->nama}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm">{{$item->harga}}</h6>
                          </td>
         
                          <td class="d-flex gap-2 align-items-center">
                            <a href="/kendaraan/{{$id_kendaraan}}/lineup/edit/{{$item->id}}" class=" btn btn-success font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit kendaraan"> Edit </a>
                            <a href="/kendaraan/{{$id_kendaraan}}/lineup/delete/{{$item->id}}" class="btn btn-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete kendaraan"> Hapus </a>
                          </td>
                          <td><h6 class="mb-0 text-sm">{{$item->created_by}}</h6></td>
                          <td><h6 class="mb-0 text-sm">{{$item->updated_by}}</h6></td>
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