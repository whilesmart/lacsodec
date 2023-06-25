<x-layouts.app>
    <div class="cso-directory-details-page">
        <!-- breadcrumb -->
        <div class="top"></div>

        <section class="cso-directory-details-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset('images/library/library-1.png') }}" alt="" class="top-image">
                    <h1>GIZ</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                        voluptatem pariatur reiciendis harum odit, atque voluptas amet. Excepturi praesentium
                        perferendis, laudantium nulla quas, dolor quod officia aliquid reprehenderit sapiente hic?</p>
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                            suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                            minus sunt voluptates beatae quam.</b></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                </div>
                <aside>
                    <x-donation-card />
                    <x-latest-cso />
                </aside>
            </div>
        </section>

        <section class="other-cso-section">
            <div class="con">
                <h2>Other CSO</h2>
                <div class="cso-grid">
                    <div class="cso-card">
                        <img src="{{ asset('images/library/library-1.png') }}" alt="" />
                        <h2>GIZ</h2>
                        <p>Close Partner</p>
                    </div>
                    <div class="cso-card">
                        <img src="{{ asset('images/library/library-2.png') }}" alt="" />
                        <h2>Danish Refugee Council</h2>
                        <p>Close Partner</p>
                    </div>
                    <div class="cso-card">
                        <img src="{{ asset('images/library/library-3.png') }}" alt="" />
                        <h2>Union Europeene</h2>
                        <p>Close Partner</p>
                    </div>
                    <div class="cso-card">
                        <img src="{{ asset('images/library/library-4.png') }}" alt="" />
                        <h2>IOM</h2>
                        <p>Close Partner</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
