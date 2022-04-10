<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="   ">
    <link href="https:\\fonts.googleapis.com\css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <title></title>
        <!-- Start CSS -->
    <link href="{{ asset('css\bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('css\all.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/photobox.css')}}" rel='stylesheet' type='text/css'>

{{--         <link href="{{ asset('css\vendor\datatable.css') }}" rel="stylesheet" >--}}

    <link href="{{ asset('css\admin\admin.css') }}"  rel="stylesheet" >


        <!-- End Css -->
        <!-- Start Js -->
    <script src="{{ asset('js\bootstrap.bundle.js') }}" ></script>
    <script src="{{ asset('js\popper.js') }}" ></script>
    <script src="{{ asset('js\jQuery.js') }}" ></script>
        <script src="{{ asset('js\vendor\jquery.js') }}"></script>

    <script src="{{ asset('js\bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js\multiple-select.min.js') }}" ></script>
    <script src="{{ asset('js\all.min.js') }}" ></script>

 <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>

    <script src="{{ asset('js\admin.js') }}" ></script>
        <!-- End Js -->
</head>
<body>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
