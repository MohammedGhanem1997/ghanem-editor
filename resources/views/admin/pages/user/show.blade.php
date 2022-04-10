@extends('admin.layout.main')
@include('admin.layout.sidebar')


@section('content')

    <div class="container">
<div class="row">
        @foreach($folders as $folder)
            <div class="col-md-2 p-2">
                <a href="{{route('admin.user.showfolder',['name'=>$folder->name,'id'=>$folder->user_id])}}">
                    <img style="height: 50px;width: 55px" src="{{asset('images/folder.png')}}">

                    <p> {{$folder->name}}</p>
                </a>
            </div>
        @endforeach
    </div>
    <hr>
    <div class='container'>
        <div class="gallery">
            @foreach($images as $image)
                <a href="{{asset($image->url)}}">
                    <img width="250px"  style="height:260px !important;" height="250px" src="{{asset($image->url)}}">
                </a>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>





@endsection
