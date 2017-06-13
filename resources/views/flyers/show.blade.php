@extends('layouts.master')

@section('content')
    <div class="col-md-4">
        <h1 class="page-header">{!! $flyer-> name !!}</h1>
        <h5>
            <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $flyer-> area}} 
            <i> Posted </i> <b>{{ $flyer->created_at->diffForHumans() }}</b>
        </h5>
        <h2>{!! $flyer->price !!}</h2>

        <div class="description">{!! nl2br($flyer->description) !!}</div>
    </div>
    
    <div class="col-md-8">
        @if(count($flyer->photo) == 0)
            <div class="row" style="margin-top:20px;">
                <h4 style="align:center;margin-left:100px;">No images for this listing</h4>
            </div>
        @else
            @foreach ($flyer->photo->chunk(4) as $set)
                <div class="row" style="margin-top:20px;">
                    @foreach ($flyer->photo as $photo)
                        <img src="/{{ $photo -> thumbnail_path }}" alt=""/>
                    @endforeach
                </div>
            @endforeach
        @endif
    </div>

    @if(Auth::check())
        @if($flyer->ownedBy(Auth::user()))
        <div class="col-lg-12">
            <h3>Add your photos here</h3>
            <form id="addPhotosForm" 
                    action="{{ route('store_photo_path', [$flyer->area, $flyer->address]) }}" 
                    method="POST" class="dropzone">
                {{ csrf_field() }}
            </form>
        </div>
        @endif
    @endif

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