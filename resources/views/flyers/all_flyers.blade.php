@extends('layouts.master')

@section('content')

    <div class="wrapper">
        <div class="page-wrapper" style="margin:10px;">
            <div class="row">
                @foreach ($listings as $listing)
                <div class="col-lg-12 well">
                    <div class="col-lg-4">
                        @if (count($listing->photo) > 0)
                            <img src="/{{ $listing->photo->first()->thumbnail_path }}" alt=""/>
                        @else
                            <img src="{{asset('img/home.png')}}" alt="" width="180px"/>
                        @endif
                    </div>
                    <div class="col-lg-8">
                        <h4><a href="{!! $listing->area !!}/{!! $listing->address !!}"> {!! $listing-> name !!} </a></h4>
                        <p>{!! str_limit(nl2br($listing->description), 500) !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection