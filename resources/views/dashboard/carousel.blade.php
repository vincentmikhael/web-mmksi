 @extends('layouts/dashboard')

 @section('content')
     <!-- End Navbar -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pengaturan banner halaman utama</h6>
              <small>*Rekomendasi ukuran gambar (1920x1080)</small> <br> <br>
              <button onclick="addRow()" class="badge bg-primary">+ Add row</button>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
             <form method="POST" action="/banner" enctype="multipart/form-data">
                @csrf
                <div id="row_banner">
                  @forelse ($banner as $idx => $item)
                  <div class="row">
                    <input type="hidden" name="item[{{$idx}}][id]" value="{{$item->id}}" >
                    <div class="col-md-2">
                      <label for="">Text button 1</label>
                      <input type="text" value="{{$item->text_link}}"  name="item[{{$idx}}][text_link]" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label for="">Link button 1</label>
                      <input type="text" value="{{$item->link}}"  name="item[{{$idx}}][link]" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label for="">Text button 2</label>
                      <input type="text" value="{{$item->text_link2}}"  name="item[{{$idx}}][text_link2]" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label for="">Link button 2</label>
                      <input type="text" value="{{$item->link2}}"  name="item[{{$idx}}][link2]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <label for="">Background banner</label>
                      
                      <div class="d-flex gap-2 align-items-center justify-content-center">
                        <input type="file"  name="item[{{$idx}}][background]" class="form-control">
    
                          <a href="/banner/{{$item->id}}" type="submit" form="deletebanner{{$idx}}" class="btn btn-danger my-0">Delete</a>
        
                      </div>
                  
                    </div>
                    <hr>
                  </div>
                  @empty
                  <div class="row">
                    <input type="hidden" name="item[0][id]" value="">
                    <div class="col-md-2">
                      <label for="">Text Button 1</label>
                      <input type="text" name="item[0][text_link]" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label for="">Link button 1</label>
                      <input type="text" name="item[0][link]" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label for="">Text Button 2</label>
                      <input type="text" name="item[0][text_link2]" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label for="">Link button 2</label>
                      <input type="text" name="item[0][link2]" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <label for="">Background banner</label>
                      <input type="file"  name="item[0][background]" class="form-control">
                    </div>
                    <hr>
                  </div>
                  @endforelse
                  
                 
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                
             </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="mb-0 pb-0">Pengaturan slider youtube</h6>
              <small class="text-muted">ex : https://www.youtube.com/embed/TcMBFSGVi1c?si=Y_yDTaWgthbD_QFa</small> <br>
              <button onclick="addRowYoutube()" class="badge bg-primary">+ Add row</button>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
              <form action="/youtube" method="POST">
                @csrf
                <div id="row_youtube" class="row">
                  @forelse ($youtube as $item)
                  <div class="col-md-6">
                    <label for="">Link Embed youtube</label>
                    <div class="d-flex align-items-center gap-2">
                      <input type="text" value="{{$item->link}}" name="item[]" class="form-control">
                      <button class="btn btn-danger my-0">Del</button>
                    </div>
                    
                  </div>
                  @empty
                  <div class="col-md-6">
                    <label for="">Link Embed youtube</label>
                    <input type="text" required name="item[]" class="form-control">
                  </div>
                  @endforelse
                  
                </div>
                
                <div class="col-md-6 mt-3">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      @endsection

    @section('js')
        
    
  <script>
    let i = {{count($banner) == 0 ? (count($banner) + 1) : count($banner)}}
    function addRow(){
      document.querySelector('#row_banner').insertAdjacentHTML('beforeend',
                  `
                  <input type="hidden" name="item[${i}][id]" value="">
                  <div class="row">

                    <div class="col-md-2">
                      <label for="">Text Button 1</label>
                      <input type="text" name="item[${i}][text_link]" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label for="">Link button 1</label>
                      <input type="text" name="item[${i}][link]" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label for="">Text Button 2</label>
                      <input type="text" name="item[${i}][text_link2]" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label for="">Link button 2</label>
                      <input type="text" name="item[${i}][link2]" class="form-control">
                    </div>

                  <div class="col-md-3">
                    <label for="">Background banner</label>
                    <div class="d-flex gap-2 align-items-center justify-content-center">
                      <input type="file" name="item[${i}][background]" class="form-control">
                    <button type="button" onclick="deleteRow(this)" class="btn btn-danger my-0">X</button>
                      </div>
                    
                  </div>
          
                  <hr></div>
                  `)
                  i++
    }

    function addRowYoutube(){
      document.querySelector('#row_youtube').insertAdjacentHTML('beforeend',`<div class="col-md-6">
                  <label for="">Link Embed youtube</label>
                  <input required type="text" name="item[]" class="form-control">
                </div>`)
    }

    function deleteRow(e){
      console.log(e.parentElement.parentElement.parentElement.remove())
    }
  </script>
  @endsection
</body>

</html>