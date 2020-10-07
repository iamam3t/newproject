<nav class="p-0 d-none d-md-block bg-white sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item px-4 pb-3" id="sidebar_logo">
            <a href="{{route('home')}}"><img src="{{ asset('img/logo/dSewanew.png') }}" alt="" style="max-width: 120px;"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('dashboard')}}">
                <i class="fas fa-home"></i>
                <span class="pr-2"></span>
                Dashboard <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('slider.index')}}">
                <i class="fas fa-sliders-h"></i>
                <span class="pr-2"></span>
                Slider
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('header.index')}}">
                <i class="fas fa-h-square"></i>
                <span class="pr-2"></span>
                Header
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('partners.index')}}">
                <i class="fas fa-handshake"></i>
                <span class="pr-2"></span>
                Partner
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('testimonial.index')}}">
                <i class="fas fa-comment-dots"></i>
                <span class="pr-2"></span>
                Testimonial
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('icon-card.index')}}">
                <i class="fas fa-magic"></i>
                <span class="pr-2"></span>
                Icon Card
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('image-card.index')}}">
                <i class="fas fa-images"></i>
                <span class="pr-2"></span>
                Image Card
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('image.index')}}">
                <i class="fas fa-image"></i>
                <span class="pr-2"></span>
                Single Image
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('featured-on.index')}}">
                <i class="fas fa-ad"></i>
                <span class="pr-2"></span>
                Featured On
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('social.index')}}">
                <i class="fas fa-share-alt-square"></i>
                <span class="pr-2"></span>
                Social Media
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('text-with-image.index')}}">
                <i class="fas fa-id-card"></i>
                <span class="pr-2"></span>
                Text With Image
            </a>
        </li>
        <ul class="nav flex-column">
            <hr class="my-4">
            <li class="nav-item px-4 py-0">
                Account
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="pr-2"></span>
                    Logout
                </a>
            </li>
        </ul>
    </ul>
</nav>
{{--<li class="nav-item" id="dropdown-item">
            <a class="nav-link btn btn-link rounded-0" data-toggle="collapse" href="#newshipment" role="button"
               aria-expanded="false" aria-controls="newshipment">
                <i class="fas fa-location-arrow"></i>
                <span class="pr-2"></span>
                New Shipment
                <span class="pr-2"></span>
                <i class="fas fa-sort-down"></i>
            </a>
        </li>
        <ul class="collapse" id="newshipment">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="pr-2"></span>
                    Single Shipment
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="pr-2"></span>
                    Bulk Shipment
                </a>
            </li>
        </ul>

        <li class="nav-item" id="dropdown-item">
            <a class="nav-link btn btn-link rounded-0" data-toggle="collapse" href="#shipments" role="button"
               aria-expanded="false" aria-controls="shipments">
                <i class="fas fa-truck"></i>
                <span class="pr-2"></span>
                Shipments
                <span class="pr-2"></span>
                <i class="fas fa-sort-down"></i>
            </a>
        </li>
        <ul class="collapse" id="shipments">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="pr-2"></span>
                    Pending
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="pr-2"></span>
                    Current
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="pr-2"></span>
                    Completed
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="pr-2"></span>
                    Cancelled
                </a>
            </li>
        </ul>--}}
