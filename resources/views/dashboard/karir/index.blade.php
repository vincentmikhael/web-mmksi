@extends('layouts/dashboard')
@section('url','Karir')
@section('title','Manajemen karir')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Tabel karir</h6>
              </div>
              <div class="card-body px-4 pt-0 pb-2">
                <div class="d-flex justify-content-end">
                    <a href="/karir/add" class="btn btn-primary">Tambah data</a>
                </div>
                
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Perusahaan</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tempat</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($karir as $item)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->perusahaan}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->pekerjaan}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->tempat}}</h6>
                              </div>
                            </div>
                          </td>
        
         
                          <td class="align-middle">
                            <a href="/karir/pelamar/{{$item->id}}" class="text-success font-weight-bold text-xs" data-toggle="tooltip"> Cek Pelamar </a>
                            <a href="/karir/edit/{{$item->id}}" class="text-secondary mx-2 font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit karir"> Edit </a>
                            <a href="/karir/delete/{{$item->id}}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete karir"> Hapus </a>
                          </td>
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