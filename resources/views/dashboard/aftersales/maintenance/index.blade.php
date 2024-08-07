@extends('layouts/dashboard')
@section('url','Maintenance')
@section('title','Manajemen maintenance')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>Manajemen data</div>
                <div>Last updated by {{$maintenance->updated_by}}</div>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <label for="">Background atas</label>
                    <input type="file" class="form-control" name="gambar">
                    <label for="">Text Heading</label>
                    <input type="text" class="form-control" value="{{$maintenance->text1}}" name="text1">
                    <label for="">Sub Text</label>
                    <input type="text" class="form-control" value="{{$maintenance->text2}}" name="text2"> --}}
                    <label for=""><h5>Content</h5> <p class="text-danger">Dilarang menghapus section!! hanya boleh mengganti text atau gambar (untuk mengganti gambar, pilih gambar klik kanan lalu image properties)</p></label>
                    <button class="btn btn-primary mt-4" type="submit">Submit</button>
                    <label for="">Deskripsi</label>
                    <textarea name="content" id="content" rows="10" cols="80">{{$maintenance->content}}</textarea>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.ckeditor.com/4.22.1/standard-all/ckeditor.js"></script>
    <script>

        CKEDITOR.replace('content', {

        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
        allowedContent: true,
        height: 800,
        extraAllowedContent: '*(*)',
        contentsCss: ['/web/css/51KgPtq4wH92.css','/web/css/I8Woz8PY7grU.css','/web/css/tIZyQWZFYtG7.css'], 
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