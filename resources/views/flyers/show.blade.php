@extends('layouts.app')

@section('content')

    <h2>{{ $flyer->name }}</h2>
    <h6>
        <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $flyer-> area}}
        <i> Posted </i> <b>{{ $flyer->created_at->diffForHumans() }}</b>
    </h6>
    <h4 class="text-success">{{ $flyer->price }}</h4>

    <div class="description">{{ nl2br($flyer->description) }}</div>

    <div class="col-sm-12 my-3">
        @if(count($flyer->photo) == 0)
            <h4 class="mx-auto">No images for this listing</h4>
        @else
            @foreach ($flyer->photo->chunk(4) as $set)
                @foreach ($flyer->photo as $photo)
                    <img src="/{{ $photo->thumbnail_path }}" alt=""/>
                @endforeach
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
    <script src="{{ asset('js/dropzone.js') }}"></script>
    <script>
        Dropzone.options.addPhotosForm = {
            paramName: 'photo',
            maxFileSize: 2,
            acceptedFiles: '.jpg, .jpeg, .png, .bmp',
        }
    </script>
@stop
