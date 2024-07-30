@extends('layouts/dashboard')
@section('url','Brosur')
@section('title','Manajemen brosur')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Tabel brosur</h6>
              </div>
              <div class="card-body px-4 pt-0 pb-2">
                <div class="d-flex justify-content-end">
                    <a href="/brosur/add" class="btn btn-primary">Tambah data</a>
                </div>
                
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                          <th class="text-secondary opacity-7"></th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated by</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($brosur as $item)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="{{asset($item->sampul)}}" class="avatar avatar-sm me-3" alt="user1">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->judul}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>{{$item->kategori}}</td>
         
                          <td class="align-middle">
                            <a href="/brosur/edit/{{$item->id}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit brosur"> Edit </a>
                            <a href="/brosur/delete/{{$item->id}}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete brosur"> Hapus </a>
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