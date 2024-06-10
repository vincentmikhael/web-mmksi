@extends('layouts/dashboard')
@section('url','Cabang Dealer')
@section('title','Manajemen cabang dealer')
@section('content')

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tabel users</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
                <a href="/users/add" class="btn btn-primary">Tambah data</a>
            <table class="table mt-2">
                <tr>
                    <td><h6>Username</h6></td>
                    <td></td>
                </tr>
                @forelse ($users as $item)
                    <tr>
                        <td><p>{{$item->username}}</p></td>
                        <td>
                            <a href="/users/edit/{{$item->id}}" class="btn btn-success">Edit</a>
                            <a href="/users/delete/{{$item->id}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
            </table>
            </div>
          </div>
        </div>
      </div>
      @endsection