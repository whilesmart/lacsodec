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
                                    <b>en</b>
                                @else
                                    en
                                @endif
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('locale.setting', 'fr') }}">
                                @if (Lang::locale() == 'fr')
                                    <b>fr</b>
                                @else
                                    fr
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('contact-us') }}"
                    class="custom-button transparent"><span>{{ __('header.Contact us') }}</span></a>
                @guest
                    <a href="{{ route('login') }}" class="custom-button primary"><span>{{ __('header.Login') }}</span></a>
                @endguest
                @auth
                    <div class="dropdown">
                        <button class="custom-button primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                alt="">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('my-csos') }}">{{ __("header.CSO's") }}</a></li>
                            <!-- <li><a class="dropdown-item" href="{{ route('contact-us') }}">{{ __("header.Expert's Profile") }}</a></li> -->
                            <!-- <li><a class="dropdown-item" href="{{ route('contact-us') }}">{{ __('header.Human Resource') }}</a></li> -->
                            <!-- <li><a class="dropdown-item" href="{{ route('contact-us') }}">{{ __('header.Settings') }}</a></li> -->
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('header.Logout') }}</a>
                            </li>
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
                <a href="{{ route('welcome') }}" class="logo"><img
                        src="{{ asset('images/logos/lacsodec-logo.png') }}" alt=""></a>
                <ul>
                    <li>
                        <a href="{{ route('cso-directory') }}">
                            @if (Request::routeIs('cso-directory') || Request::routeIs('cso-directory-details'))
                                <b>{{ __('header.CSO Directory') }}</b>
                            @else
                                {{ __('header.CSO Directory') }}
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('expert-directory') }}">
                            @if (Request::routeIs('expert-directory') || Request::routeIs('expert-directory-details'))
                                <b>{{ __('header.Experts Directory') }}</b>
                            @else
                                {{ __('header.Experts Directory') }}
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('human-resource-directory') }}">
                            @if (Request::routeIs('human-resource-directory'))
                                <b>{{ __('header.Human Resource') }}</b>
                            @else
                                {{ __('header.Human Resource') }}
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
            <form action="{{ route('search-results') }}" method="GET">
                <input type="text" name="search" id="" placeholder="{{ __('header.Enter any keyword') }}">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
    <div class="navigation">
        <div class="con">
            <a href="{{ route('welcome') }}"><img src="{{ asset('images/logos/lacsodec-logo-white.png') }}"
                    alt="" class="logo"></a>
            <nav id="navigation-menu">
                <button type="button" class="close" id="navigation-close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                <ul>
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">{{ __('header.home') }}</a>
                    </li>
                    <li><a href="{{ route('about-us') }}"
                            class="{{ request()->is('about-us') ? 'active' : '' }}">{{ __('header.about us') }}</a>
                    </li>
                    <li><a href="{{ route('services') }}"
                            class="{{ request()->is('services') ? 'active' : '' }}">{{ __('header.services') }}</a>
                    </li>
                    <li><a href="{{ route('events') }}"
                            class="{{ Request::routeIs('events') || Request::routeIs('event-participate') ? 'active' : '' }}">{{ __('header.events/Trainings') }}</a>
                    </li>
                    <li><a href="{{ route('blog') }}"
                            class="{{ Request::routeIs('blog') || Request::routeIs('blog-details') ? 'active' : '' }}">{{ __('header.blog') }}</a>
                    </li>
                    <li><a href="{{ route('lodge') }}"
                            class="{{ Request::routeIs('lodge') || Request::routeIs('lodge-details') ? 'active' : '' }}">{{ __('header.lodge') }}</a>
                    </li>
                    <li><a href="{{ route('contact-us') }}"
                            class="{{ request()->is('contact-us') ? 'active' : '' }}">{{ __('header.contact-us') }}</a>
                    </li>
                </ul>
            </nav>
            <div class="right">
                <a href="{{ route('donate') }}"
                    class="custom-button primary-dark "><span>{{ __('header.Donate') }}</span></a>
                <button type="button" class="toggler" id="navigation-toggler"><i class="fa fa-bars"
                        aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</header>
