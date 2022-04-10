@include('layouts.include.header')
<body>
    <div id="app">

        @include('layouts.include.nav')



        <main class="py-4">
            @yield('content')
        </main>
    </div>
@include('layouts.include.footer')
