@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{asset('css/isolate-bootstrap.css')}}">
<div class="bootstrap-iso">
    <br><br>
<div class="container mg-y-40-sm mg-y-80-md pd-x-80-md mt-5 pt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <h1>PILIH JADWAL <br>
            TEST DRIVE</h1>
        </div>
        <div class="col-md-6">
            Dapatkan pengalaman mengemudi mobil impian Anda secara langsung dengan mendaftar test drive. Isi data diri di bawah ini dan tim kami akan menghubungi Anda.
        </div>
    </div>

    @if(Session::has('success'))
        <p class="alert bg-success mt-5 text-white">{{ Session::get('success') }}</p>
      @endif

    <h1 class="mt-5 pt-2">PILIH KENDARAAN</h1>
    <form action="" method="POST">
        @csrf
        <h3 class="text-muted mt-5">Passenger Car</h3>
              <div class="row">
                    @foreach (getKendaraan2() as $item)
                        <div class="col-6 col-md-3">
                            <div class="d-flex justify-content-center">
                                <img class="" style="object-fit: contain; width: 80%; height: 280px;" src="/{{$item->gambar}}" alt="">
                            </div>
                                <div class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" value="{{$item->nama}}" type="radio" name="kendaraan_id" id="{{$item->id}}">
                                        <label class="form-check-label" for="{{$item->id}}">
                                            <h5 class="text-dark">{{$item->nama}}</h5>
                                        </label>
                                      </div>
                                    
        
                                </div>
                        </div>
                    @endforeach
              </div>

              <h3 class="text-muted">Light Commercial Vehicle</h3>
              <div class="row">
                @foreach (getKendaraan1() as $item)
                    <div class="col-6 col-md-3">
                        <div class="d-flex justify-content-center">
                            <img class="" style="object-fit: contain; width: 80%; height: 280px;" src="/{{$item->gambar}}" alt="">
                        </div>
                            <div class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input" value="{{$item->nama}}" type="radio" name="kendaraan_id" id="{{$item->id}}">
                                    <label class="form-check-label" for="{{$item->id}}">
                                        <h5 class="text-dark">{{$item->nama}}</h5>
                                    </label>
                                  </div>
                            </div>            
                    </div>
                @endforeach
          </div>

          <h1 class="mt-5 pt-2">ISI DATA DIRI</h1>

          <div class="row">
            <div class="col-md-6">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="col-md-6">
                <label for="">email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-6">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" id="">
                    <option value="" selected disabled>Pilih</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="">No. Telepeon</label>
                <input type="number" class="form-control" name="no_telp">
            </div>
            <div class="col-md-6">
                <label for="">Pilih Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
            </div>
            <div class="col-md-6">
                <label for="">Jam</label>
                <input type="time" class="form-control" name="jam">
            </div>
            <div class="col-md-6">
                <label for="">Kota Dealer</label>
                <select name="kota" class="form-select" id="kota">
                    <option selected disabled>--Pilih kota</option>
                    @foreach ($kota as $item)
                        <option value="{{$item->kota}}">{{$item->kota}}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="cabang_id" value="0">
            {{-- <div class="col-md-6">
                <label for="">Pilih Dealer</label>
                <select name="cabang_id" class="form-select" id="dealer">
                    <option selected disabled>--Pilih kota</option>
                </select>
            </div> --}}
          </div>
          <button type="submit" class="btn btn-dark mt-4">KIRIM PERMINTAAN TEST DRIVE</button>

    </form>
</div>
</div>

@endsection

@section('js')
    <script>
        document.querySelector('#kota').addEventListener('change',function(e){
            fetch('/api/dealer?kota='+e.target.value).then(e=>{
                return e.json()
            }).then(data=>{
                let el = '<option selected disabled>--Pilih kota</option>'
                data.forEach(z=>{
                    el += `<option value="${z.nama} - ${z.alamat}">${z.nama} - ${z.alamat}</option>`
                })
                document.querySelector('#dealer').innerHTML = el
                console.log(data)
            })
        })
    </script>
@endsection