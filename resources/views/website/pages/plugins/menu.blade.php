<nav class="navbar navbar-expand-lg navbar-light bg-white" id="main-menu">
    <a class="navbar-brand" href="home" style="max-width: 40%; ">
        <img src="{{ asset('img/logo/dSewanew.png') }}" alt="" style="max-width: 100px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('about-us')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('pricing')}}">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('training')}}">Training</a>
            </li>
            {{--
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="services" role="button"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Solution & Service
                </a>
                <div class="dropdown-menu" aria-labelledby="services">
                    <a class="dropdown-item" href="{{url('our-service')}}">Our Services</a>
                    <a class="dropdown-item" href="{{url('e-commerce')}}">E-Commerce</a>
                    <a class="dropdown-item" href="{{url('logistics')}}">Logistics</a>
                    <a class="dropdown-item" href="{{url('developer-research-center')}}">Developer Solution Center</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://deliverysewa.wixsite.com/blog"
                   target="_blank"> Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('contact-us')}}"> Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('faq')}}"> FAQ</a>
            </li>--}}
        </ul>
        <div class="pr-3 pull-right">
            @if(Auth::check())
                @if(auth()->user()->hasRole('hub'))
                    <a href="{{ url('hub/profile') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="/logout" class="btn btn-outline-primary">
                        Logout
                    </a>
                @elseif(auth()->user()->hasRole('vendor'))
                    <a href="{{ url('vendor/profile') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="/logout"  class="btn btn-outline-primary">
                        Logout
                    </a>
                @elseif(auth()->user()->hasRole('admin'))
                    <a href="{{ url('admin/profile') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="/logout" class="btn btn-outline-primary">
                        Logout
                    </a>
                @else
                    <a href="{{ route('dashboard') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="/logout" class="btn btn-outline-primary">
                        Logout
                    </a>
                @endif
            @else
                <a href="{{ route('login') }}" class="text-black-50 mr-3" style="text-decoration: none">
                    Login
                </a>
                <a type="button" href="{{ route('register') }}" class="btn btn-outline-primary">
                    Register
                </a>
            @endif
        </div>
    </div>
</nav>

{{--
<nav class="navbar navbar-expand-lg navbar-light bg-white" id="main-menu">
    <a class="navbar-brand" href="/" style="max-width: 40%; ">
        <img src="{{ asset('img/dSewanew.png') }}" alt="" style="max-width: 100px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link homer" href="{{route('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about-us')}}">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="services" role="button"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Solution & Service
                </a>
                <div class="dropdown-menu" aria-labelledby="services">
                    <a class="dropdown-item" href="{{route('our-service')}}">Our Services</a>
                    <a class="dropdown-item" href="{{route('e-commerce')}}">E-Commerce</a>
                    <a class="dropdown-item" href="{{route('logistics')}}">Logistics</a>
                    <a class="dropdown-item" href="{{route('developer-research-center')}}">Developer Solution Center</a>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="https://deliverysewa.wixsite.com/blog"
                   target="_blank"> Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact-us')}}"> Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('faq')}}"> FAQ</a>
            </li>
        </ul>
        <div class="pr-3 pull-right">
            @if(Auth::check())
                @if(auth()->user()->hasRole('hub'))
                    <a href="{{ url('hub/profile') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="/logout" class="btn btn-outline-primary">
                        Logout
                    </a>
                @elseif(auth()->user()->hasRole('vendor'))
                    <a href="{{ url('vendor/profile') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="/logout"  class="btn btn-outline-primary">
                        Logout
                    </a>
                @elseif(auth()->user()->hasRole('admin'))
                    <a href="{{ url('admin/profile') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="/logout" class="btn btn-outline-primary">
                        Logout
                    </a>
                @else
                    <a href="{{ route('dashboard') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="/logout" class="btn btn-outline-primary">
                        Logout
                    </a>
                @endif
            @else
                <a href="{{ route('login') }}" class="text-black-50 mr-3" style="text-decoration: none">
                    Login
                </a>
                <a type="button" href="{{ route('register') }}" class="btn btn-outline-primary">
                    Register
                </a>
            @endif
        </div>
    </div>
</nav>
--}}
