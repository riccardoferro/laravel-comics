@extends('layouts.index')


@section('content')
    <div class="jumbotron">

        <div class="jumbotron-top">
        </div>

        <div class="container-jumbo">
            <span class="title"> 
                    CURRENT SERIES
            </span>
            @if(count($comics) > 0)
                <div class="container70 d-flex-cards">

                    @foreach($comics as $item)
                            <div class="card-rf">
                                <a href="/detail/">
                                    <img src="{{ $item[ 'thumb' ] }}" alt="{{ $item[ 'series'] }}" >
                                    <div>{{ $item[ 'series' ] }}</div>
                                </a>
                            </div>
                    @endforeach
                </div>
            @endif

            <div class="container70 d-flex-center pb-30">
                <span class="text-box ">LOAD MORE</span>
            </div>
        </div>

    </div>

@endsection


