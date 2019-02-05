@extends('layouts.app')

@section('content')

    @foreach ($listings as $listing)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        @if (count($listing->photo) > 0)
                            <img src="/{{ $listing->photo->first()->thumbnail_path }}" alt=""/>
                        @else
                            <img src="{{asset('img/home.png')}}" alt="" width="200px"/>
                        @endif
                    </div>
                    <div class="col-sm-8">
                        <h4><a href="{!! $listing->area !!}/{!! $listing->address !!}"> {!! $listing-> name !!} </a></h4>
                        <p>{!! str_limit(nl2br($listing->description), 500) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
