<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">

            <a class="nav-link" id="" href="{{url('/')}}"  ><img height="50px" src="{{asset('images/logo.png')}}"></a>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto pr-2 pl-2">
                <!-- Authentication Links -->

                <li class="nav-item"  style="padding-right: 25px;" >

                    <a class="nav-link" id="createfolder" href="#"  > <img height="50px" src="{{asset('images/add-folder.png')}}">
                        <br> {{ __('create folder') }}</a>


                </li>
                <li class="nav-item"  style="padding-right: 25px;" >

                    <a class="nav-link"  id="uploadimage" href="#"  ><img height="50px" src="{{asset('images/gallery.png')}}"><br> {{ __('upload') }}</a>


                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item" style="padding-right: 25px;">
                            <a class="nav-link"  href="{{ route('login') }}" > <img height="50px" src="{{asset('images/login.png')}}">
                                <br>{{ __('login') }}</a>

                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item" style="padding-right: 25px;">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img height="50px"src="{{asset('images/profile.png')}}"></a>


                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('home') }}">
                                {{ Auth::user()->name }} profile

                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
