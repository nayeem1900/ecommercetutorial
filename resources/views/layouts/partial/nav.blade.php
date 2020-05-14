<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products')}}">Products</a>
                </li>


                <li class="nav-item">

                    <form class="form-inline my-2 my-lg-0" action="{!! route('search') !!}" method="get">
                        {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search Product" name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary"  type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                </li>

            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('carts') }}">

                        <button class="btn-danger">
                            <span class="mt-1">Cart</span>

                            <span class="badge badge-warning">
                            {{App\Cart::totalItems()}}
                            </span>
                        </button>


                    </a>
                </li>

                <!-- Authentication Links -->

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item dropdown">



                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           
                           <img src="{{App\Helpers\ImageHelper::getUserImage(Auth::user()->id)}}" style=width:100px;>
                            {{ Auth::user()->first_name}}{{ Auth::user()->last_name}} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('user.dashboard') }}"
                              >
                                {{ __('My Dashboard') }}
                            </a>


                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest

                  {{--  @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.login') }}">Login</a>
                        </li>
                       --}}{{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li--}}{{-->
                    @endif
                    @if(Auth::guard('admin')->check())
                        <li class="nav-item dropdown">
                            <a id="adminDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('admin')->user()->name }} (ADMIN) <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">
                                <a href="{{route('admin.adminpage')}}" class="dropdown-item">Dashboard</a>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                                    Logout
                                </a>
                                <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
--}}



         {{--  admin--}}
            </ul>



        </div>
    </div>
</nav>