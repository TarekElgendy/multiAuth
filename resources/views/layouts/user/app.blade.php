@include('partials._head')

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark py-1" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}" aria-label="Logo">
            <img src="{{ $setting->image_logo }}" class="img-fluid" alt="Logo">
        </a>
        <div class="menu-mobile justify-content-center" id="navbarNav">
            <img src="{{ $setting->image_logo }}" class="logo-mobile w-75 m-auto d-block img-fluid d-none"
                alt="Logo Mobile">
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $page == 'starter' ? 'active' : '' }} " aria-current="page"
                        href="{{route('user.starter')}}"> تخصصك </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'manufactureRequests' ? 'active' : '' }}" href="{{route('user.manufactureRequests')}}">  @lang('site.manufactureRequests') </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'myOrders' ? 'active' : '' }}" href="{{route('user.myorders')}}"> طلباتى </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'payments' ? 'active' : '' }}" href="{{ route('user.payments') }}">
                        @lang('site.payments') </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'instructions' ? 'active' : '' }}" href="{{ route('user.faq') }}">
                        @lang('site.instructions')
                    </a>
                </li>
{{--
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'about' ? 'active' : '' }}" href="request-quote.html"> طلب سعر تصنيع
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'contact' ? 'active' : '' }} " href="{{ route('user.contact') }}">
                        @lang('site.contact')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'profile' ? 'active' : '' }}" href="{{ route('user.profile') }}"> <i
                            class="far fa-user"></i>
                        @lang('site.myAccount') </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'about' ? 'active' : '' }}" href="{{ route('logout') }}"> <i
                            class="fas fa-sign-out-alt"></i>
                        @lang('site.logout') </a>
                </li>
            </ul>
        </div>

    </div>
</nav>

@yield('content')
@include('partials._footer')
