@extends('layouts.master')

@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">{!! $flyer-> name !!}</h1>
        <h2>{!! $flyer->price !!}</h2>
    </div>
    <div class="col-lg-12">
        <div class="col-md-6">
            <div class="description">{!! nl2br($flyer->description) !!}</div>
        </div>
        <div class="col-md-4">
            @foreach ($flyer->photo as $photo)
                <img src="/{{ $photo -> path }}" alt="" width="100%"/>
            @endforeach
        </div>

        
    </div>

    <div class="col-lg-12">
        <h3>Add your photos here</h3>
        <!--<form id="addPhotosForm" action="/{{ $flyer->area}}/{{ $flyer->address}}/photos" method="POST" class="dropzone">-->
        <form id="addPhotosForm" 
                action="{{ route('store_photo_path', [$flyer->area, $flyer->address]) }}" 
                method="POST" class="dropzone">
            {{ csrf_field() }}
        </form>
    </div>

@endsection

@section('scripts.footer')
    <!--<script src="{{asset('js/dropzone.js')}}"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <script>
        Dropzone.options.addPhotosForm = {
            paramName: 'photo',
            maxFileSize: 2,
            acceptedFiles: '.jpg, .jpeg, .png, .bmp',
        }
    </script>

@stop