<header>
    <div class="top">
        <div class="con">
            <p> info@lacsodec.org</p>
            <div class="buttons">
                <a href="/" class="custom-button transparent"><span>About us</span></a>
                <a href="{{ route('login') }}" class="custom-button primary"><span>Login</span></a>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="con">
            <div class="left">
                <img src="{{ asset('images/logos/lacsodec-logo.png') }}" alt="" class="logo">
                <p>Lorem ipsum dolor sit amet consectetur. Enim in sed feugiat lectus vel erat eu lacus ullamcorper.
                    Lectus a cursus auctor felis turpis amet ridiculus quam in. Malesuada habitant condimentum feugiat
                    dolor sit. Nunc egestas.</p>
            </div>
            <form action="">
                <input type="text" name="" id="" placeholder="Enter any Keyword">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
    <div class="navigation">
        <div class="con">
            <nav>
                <ul>
                    <li><a href="/" class="active">home</a></li>
                    <li><a href="{{ route('about-us') }}">about us</a></li>
                    <li><a href="/">blog</a></li>
                    <li><a href="/">events</a></li>
                    <li><a href="/">gallery</a></li>
                    <li><a href="{{ route('contact-us') }}">contact us</a></li>
                </ul>
            </nav>
            <a href="/" class="custom-button primary-dark"><span>Announcements</span></a>
        </div>
    </div>
</header>
