@extends('layouts.main')

@section('content')

<section class="section__large">
    <div class="container">
       <br><br>
       <div class="row">
        @forelse ($berita as $item)
        <div class="ev-sm-12 ev-md-4 match" style="height: 427.2px;">
            <a href="/berita/{{$item->slug}}" class="card">
               <div class="card__secondary">
                  <div class="card__secondary-bg">
                     <div class="card__secondary-image" style="background-image:url(' {{$item->gambar}}');"><img src="{{$item->gambar}}" alt="{{$item->judul}}" class="hidden"></div>
                  </div>
                  <div class="card__secondary-content">
                     <label class="tag">{{date('d M Y',strtotime($item->tanggal))}}</label>
                     <h3 class="title-secondary_small fw-medium">{{$item->judul}}</h3>
                  </div>
               </div>
            </a>
         </div>
        @empty
            
        @endforelse

          {{-- <div class="row mg-y-40-sm">
             <div class="ev-sm-12">
                <div class="pagination"><label for=""><span>1</span> of <span>67</span></label><a href="https://www.mitsubishi-motors.co.id/category/news-id?page=2" class="pagination__arrow pagination__arrow-right"><i class="material-icons">keyboard_arrow_right</i></a></div>
             </div>
          </div> --}}
       </div>
    </div>
 </section>
@endsection