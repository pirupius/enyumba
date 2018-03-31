@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">Are you selling you're house?</h1>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Complete the form below
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="POST" action="/flyers" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" name="name" required placeholder="Name of listing">
                                </div>
                                <div class="form-group">
                                    <label>Area</label>
                                    <input class="form-control" type="text" name="area" required placeholder="Location/Area name">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="address" required= placeholder="describe the address">
                                </div>
                                <div class="form-group">
                                    <label>Select district</label>
                                    <select class="form-control" name="district" required>
                                        <option>Kampala</option>
                                        <option>Mukono</option>
                                        <option>Entebbe</option>
                                        <option>Jinja</option>
                                        <option>Wakiso</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sale price</label>
                                    <input class="form-control" type="number" name="price" required placeholder="describe the address">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" type="text" name="description" required rows="3"></textarea>
                                </div>

                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </div>

                            <div class="row">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection