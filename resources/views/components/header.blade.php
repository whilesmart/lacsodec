<header>
    <div class="top">
        <div class="con">
            <p> info@lacsodec.org</p>
            <div class="buttons">
                <div class="language">
                    <ul>
                        <li>
                            <a href="{{ route('locale.setting', 'en') }}">
                                @if (Lang::locale() == 'en')
                                <b style="font-size: larger;">en</b>
                                @else
                                en
                                @endif
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('locale.setting', 'fr') }}">
                                @if (Lang::locale() == 'fr')
                                <b style="font-size: large;">fr</b>
                                @else
                                fr
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('contact-us') }}" class="custom-button transparent"><span>Contact us</span></a>
                @guest
                <a href="{{ route('login') }}" class="custom-button primary"><span>Login</span></a>
                @endguest
                @auth
                <div class="dropdown">
                    <button class="custom-button primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="">
                        {{Auth::user()->name}}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('my-csos') }}">CSO's</a></li>
                        <li><a class="dropdown-item" href="{{ route('contact-us') }}">Expert Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('contact-us') }}">Human Resource</a></li>
                        <li><a class="dropdown-item" href="{{ route('contact-us') }}">Settings</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        <form action="{{ route('logout') }}" method="post" id="logout-form">
                            @csrf
                        </form>
                    </ul>
                </div>
                @endauth
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="con">
            <div class="left">
                <a href="{{ route('welcome') }}"><img src="{{ asset('images/logos/lacsodec-logo.png') }}" alt="" class="logo"></a>
                <ul>
                    <li>
                        <a href="{{ route('cso-directory') }}">
                            @if (Request::routeIs('cso-directory'))
                            <b style="font-size: large;">CSO Directory</b>
                            @else
                            CSO Directory
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('expert-directory') }}">
                            @if (Request::routeIs('expert-directory'))
                            <b style="font-size: large;">Experts Directory</b>
                            @else
                            Experts Directory
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('human-resource-directory') }}">
                        @if (Request::routeIs('human-resource-directory'))
                            <b style="font-size: large;">Human Resource</b>
                            @else
                            Human Resource
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
            <form action="{{ route('search-results') }}" method="GET">
                <input type="text" name="search" id="" placeholder="Enter any Keyword">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
    <div class="navigation">
        <div class="con">
            <a href="{{ route('welcome') }}"><img src="{{ asset('images/logos/lacsodec-logo-white.png') }}" alt="" class="logo"></a>
            <nav id="navigation-menu">
                <button type="button" class="close" id="navigation-close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                <ul>
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">home</a></li>
                    <li><a href="{{ route('about-us') }}" class="{{ request()->is('about-us') ? 'active' : '' }}">about
                            us</a></li>
                    <li><a href="{{ route('services') }}" class="{{ request()->is('services') ? 'active' : '' }}">services</a></li>
                    <li><a href="{{ route('events') }}" class="{{ request()->is('events') ? 'active' : '' }}">events/Trainings</a></li>
                    <li><a href="{{ route('blog') }}" class="{{ request()->is('blog') ? 'active' : '' }}">blog</a>
                    </li>
                    <li><a href="{{ route('lodge') }}" class="{{ request()->is('lodge') ? 'active' : '' }}">lodge</a>
                    </li>
                    <li><a href="{{ route('lodge') }}" class="mobile-only {{ request()->is('contact-us') ? 'active' : '' }}">lodge</a></li>
                    <li><a href="{{ route('contact-us') }}" class="{{ request()->is('contact-us') ? 'active' : '' }}">contact-us</a></li>
                </ul>
            </nav>
            <div class="right">
                <a href="{{ route('donate') }}" class="custom-button primary-dark"><span>Donate</span></a>
                <button type="button" class="toggler" id="navigation-toggler"><i class="fa fa-bars" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</header>
