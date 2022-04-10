   <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>ghaenm editor</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="{{route('admin.home')}}"><i class="fas fa-tachometer-alt"></i> control panal </a>
            </li>
            <li>
                <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i> الأعضاء</a>
                <ul class="collapse list-unstyled" id="user">
                    <li>
                        <a href="{{route('admin.user.create')}}"><i class="far fa-plus-square"></i> add user </a>
                    </li>
                    <li>
                        <a href="{{route('admin.user.index')}}"><i class="fas fa-globe"></i>view all users </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#admin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-shield"></i>  الإداريين </a>
                <ul class="collapse list-unstyled" id="admin">
                    <li>
                        <a href="{{route('admin.user.index')}}"><i class="far fa-plus-square"></i>  add admin </a>
                    </li>
                    <li>
                        <a href="{{route('admin.user.create')}}"><i class="fas fa-globe"></i>  view all admins </a>
                    </li>
                </ul>
            </li>




        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}" target="_blank"> view web site <i class="fas fa-globe"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{ route('logout') }}"

                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}



                                <i class="fas fa-sign-out-alt"></i> </a>
                        </li>



                    </ul>
                </div>
                <img class="pro-img" src="{{ asset('images/profile.png') }}" alt="">
            </div>
        </nav>
