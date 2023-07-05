<x-layouts.app>
    <div class="lodge-details-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Lodge
            @endslot
        @endcomponent

        <section class="lodge-details-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset('images/home-img-1.png') }}" alt="" />
                    <h1>Latest news from LACSODEC</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <a href="" class="link">Read the Story</a>
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
                            <h3>Home Facilities</h3>
                        </div>
                        <div class="facilities">
                            <div class="info">
                                <img src="{{ asset('images/icons/wifi.svg') }}" alt="" />
                                <p>Free wifi</p>
                            </div>
                            <div class="info">
                                <img src="{{ asset('images/icons/bottle.svg') }}" alt="" />
                                <p>Baby Shower</p>
                            </div>
                            <div class="info">
                                <img src="{{ asset('images/icons/save.svg') }}" alt="" />
                                <p>Watching machine</p>
                            </div>
                            <div class="info">
                                <img src="{{ asset('images/icons/no-smooking.svg') }}" alt="" />
                                <p>No Smoking</p>
                            </div>
                        </div>
                        <div class="publication">
                            <img src="{{ asset('images/publication-1.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <a href="">Download</a>
                        </div>
                        <div class="publication">
                            <img src="{{ asset('images/publication-2.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <a href="">Download</a>
                        </div>
                        <div class="publication">
                            <img src="{{ asset('images/publication-3.png') }}" alt="" />
                            <h2>Lorem ipsum dolor sit amet consectetur</h2>
                            <a href="">Download</a>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

    </div>
</x-layouts.app>
