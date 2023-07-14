<x-layouts.app>
    <div class="search-results-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Results for "{{$search}}"
            @endslot
        @endcomponent

        <section class="search-results-section">
            <div class="top">
                <div class="con">
                    <h3>Filter</h3>
                    <ul>
                        <li>
                            <a href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['filter' => 'csos'])) }}"
                            @if ($filter == 'csos')
                            class="active"
                            @endif
                            >CSO</a>
                        </li>
                        <li>
                            <a href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['filter' => 'experts'])) }}"
                            @if ($filter == 'experts')
                            class="active"
                            @endif
                            >Experts</a>
                        </li>
                        <li>
                            <a href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['filter' => 'events'])) }}"
                            @if ($filter == 'events')
                            class="active"
                            @endif
                            >Events</a>
                        </li>
                        <li>
                            <a href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['filter' => 'articles'])) }}"
                            @if ($filter == 'articles')
                            class="active"
                            @endif
                            >Publications</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="con">
                @if ($filter == 'csos' || !$filter)
                <div class="result-section">
                    <h2>CSO results:</h2>
                    <div class="cso-directory-grid">
                        @foreach ($csos as $cso)
                        <a href="{{ route('cso-directory-details', ['cso' => $cso->id]) }}" class="cso-card">
                            <img src="{{ asset($cso->image) }}" alt="" />
                            <h2>{{$cso->name}}</h2>
                            <p>{{$cso->vision_statement}}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                @if ($filter == 'expert' || !$filter)
                <div class="result-section">
                    <h2>Experts results:</h2>
                    <div class="expert-directory-grid">
                        @foreach ($experts as $expert)
                        <a href="{{ route('expert-directory-details', ['expert' => $expert->id]) }}" class="expert-card">
                            <img src="{{ asset($expert->image) }}" alt="">
                            <h4>{{ $expert->user->name }}</h4>
                            <h5>{{ $expert->position }}</h5>
                            <div class="flex">
                                <div class="left">
                                    <span>{{ $expert->work_duration }}</span>
                                </div>
                                <div class="status available">{{ $expert->status }}</div>
                            </div>
                            <p>{{ $expert->location }} - {{ $expert->nationality }} - {{ $expert->company }}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                @if ($filter == 'events' || !$filter)
                <div class="result-section">
                    <h2>Events results:</h2>
                    <div class="events-grid">
                        @foreach ($events as $event)
                        <div class="event-card">
                            <div class="img-con">
                                <img src="{{ asset('images/home-img-1.png') }}" alt="" />
                                <div class="type event">{{$event->type}}</div>
                            </div>
                            <div class="flex">
                                <div class="label sponsored">{{$event->entrance}}</div>
                                <p>{{$event->date}}</p>
                            </div>
                            <div class="content">
                                <p>{{$event->name}}</p>
                                <a href="{{ route('event-participate', ['event' => $event->id]) }}" class="custom-button primary"><span>Participate</span></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                @if ($filter == 'articles' || !$filter)
                <div class="result-section">
                    <h2>Publications results:</h2>
                    <div class="publications-grid">
                        @foreach ($articles as $blog)
                        <div class="publication">
                            <img src="{{ asset($blog->image) }}" alt="" />
                            <h2>{{$blog->title}}</h2>
                            <p>{{$blog->description}}</p>
                            <a href="{{ route('blog-details', ['blog' => $blog->slug]) }}">Read More</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>
        </section>

    </div>
</x-layouts.app>
