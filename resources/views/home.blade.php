@extends('layouts.app')

@section('content')

    <div id="base" class="col-lg-12">
        <h3 class="page-header">Welcome, Please click the button to create a new flyer.</h3><br/>
        <a  href="/flyers/create" class="btn btn-primary">Create flyer</a>

        <!-- <ul>
            <li v-for="name in names" v-text="name"></li>
        </ul> -->
    </div>

    <!-- <script>
    new Vue({
        el: "#base",
        data: {
            names: ['Jane', 'John']
            }
    });

    </script> -->

@endsection