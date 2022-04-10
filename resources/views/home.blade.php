@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

<div class="row">
        @foreach(\App\Models\Folder::where('user_id',auth()->user()->id)->get() as $folder)
            <div class="col-md-2 p-2">
              <a href="{{route('folder.show',$folder->name)}}">
                <img style="height: 50px;width: 55px" src="{{asset('images/folder.png')}}">

                  <p> {{$folder->name}}</p>
                </a>
            </div>
        @endforeach
</div>
        <hr>
                        <div class='container'>
                            <div class="gallery">

                                @foreach(\App\Models\Gallery::where('User_id',auth()->user()->id)->where('folder_id',null)->get() as $image)
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
