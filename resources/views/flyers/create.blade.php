@extends('layouts.app')

@section('content')

    <h2 class="page-header">Are you selling you're house?</h2>

    <div class="card">
        <div class="card-header">
            Complete the form below
        </div>
        <div class="card-body">
            <form role="form" method="POST" action="/flyers" enctype="multipart/form-data">
                @csrf

                <div class="col-sm-8 mx-auto">
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="name" required placeholder="Name of listing">
                    </div>
                    <div class="form-group">
                        <label>Area</label>
                        <input class="form-control" type="text" name="area" required placeholder="Location/Area">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" type="text" name="address" required placeholder="Describe the address of the listing">
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
                    <div class="form-group">
                        <label>Sale price</label>
                        <input class="form-control" type="number" name="price" required placeholder="Value of listing">
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

@endsection
