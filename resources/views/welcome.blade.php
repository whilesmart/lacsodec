<x-layouts.app>
    <!-- home hero -->
    <div class="hero home">
        <div class="sub">
            <div class="con">
                <h1><b>{{ __('home.Our helping') }}</b><br>{{__('home.around the world.')}}</h1>
                <p>{{__('home.We facilitate knowledge acquisition, dialogue among and between CSOs and their networks, mutualization of resources, information sharing and promotion of fair access to resources by CSOs of all categories (levels) using the principle of need, equality and equity with the population as final beneficiaries in mind.')}}</p>
                <div class="buttons">
                    <a href="/" class="custom-button secondary"><span>{{__('home.Donate now')}}</span></a>
                    <a href="/" class="custom-button white-border"><span>{{__('home.join us')}}</span></a>
                </div>
            </div>
        </div>
    </div>

    <section class="home-secton-1">
        <div class="con">
            <div class="left">
                <h2>About Us</h2>
                <p>CSO media space is our Main Goal</p>
                <div class="members">
                    <h3>8,000</h3>
                    <p>Members</p>
                </div>
                <a href="/" class="custom-button secondary"><span>Learn more</span></a>
            </div>
            <div class="right">
                <p><b>{{__('home.WHO WE ARE')}}</b></p>
                <p>{{__('home.The LUKMEF Africa Civil Society Development Centre (LACSODEC) is a Civil Society Organization (CSO) service providing agency facilitating knowledge acquisition, dialogue among and between CSOs and their networks, mutualization of resources, information sharing and promotion of fair access to resources by CSOs of all categories (levels) using the principle of need, equality and equity with the population as final beneficiaries in mind.')}}</p>
                <p>{{__('home.LACSODEC was founded in {year} by Tanyi Christian under the LUKMEF vision for Sustainable Development and Empowerment of communities and other local civil society actors to improve on service delivery. LACSODEC is located in NGO Street, Molyko – Buea, in the SW Region of Cameroon with registration number {insert here}.')}}</p>

                <div class="images">
                    <img src="{{ asset('images/home-img-1.png') }}" alt="" />
                    <img src="{{ asset('images/home-img-2.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="home-section-2">
        <div class="con">
            <aside>
                <div class="aside-section">
                    <div class="top">
                        <h3>Recent Event</h3>
                    </div>
                    <div class="event">
                        <h4>Donate to Others for Self</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit sed do eiusmod tempor
                            incididunt ut lab et dolo magn aliqua. Mauris
                        </p>
                        <div class="info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>The Official Yearly Meeting
                                Molyko - Buea</p>
                        </div>
                        <div class="info">
                            <i class="fa fa-clock" aria-hidden="true"></i>
                            <p>08:00 AM - 05:00 PM</p>
                        </div>
                    </div>
                    <a href="/" class="custom-button white">
                        <span>View more</span>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="aside-section">
                    <div class="top">
                        <h3>Latest Experts</h3>
                    </div>
                    <div class="expert">
                        <img src="{{ asset('images/expert-1.png') }}" alt="" />
                        <div class="info">
                            <h5>Opeolu Tijani</h5>
                            <p>Receptionist</p>
                        </div>
                    </div>
                    <div class="expert">
                        <img src="{{ asset('images/expert-2.png') }}" alt="" />
                        <div class="info">
                            <h5>Mensa Robert</h5>
                            <p>Account manager</p>
                        </div>
                    </div>
                    <div class="expert">
                        <img src="{{ asset('images/expert-3.png') }}" alt="" />
                        <div class="info">
                            <h5>Uche Ngozi</h5>
                            <p>Product manager</p>
                        </div>
                    </div>
                    <div class="expert">
                        <img src="{{ asset('images/expert-4.png') }}" alt="" />
                        <div class="info">
                            <h5>Badmus Eniola</h5>
                            <p>CTO</p>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="main-content">
                <div class="news-feed">
                    <div class="main">
                        <img src="{{ asset('images/news-feed.png') }}" alt="">
                        <div class="content">
                            <h2>Give your love to older people</h2>
                            <div class="info">
                                <div class="sub">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p>Posted by:</p>
                                </div>
                                <div class="sub">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <p>April 3, 2020</p>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        </div>
                    </div>
                    <div class="feeds">
                        <div class="feed">
                            <img src="{{ asset('images/news-feed-1.png') }}" alt="">
                            <div class="content">
                                <h3>No one has ever become poor by giving</h3>
                                <div class="info">
                                    <div class="sub">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <p>Posted by:</p>
                                    </div>
                                    <div class="sub">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <p>April 3, 2020</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                <a href="/" class="custom-button white">
                                    <span>Read more</span>
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="feed">
                            <img src="{{ asset('images/news-feed-2.png') }}" alt="">
                            <div class="content">
                                <h3>Disability is not the end of your career</h3>
                                <div class="info">
                                    <div class="sub">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <p>Posted by:</p>
                                    </div>
                                    <div class="sub">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <p>April 3, 2020</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                <a href="/" class="custom-button white">
                                    <span>Read more</span>
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="feed">
                            <img src="{{ asset('images/news-feed-3.png') }}" alt="">
                            <div class="content">
                                <h3>Proof That NGO BLOGS Is Exactly What You Are Looking…</h3>
                                <div class="info">
                                    <div class="sub">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <p>Posted by:</p>
                                    </div>
                                    <div class="sub">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <p>April 3, 2020</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                <a href="/" class="custom-button white">
                                    <span>Read more</span>
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
                <x-donation-card />
                <x-latest-cso />
            </aside>
        </div>
    </section>

    <x-numbers />
    <x-contact :contactInfo="$contactInfo"></x-contact>

</x-layouts.app>
