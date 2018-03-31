@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="page-wrapper" style="margin:10px;">
            <!-- <div class="form-group input-group" style="padding-top:5px;padding-bottom:5px;">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div> -->

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