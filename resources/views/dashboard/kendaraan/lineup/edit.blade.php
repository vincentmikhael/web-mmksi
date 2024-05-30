@extends('layouts/dashboard')
@section('url','Lineup kendaraan')
@section('title','Manajemen lineup kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama</label>
                    <input type="text" value="{{$lineup->nama}}" required class="form-control" name="nama">
                    <label for="">Harga</label>
                    <input type="text" value="{{$lineup->harga}}" required onkeyup="inputRp(this,'Rp')" class="form-control" name="harga">
                    <button onclick="addRow()" class="btn btn-success mt-4">+Add row</button>
                    <div id="row_lineup" class="">
                        
                        @forelse ($lineup_warna as $idx => $item)
                        <div class="row">
                            <input type="hidden" name="item[{{$idx}}][id]" value="{{$item['id']}}" >
                            <div class="col-6">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="item[{{$idx}}][gambar]">
                            </div>
                            <div class="col-6">
                                <label for="">Kode warna</label>
                                <input type="color" value="{{$item->kode_warna}}" required class="form-control my-0" name="item[{{$idx}}][kode_warna]">
                                   
                                
                            </div>
                        </div>
                        @empty
                        <div class="row">
                            <div class="col-6">
                                <label for="">Foto</label>
                                <input type="file" required class="form-control" name="item[0][gambar]">
                            </div>
                            <div class="col-6">
                                <label for="">Kode warna</label>
                                <input type="color" required class="form-control my-0" name="item[0][kode_warna]">
                                   
                                
                            </div>
                        </div>
                        @endforelse
                    
                </div>
                    

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        let i = {{count($lineup_warna) == 0 ? (count($lineup_warna) + 1) : count($lineup_warna)}}
        function addRow(){
      document.querySelector('#row_lineup').insertAdjacentHTML('beforeend',
                  `
                  <div class="row">
                        <div class="col-6">
                            <label for="">Foto</label>
                            <input type="file" required class="form-control" name="item[${i}][gambar]">
                        </div>
                        <div class="col-6">
                            <label for="">Kode warna</label>
                            <div class="d-flex gap-2">
                                <input type="color" required class="form-control my-0" name="item[${i}][kode_warna]">
                                <button onclick="deleteRow(this)" class="btn btn-danger my-0">x</button>
                            </div>
                            
                        </div>
                    </div>
                  `)
                  i++
    }

    function deleteRow(e){
      e.parentElement.parentElement.parentElement.remove()
    }

    </script>
@endsection