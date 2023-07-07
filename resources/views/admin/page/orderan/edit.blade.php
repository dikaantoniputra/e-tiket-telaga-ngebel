@extends('admin.layout.master')

@section('title')
Tambah Buku Pelajaran
@endsection

@push('after-style')
<link href="{{ asset('') }}assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('') }}assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('') }}assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<div class="row row-deck row-cards">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('orderan.update', $orderan) }}" id="form" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('admin.page.orderan.form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')


<!-- Plugins js -->

<script src="{{ asset('') }}assets/libs/quill/quill.min.js"></script>

<!-- Init js-->
<script src="{{ asset('') }}assets/js/pages/form-quilljs.init.js"></script>

<script> 

        ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });


    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }


</script>
@endpush

