@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="row">

                    <div class="col-md-2 p-2">
                        <a href="#">
                            <img height="60px" src="{{asset('images/open-folder.png')}}">

                            <p> {{$folder->name}}</p>
                        </a>
                    </div>

            </div>
            <hr>
            <div class='container'>
                <div class="gallery">

                    @foreach($folder->images as $image)
                        <a href="{{asset($image->url)}}">
                            <img style="height:260px !important;" height="250px" src="{{asset($image->url)}}">
                        </a>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>

@endsection
