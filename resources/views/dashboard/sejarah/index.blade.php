@extends('layouts/dashboard')
@section('url','Sejarah perusahaan')
@section('title','Manajemen sejarah perusahaan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>Manajemen data</div>
                <small>Last updated by{{$sejarah->updated_by}}</small>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Deskripsi</label>
                    <textarea name="content" id="content" rows="10" cols="80">{{$sejarah->content}}</textarea>

                    <div onclick="addRow()" class="btn btn-primary mt-3">Add row</div>
                    <div id="row_timeline">
                        @forelse ($sejarah_timeline as $idx => $item)
                        <div class="row">
                            <div class="col-3">
                                <label for="">Tahun</label>
                                <input type="number" value="{{$item->tahun}}" name="item[{{$idx}}][tahun]" class="form-control">
                            </div>
                            <div class="col-9">
                                <label for="">Deskripsi</label>
                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                    <input type="text" value="{{$item->deskripsi}}" name="item[{{$idx}}][deskripsi]" class="form-control">
                                    <a href="/sejarah_perusahaan_timeline/{{$item->id}}" type="submit" form="deletebanner{{$idx}}" class="btn btn-danger my-0">Delete</a>
                                </div>
                                
                            </div>
                        </div>
                        @empty
                        <div class="row">
                            <div class="col-3">
                                <label for="">Tahun</label>
                                <input type="number" name="item[0][tahun]" class="form-control">
                            </div>
                            <div class="col-9">
                                <label for="">Deskripsi</label>
                                <input type="text" name="item[0][deskripsi]" class="form-control">
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
<script src="https://cdn.ckeditor.com/4.22.1/full-all/ckeditor.js"></script>
<script>
    let i = {{count($sejarah_timeline) == 0 ? (count($sejarah_timeline) + 1) : count($sejarah_timeline)}}
    function addRow(){
      document.querySelector('#row_timeline').insertAdjacentHTML('beforeend',
                  `
                  <div class="row">
                            <div class="col-3">
                                <label for="">Tahun</label>
                                <input type="number" name="item[${i}][tahun]" class="form-control">
                            </div>
                            <div class="col-9">
                                <label for="">Deskripsi</label>
                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                <input type="text" name="item[${i}][deskripsi]" class="form-control">
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

CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
        on: {
            instanceReady: function (evt) {
                var editor = evt.editor;

                // Track initial content
                var initialContent = editor.getData();

                editor.on('change', function () {
                    var currentContent = editor.getData();

                    // Function to extract image sources from HTML
                    function extractImageSources(html) {
                        var div = document.createElement('div');
                        div.innerHTML = html;
                        var images = div.getElementsByTagName('img');
                        var sources = [];
                        for (var i = 0; i < images.length; i++) {
                            sources.push(images[i].src);
                        }
                        return sources;
                    }

                    var initialImages = extractImageSources(initialContent);
                    var currentImages = extractImageSources(currentContent);

                    // Find deleted images
                    var deletedImages = initialImages.filter(function(src) {
                        return !currentImages.includes(src);
                    });

                    // Handle deleted images
                    if (deletedImages.length > 0) {
                        console.log('Images deleted:', deletedImages);
                        // Perform your logic here
                        // You can make an AJAX call or any other action
                        deletedImages.forEach(function(src) {
                            fetch('{{ route('ckeditor.deleteImage') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    image_src: src
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log('Image deletion handled:', src, data);
                            })
                            .catch(error => {
                                console.error('Error handling image deletion:', src, error);
                            });
                        });
                    }

                    // Update initial content
                    initialContent = currentContent;
                });
            }
        }
    });

</script>
@endsection