@extends('layouts/dashboard')
@section('url','Sparepart')
@section('title','Manajemen sparepart')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama</label>
                    <input type="text" required class="form-control" name="nama">
                    <label for="">Kategori sparepart</label>
                    <select required name="kategori_id" class="form-select">
                        <option selected disabled>Pilih kategori</option>
                        @foreach ($kategori as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                    <label for="">Harga</label>
                    <input type="text" required onkeyup="inputRp(this,'Rp')" class="form-control" name="harga">
                    <label for="">Gambar</label>
                    <input type="file" required class="form-control" name="gambar">

                    <div onclick="addRow()" class="btn btn-primary mt-3">Add row</div>
                    <div id="row_link">
                        <div class="row">
                            <div class="col-3">
                                <label for="">Online shop</label>
                                <select required type="number" name="item[0][nama]" class="form-select">
                                    <option value="Shopee" selected>Shopee</option>
                                    <option value="Tokopedia">Tokopedia</option>
                                    <option value="Lazada">Lazada</option>
                                    <option value="Blibli">Blibli</option>
                                    <option value="Bukalapak">Bukalapak</option>
                                </select>
                            </div>
                            <div class="col-9">
                                <label for="">Link</label>
                                <input required type="text" name="item[0][link]" class="form-control">
                            </div>
                        </div>
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
        let i = 1
    function addRow(){
      document.querySelector('#row_link').insertAdjacentHTML('beforeend',
                  `
                  <div class="row">
                            <div class="col-3">
                                <label for="">Online shop</label>
                                <select required type="number" name="item[${i}][nama]" class="form-select">
                                    <option value="Shopee" selected>Shopee</option>
                                    <option value="Tokopedia">Tokopedia</option>
                                    <option value="Lazada">Lazada</option>
                                    <option value="Blibli">Blibli</option>
                                    <option value="Bukalapak">Bukalapak</option>
                                </select>
                            </div>
                            <div class="col-9">
                                <label for="">Link</label>

                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                <input required type="text" name="item[${i}][link]" class="form-control">
                                <button type="button" onclick="deleteRow(this)" class="btn btn-danger my-0">X</button>
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