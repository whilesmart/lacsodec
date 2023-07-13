<x-layouts.app>
    <div class="search-results-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Results for "search query here"
            @endslot
        @endcomponent

        <section class="search-results-section">
            <div class="top">
                <div class="con">
                    <h3>Filter</h3>
                    <ul>
                        <li>
                            <a href="">CSO</a>
                        </li>
                        <li>
                            <a href="">Experts</a>
                        </li>
                        <li>
                            <a href="">Services</a>
                        </li>
                        <li>
                            <a href="">Events</a>
                        </li>
                        <li>
                            <a href="">Publications</a>
                        </li>
                        <li>
                            <a href="">Grants</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="con">
                <div class="result-section">
                    <h2>CSO results:</h2>
                    <div class="cso-directory-grid">
                        <a href="/" class="cso-card">
                            <img src="{{ asset('images/home-img-1.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vel ducimus eveniet
                                debitis fuga nesciunt, sed, iusto, facilis id placeat enim. Numquam, itaque corporis sed
                                distinctio delectus et perferendis exercitationem.</p>
                        </a>
                        <a href="/" class="cso-card">
                            <img src="{{ asset('images/home-img-1.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vel ducimus eveniet
                                debitis fuga nesciunt, sed, iusto, facilis id placeat enim. Numquam, itaque corporis sed
                                distinctio delectus et perferendis exercitationem.</p>
                        </a>
                    </div>
                </div>

                <div class="result-section">
                    <h2>Experts results:</h2>
                    <div class="expert-directory-grid">
                        <a href="/" class="expert-card">
                            <img src="{{ asset('images/home-img-1.png') }}" alt="">
                            <h4>Expert name here</h4>
                            <h5>position here</h5>
                            <div class="flex">
                                <div class="left">
                                    <span>3 year(s)</span>
                                </div>
                                <div class="status available">available</div>
                            </div>
                            <p>yaounde - Cameroon - company name</p>
                        </a>
                        <a href="/" class="expert-card">
                            <img src="{{ asset('images/home-img-1.png') }}" alt="">
                            <h4>Expert name here</h4>
                            <h5>position here</h5>
                            <div class="flex">
                                <div class="left">
                                    <span>3 year(s)</span>
                                </div>
                                <div class="status available">available</div>
                            </div>
                            <p>yaounde - Cameroon - company name</p>
                        </a>
                        <a href="/" class="expert-card">
                            <img src="{{ asset('images/home-img-1.png') }}" alt="">
                            <h4>Expert name here</h4>
                            <h5>position here</h5>
                            <div class="flex">
                                <div class="left">
                                    <span>3 year(s)</span>
                                </div>
                                <div class="status available">available</div>
                            </div>
                            <p>yaounde - Cameroon - company name</p>
                        </a>
                    </div>
                </div>

                <div class="result-section">
                    <h2>Services results:</h2>
                    <div class="services-grid">
                        <a href="/" class="service">
                            S5: <br>
                            Legal Advisory & support
                        </a>
                        <a href="/" class="service">
                            S4: <br>
                            Financial Management Support
                        </a>
                    </div>
                </div>

                <div class="result-section">
                    <h2>Events results:</h2>
                    <div class="events-grid">
                        <div class="event-card">
                            <div class="img-con">
                                <img src="{{ asset('images/home-img-1.png') }}" alt="" />
                                <div class="type event">event type</div>
                            </div>
                            <div class="flex">
                                <div class="label sponsored">sponsored</div>
                                <p>Feb 13th 2024</p>
                            </div>
                            <div class="content">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <a href="/" class="custom-button primary"><span>Participate</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="result-section">
                    <h2>Publications results:</h2>
                    <div class="publications-grid">
                        <div class="publication">
                            <img src="{{ asset('images/publication-1.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pretium turpis eget augue mauris scelerisque.</p>
                            <a href="">Read More</a>
                        </div>
                        <div class="publication">
                            <img src="{{ asset('images/publication-2.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pretium turpis eget augue mauris scelerisque.</p>
                            <a href="">Read More</a>
                        </div>
                        <div class="publication">
                            <img src="{{ asset('images/publication-3.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pretium turpis eget augue mauris scelerisque.</p>
                            <a href="">Read More</a>
                        </div>
                        <div class="publication">
                            <img src="{{ asset('images/publication-4.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pretium turpis eget augue mauris scelerisque.</p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="result-section">
                    <h2>Grants results:</h2>
                    <div class="grants-grid">
                        <div class="grant-card">
                            <div class="logo-con">
                                <img src="{{ asset('images/logos/google_play.png') }}" alt="" />
                            </div>
                            <div class="rating">
                                <i class="fa fa-star colored" aria-hidden="true"></i>
                                <i class="fa fa-star colored" aria-hidden="true"></i>
                                <i class="fa fa-star colored" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <p>google play</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
</x-layouts.app>
