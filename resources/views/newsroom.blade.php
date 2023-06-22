<x-layouts.app>
    <div class="newsroom-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Newsroom
            @endslot
        @endcomponent

        <section class="newsroom-section">
            <div class="con">
                <div class="main-content">
                    <h1>Latest news from LACSODEC</h1>
                    <div class="images">
                        <img src="{{ asset('images/home-img-1.png') }}" alt="" />
                        <img src="{{ asset('images/home-img-2.png') }}" alt="" />
                    </div>
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                            suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                            minus sunt voluptates beatae quam. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae</b></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>

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
                </div>
                <aside>
                    <div class="aside-section">
                        <div class="top">
                            <h3>LACSODEC in the News</h3>
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
