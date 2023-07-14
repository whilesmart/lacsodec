<x-layouts.app>
    <!-- home hero -->
    <div class="hero home">
        <div class="sub">
            <div class="con">
                <h1><b>{{ __('home.Our helping') }}</b><br>{{__('home.around the world.')}}</h1>
                <p>{{__('home.We facilitate knowledge acquisition, dialogue among and between CSOs and their networks, mutualization of resources, information sharing and promotion of fair access to resources by CSOs of all categories (levels) using the principle of need, equality and equity with the population as final beneficiaries in mind.')}}</p>
                <div class="buttons">
                    <a href="{{ route('register-cso') }}" class="custom-button secondary"><span>{{__('home.Register a CSO')}}</span></a>
                    <a href="{{ route('register') }}" class="custom-button white-border"><span>{{__('home.join us')}}</span></a>
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
                    @if ($latestEvent)
                    <div class="event">
                        <h4>{{$latestEvent->name}}</h4>
                        <div class="info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>{{$latestEvent->type}}</p>
                        </div>
                        <div class="info">
                            <i class="fa fa-clock" aria-hidden="true"></i>
                            <p>{{$latestEvent->date}}</p>
                        </div>
                    </div>
                    <a href="{{$latestEvent->url}}" target="__blank" class="custom-button white">
                        <span>View more</span>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    @endif
                </div>
                <div class="aside-section">
                    <div class="top">
                        <h3>Latest Experts</h3>
                    </div>
                    @foreach ($latestExperts as $expert)
                    <div class="expert">
                        <img src="{{ asset($expert->image) }}" alt="" />
                        <div class="info">
                            <h5>{{$expert->user->name}}</h5>
                            <p>{{$expert->position}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </aside>
            <div class="main-content">
                <div class="news-feed">
                    <div class="main">
                        @if ($latestArticles[0])
                        <img src="{{ asset($latestArticles[0]->image) }}" alt="">
                        <div class="content">
                            <h2>{{$latestArticles[0]->name}}</h2>
                            <div class="info">
                                <div class="sub">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    @if ($latestArticles[0]->user)
                                    <p>Posted by: {{$latestArticles[0]->user->name}}</p>
                                    @endif
                                </div>
                                <div class="sub">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <p>{{$latestArticles[0]->created_at}}</p>
                                </div>
                            </div>
                            <p>{{$latestArticles[0]->description}}</p>
                        </div>
                        @endif
                    </div>
                    <div class="feeds">
                        @foreach ($latestArticles as $article)
                        @if (!$loop->first)
                        <div class="feed">
                            <img src="{{ asset($article->image) }}" alt="">
                            <div class="content">
                                <h3>{{$article->title}}</h3>
                                <div class="info">
                                    <div class="sub">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        @if ($article->user)
                                        <p>Posted by: {{$article->user->name}}</p>
                                        @endif
                                    </div>
                                    <div class="sub">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <p>{{$article->created_at}}</p>
                                    </div>
                                </div>
                                <p>{{$article->description}}</p>
                                <a href="{{ route('blog-details', ['blog' => $article->slug]) }}" class="custom-button white">
                                    <span>Read more</span>
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <aside>
                <x-donation-card />
                <div class="aside-section">
    <div class="top">
        <h3>Latest CSO</h3>
    </div>
    @foreach ($latestCsos as $cso)
    <div class="cso">
        <img src="{{ asset('images/cso-1.png') }}" alt="" />
        <div class="info">
            <h5>{{$cso->name}}</h5>
            <p>{{$cso->created_at}}</p>
        </div>
    </div>
    @endforeach
</div>
            </aside>
        </div>
    </section>

    <x-numbers />
    <x-contact :contactInfo="$contactInfo"></x-contact>

</x-layouts.app>
