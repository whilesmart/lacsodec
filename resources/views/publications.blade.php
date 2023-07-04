<x-layouts.app>
    <div class="publications-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Publications
            @endslot
        @endcomponent

        <section class="publications-section">
            <div class="con">
                <aside>
                    <nav>
                        <ul>
                            <li><a href="/">Program reports</a></li>
                            <li><a href="/">Policy Briefs</a></li>
                            <li><a href="/">Research Papers</a></li>
                            <li><a href="/">Finance Report</a></li>
                            <li><a href="/">CSO management Handbooks</a></li>
                            <li><a href="/">CSO Finance Handbooks</a></li>
                            <li><a href="/">CSO legal Framework</a></li>
                            <li><a href="/">Gender</a></li>
                            <li><a href="/">Human rights</a></li>
                            <li><a href="/">Environment</a></li>
                            <li><a href="/">Climate change</a></li>
                        </ul>
                    </nav>
                </aside>
                <div class="main-content">
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
                        <div class="publication">
                            <img src="{{ asset('images/publication-5.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pretium turpis eget augue mauris scelerisque.</p>
                            <a href="">Read More</a>
                        </div>
                        <div class="publication">
                            <img src="{{ asset('images/publication-6.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pretium turpis eget augue mauris scelerisque.</p>
                            <a href="">Read More</a>
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
            </div>
        </section>

    </div>
</x-layouts.app>
