<x-layouts.app>
    <div class="events-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Events/Trainings
            @endslot
        @endcomponent

        <section class="events-section">
            <div class="con">
                <div class="events-grid">
                    <div class="event-card">
                        <div class="img-con">
                            <img src="{{ asset('images/publication-1.png') }}" alt="" />
                            <div class="type event">Event</div>
                        </div>
                        <div class="flex">
                            <div class="label sponsored">sponsored</div>
                            <p>May 23, 2023</p>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur dolor sit amet dolor sit amet</p>
                            <a href="/" class="custom-button primary"><span>Participate</span></a>
                        </div>
                    </div>
                    <div class="event-card">
                        <div class="img-con">
                            <img src="{{ asset('images/publication-2.png') }}" alt="" />
                            <div class="type event">Event</div>
                        </div>
                        <div class="flex">
                            <div class="label free">free</div>
                            <p>May 23, 2023</p>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <a href="/" class="custom-button primary"><span>Participate</span></a>
                        </div>
                    </div>
                    <div class="event-card">
                        <div class="img-con">
                            <img src="{{ asset('images/publication-3.png') }}" alt="" />
                            <div class="type training">Training</div>
                        </div>
                        <div class="flex">
                            <div class="label paid">paid</div>
                            <p>May 23, 2023</p>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <a href="/" class="custom-button primary"><span>Participate</span></a>
                        </div>
                    </div>
                    <div class="event-card">
                        <div class="img-con">
                            <img src="{{ asset('images/publication-4.png') }}" alt="" />
                            <div class="type event">Event</div>
                        </div>
                        <div class="flex">
                            <div class="label sponsored">sponsored</div>
                            <p>May 23, 2023</p>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <a href="/" class="custom-button primary"><span>Participate</span></a>
                        </div>
                    </div>
                    <div class="event-card">
                        <div class="img-con">
                            <img src="{{ asset('images/publication-5.png') }}" alt="" />
                            <div class="type event">Event</div>
                        </div>
                        <div class="flex">
                            <div class="label sponsored">sponsored</div>
                            <p>May 23, 2023</p>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                            <a href="/" class="custom-button primary"><span>Participate</span></a>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <ul>
                        <li><a href="/">1</a></li>
                        <li><a href="/">2</a></li>
                        <li><a href="/">3</a></li>
                        <li><a href="/">...</a></li>
                        <li><a href="/">20</a></li>
                    </ul>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
