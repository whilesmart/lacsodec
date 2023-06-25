<x-layouts.app>
    <div class="expert-directory-details-page">
        <!-- breadcrumb -->
        <div class="top"></div>

        <section class="expert-directory-details-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset('images/team/team-member-1.png') }}" alt="" class="top-image">
                    <h1>Iyalode Eko</h1>
                    <h2>Dog Trainer</h2>
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

        <section class="other-expert-section">
            <div class="con">
                <h2>Other Expert</h2>
                <div class="expert-grid">
                    <div class="member-card">
                        <img src="{{ asset('images/team/team-member-1.png') }}" alt="">
                        <h4>Noel Nfebe</h4>
                        <p>IT Director</p>
                    </div>
                    <div class="member-card">
                        <img src="{{ asset('images/team/team-member-2.png') }}" alt="">
                        <h4>Mensa Robert</h4>
                        <p>Medical Assistant</p>
                    </div>
                    <div class="member-card">
                        <img src="{{ asset('images/team/team-member-3.png') }}" alt="">
                        <h4>Anisa Lulu</h4>
                        <p>President of Sales</p>
                    </div>
                    <div class="member-card">
                        <img src="{{ asset('images/team/team-member-4.png') }}" alt="">
                        <h4>Rebecca Funto</h4>
                        <p>Nursing Assistant</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
