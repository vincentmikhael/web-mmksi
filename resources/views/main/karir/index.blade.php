@extends('layouts/main')

@section('content')
<link rel="stylesheet" href="{{asset('css/isolate-bootstrap.css')}}">
<div class="bootstrap-iso">
<div class="container my-5 py-3">
    <div class="row mt-5 py-5">
        <div class="col-md-12">
            <div class="card border-none border-0">
                <div class="card-body p-3 border-none border-0">
                    <h6>Filter</h6>

                    <form action="" method="">
                        <label for="">Pencarian</label>
                        <input type="text" name="pekerjaan" class="form-control">

                        <label for="">Perusahaan</label>
                        <select name="perusahaan" class="form-control" id="">
                            <option value="">-- Pilih perusahaan</option>
                            @foreach ($perusahaan as $item)
                                <option value="{{$item->perusahaan}}">{{$item->perusahaan}}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-dark mt-4">Cari</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                @foreach ($karir as $item)
                <div class="col-md-4 py-3">
                    <div href="/list-karir/{{$item->slug}}" class="card h-100 text-dark">
                        <div class="card-body p-3">
                            <h5>{{$item->pekerjaan}}</h5>
                            <small>  {{$item->perusahaan}}</small> <br><br>
                            <small class="my-4">{{$item->tempat}}</small> <br><br>
                            <div class="font-weight-bold">Kualifikasi</div>

                            <p>{!! nl2br($item->kualifikasi) !!}</p>

                            <a style="text-decoration: none;" href="/list-karir/{{$item->slug}}"><button class="btn btn-dark w-100">Lamar pekerjaan</button></a>
                        </div>
                    </div>
                    
                    
                </div>
                @endforeach

                
                
            </div>
            {{ $karir->links() }}
        </div>
    </div>
</div>
</div>
@endsection