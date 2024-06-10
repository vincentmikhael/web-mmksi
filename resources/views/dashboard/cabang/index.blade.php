@extends('layouts/dashboard')
@section('url','Cabang Dealer')
@section('title','Manajemen cabang dealer')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Data cabang</h6>
              </div>
              <div class="card-body px-4 pt-0 pb-2">
                <div class="d-flex justify-content-end">
                    <a href="/cabang/add" class="btn btn-primary">Tambah data</a>
                </div>
                
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kota</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                          <th class="text-secondary opacity-7"></th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated by</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($cabang as $item)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                 
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->nama}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-2 py-1">
                 
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->kota}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-2 py-1">
                 
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->alamat}}</h6>
                              </div>
                            </div>
                          </td>
         
                          <td class="align-middle">
                            <a href="/cabang/edit/{{$item->id}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit cabang"> Edit </a>
                            <a href="/cabang/delete/{{$item->id}}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete cabang"> Hapus </a>
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