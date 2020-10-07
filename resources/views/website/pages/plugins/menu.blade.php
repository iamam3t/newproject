<nav class="navbar navbar-expand-lg navbar-light bg-white" id="main-menu">
    <a class="navbar-brand" href="home" style="max-width: 40%; ">
        <img src="{{ asset('img/logo/logo.png') }}" alt="logo" style="max-width: 100px;"></a>
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
                <a class="nav-link" href="{{route('about-us')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('training')}}">Training</a>
            </li>
        </ul>
        <div class="pr-3 pull-right">
            @if(Auth::check())
                @if(auth()->user()->hasRole('admin'))
                    <a href="{{ route('dashboard') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="{{ route('logout') }}" class="btn btn-outline-primary">
                        Logout
                    </a>
                @else
                    <a href="{{ route('dashboard') }}"  class="text-black-50 mr-3" style="text-decoration: none">
                        Dashboard
                    </a>
                    <a href="{{ route('logout') }}" class="btn btn-outline-primary">
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
