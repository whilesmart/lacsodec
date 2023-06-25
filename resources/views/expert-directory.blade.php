<x-layouts.app>
    <div class="expert-directory-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Expert Directory
            @endslot
        @endcomponent

        <section class="expert-directory-section">
            <div class="con">
                <div class="main-content">
                    <div class="expert-directory-grid">
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
                        <div class="member-card">
                            <img src="{{ asset('images/team/team-member-5.png') }}" alt="">
                            <h4>Uzodima Chinonzo</h4>
                            <p>Uzodima Chinonzo</p>
                        </div>
                        <div class="member-card">
                            <img src="{{ asset('images/team/team-member-6.png') }}" alt="">
                            <h4>Iyalode Eko</h4>
                            <p>Dog Trainer</p>
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
