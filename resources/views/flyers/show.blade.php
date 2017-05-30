@extends('layouts.master')

@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">{!! $flyer-> name !!}</h1>
        <h2>{!! $flyer->price !!}</h2>
    </div>
    <div class="col-lg-12">
        <div class="description">{!! nl2br($flyer->description) !!}</div>
    </div>

    <div class="col-lg-12">
        <form action="/{{ $flyer->area}}/{{ $flyer->address}}/photos" method="POST" class="dropzone">
            {{ csrf_field() }}
        </form>
    </div>

@endsection

@section('scripts.footer')
    <!--<script src="{{asset('js/dropzone.js')}}"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@stop