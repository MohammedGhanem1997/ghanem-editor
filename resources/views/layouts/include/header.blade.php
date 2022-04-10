<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/photobox.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('css/sweetalert2.min.css')}}" rel='stylesheet' type='text/css'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css\all.min.css') }}" rel="stylesheet">

    <!-- Script -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    @if(request()->segment(count(request()->segments()))=='home' ||request()->segment(count(request()->segments()))=='home#')
    <script> var folder_id=''</script>
    @else
        <script> var folder_id="{{isset($folder)?$folder->id:null}}"</script>

    @endif

    <script> const login="{{isset(Auth::user()->name)?true:false }}"</script>
</head>
