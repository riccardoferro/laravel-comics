@extends('layouts.index')


@section('content')

    @dump($comic)
    <div class="jumbotron">

        <div class="jumbotron-top">
        </div>

        <div class="container-jumbo">
            <span class="title"> 
                <h2>{{$comic['title'] }}</h2>
            </span>
       

            <div class="container70 d-flex-center pb-30">
                <a href="/" class="text-box mt-3 "> BACK </a>
            </div>
        </div>

    </div>

@endsection


