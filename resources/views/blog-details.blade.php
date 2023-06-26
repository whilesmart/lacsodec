<x-layouts.app>
    <div class="impact-stories-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Blog details
            @endslot
        @endcomponent

        <section class="impact-stories-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset('images/publication-3.png') }}" alt="" />
                    <h1>Lorem ipsum dolor sit amet consectetur</h1>
                    <div class="info-container">
                        <div class="info">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <p>Posted By: Emako</p>
                        </div>
                        <div class="info">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <p>May 20, 2021</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                        voluptatem pariatur reiciendis harum odit, atque voluptas amet. Excepturi praesentium
                        perferendis, laudantium nulla quas, dolor quod officia aliquid reprehenderit sapiente hic?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <div class="images">
                        <img src="{{ asset('images/home-img-1.png') }}" alt="" />
                        <img src="{{ asset('images/home-img-2.png') }}" alt="" />
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                </div>
                <aside>
                    <div class="aside-section">
                        <div class="top">
                            <h3>Previous stories</h3>
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
