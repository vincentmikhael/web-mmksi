@extends('layouts/dashboard')
@section('url','Kendaraan')
@section('title','Manajemen kendaraan')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Tabel Kendaraan</h6>
              </div>
              <div class="card-body px-4 pt-0 pb-2">
                <div class="d-flex justify-content-end">
                    <a href="/kendaraan/add" class="btn btn-primary">Tambah data</a>
                </div>
                
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori kendaraan</th>
                          <th class="text-secondary opacity-7"></th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated by</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($kendaraan as $item)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              {{-- <div>
                                <img src="{{asset($item->sampul)}}" class="avatar avatar-sm me-3" alt="user1">
                              </div> --}}
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->nama}}</h6>
                              </div>
                            </div>
                          </td>
                          <td><h6 class="mb-0 text-sm">{{$item->kategori}}</h6></td>
         
                          <td class="d-flex gap-2 align-items-center">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  CMS
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/kendaraan/{{$item->id}}/aksesoris">Manajemen Aksesoris</a></li>
                                  <li><a class="dropdown-item" href="/kendaraan/{{$item->id}}/lineup">Manajemen Lineup</a></li>
                                  <li><a class="dropdown-item" href="/kendaraan/{{$item->id}}/interior">Manajemen Interior</a></li>
                                  <li><a class="dropdown-item" href="/kendaraan/{{$item->id}}/exterior">Manajemen Eksterior</a></li>
                                  <li><a class="dropdown-item" href="/kendaraan/{{$item->id}}/safety">Manajemen Safety</a></li>
                                  <li><a class="dropdown-item" href="/kendaraan/{{$item->id}}/performance">Manajemen Performace</a></li>
                                </ul>
                              </div>
                            <a href="/kendaraan/edit/{{$item->id}}" class=" btn btn-success font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit kendaraan"> Edit </a>
                            <a href="/kendaraan/delete/{{$item->id}}" class="btn btn-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete kendaraan"> Hapus </a>
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