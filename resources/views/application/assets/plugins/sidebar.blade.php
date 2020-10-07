<nav class="p-0 d-none d-md-block bg-white sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item px-4 pb-3" id="sidebar_logo">
            <a href="{{route('home')}}"><img src="{{ asset('img/logo/logo.png') }}" alt="logo"
                                             style="max-width: 120px;"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('dashboard')}}">
                <i class="fas fa-home"></i>
                <span class="pr-2"></span>
                Dashboard <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-sliders-h"></i>
                <span class="pr-2"></span>
                Slider
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-h-square"></i>
                <span class="pr-2"></span>
                Header
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-handshake"></i>
                <span class="pr-2"></span>
                Partner
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-comment-dots"></i>
                <span class="pr-2"></span>
                Testimonial
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-magic"></i>
                <span class="pr-2"></span>
                Icon Card
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-images"></i>
                <span class="pr-2"></span>
                Image Card
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-image"></i>
                <span class="pr-2"></span>
                Single Image
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-ad"></i>
                <span class="pr-2"></span>
                Featured On
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-share-alt-square"></i>
                <span class="pr-2"></span>
                Social Media
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-id-card"></i>
                <span class="pr-2"></span>
                Text With Image
            </a>
        </li>
    </ul>
    <ul class="nav border-top flex-column">
        <li class="nav-item px-4 pt-4">
            Account
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">
                <i class="fas fa-sign-out-alt"></i>
                <span class="pr-2"></span>
                Logout
            </a>
        </li>
    </ul>
</nav>
