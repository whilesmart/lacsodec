<header>
    <div class="top">
        <div class="con">
            <p> info@lacsodec.org</p>
            <div class="buttons">
                <div class="language">
                    <ul>
                        <li>
                            <a href="">en</a>
                        </li>
                        <li>
                            <a href="">fr</a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('contact-us') }}" class="custom-button transparent"><span>Contact us</span></a>
                <a href="{{ route('login') }}" class="custom-button primary"><span>Login</span></a>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="con">
            <div class="left">
                <img src="{{ asset('images/logos/lacsodec-logo.png') }}" alt="" class="logo">
                <ul>
                    <li>
                        <a href="{{ route('cso-directory') }}">CSO Directory</a>
                    </li>
                    <li>
                        <a href="{{ route('expert-directory') }}">Experts Directory</a>
                    </li>
                    <li>
                        <a href="">HR Directory</a>
                    </li>
                </ul>
            </div>
            <form action="">
                <input type="text" name="" id="" placeholder="Enter any Keyword">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
    <div class="navigation">
        <div class="con">
            <img src="{{ asset('images/logos/lacsodec-logo-white.png') }}" alt="" class="logo">
            <nav id="navigation-menu">
                <button type="button" class="close" id="navigation-close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                <ul>
                    <li><a href="/" class="active">home</a></li>
                    <li><a href="{{ route('about-us') }}">about us</a></li>
                    <li><a href="{{ route('services') }}">services</a></li>
                    <li><a href="{{ route('publications') }}">publications</a></li>
                    <li><a href="{{ route('cso-library') }}">CSO Library</a></li>
                    <li><a href="{{ route('events') }}">events/Trainings</a></li>
                    <li><a href="{{ route('grants') }}">grants</a></li>
                    <li><a href="{{ route('blog') }}">blog</a></li>
                    <li><a href="{{ route('lodge') }}">lodge</a></li>
                </ul>
            </nav>
            <div class="right">
                <a href="/" class="custom-button primary-dark"><span>Donate</span></a>
                <button type="button" class="toggler" id="navigation-toggler"><i class="fa fa-bars"
                        aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</header>
