@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row">
    @foreach ($brosur as $item)
        <div class="col-md-3">
                <img style="width: 100%;" src="{{$item->sampul}}" alt="">
                <p class="mb-2 pb-0 mt-2">{{$item->judul}}</p>
                <a download href="{{$item->link}}">Unduh</a>
        </div>
    @endforeach
</div>

</div>
@endsection