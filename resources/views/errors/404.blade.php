@extends('layouts.app')


@section('content')

    <div class="text-center">
        <div class="jumbotron alert-warning">
            <h1>404 Error. Page Not Found.</h1>
            <h2>You have drifted out to sea, the page you are looking for does not exist.</h2>
            <p><img src="{{url('/images/nicubunu-RPG-map-symbols-Shipwreck-300px.png')}}" alt="Lost at Sea"></p>

            <p><a href="/" class="btn btn-lg" style="color:white; background-color:#794521">
                    <span class="glyphicon glyphicon-send"></span>
                    &nbsp; Back to Safe Sailing </a></p>
        </div>


    </div>



@stop