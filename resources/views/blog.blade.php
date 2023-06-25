<x-layouts.app>
    <div class="blog-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Blog
            @endslot
        @endcomponent

        <section class="blog-section">
            <div class="con">
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
                <aside>
                    <div class="aside-section">
                        <div class="top">
                            <h3>Featured</h3>
                        </div>
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
                            <img src="{{ asset('images/publication-4.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Pretium turpis eget augue mauris scelerisque.</p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

    </div>
</x-layouts.app>
