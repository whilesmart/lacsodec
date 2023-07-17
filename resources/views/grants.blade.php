<x-layouts.app>
    <div class="grants-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{__('grants.Grants')}}
            @endslot
        @endcomponent

        <section class="grants-section">
            <div class="con">
                <div class="grants-grid">
                    <div class="grant-card">
                        <div class="logo-con">
                            <img src="{{ asset('images/logos/google_play.png') }}" alt="" />
                        </div>
                        <div class="rating">
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>google play</p>
                    </div>
                    <div class="grant-card">
                        <div class="logo-con">
                            <img src="{{ asset('images/logos/playstation.png') }}" alt="" />
                        </div>
                        <div class="rating">
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>playstation</p>
                    </div>
                    <div class="grant-card">
                        <div class="logo-con">
                            <img src="{{ asset('images/logos/app_store.png') }}" alt="" />
                        </div>
                        <div class="rating">
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>App Store</p>
                    </div>
                    <div class="grant-card">
                        <div class="logo-con">
                            <img src="{{ asset('images/logos/envato.png') }}" alt="" />
                        </div>
                        <div class="rating">
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>Envato</p>
                    </div>
                    <div class="grant-card">
                        <div class="logo-con">
                            <img src="{{ asset('images/logos/google.png') }}" alt="" />
                        </div>
                        <div class="rating">
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>Google</p>
                    </div>
                    <div class="grant-card">
                        <div class="logo-con">
                            <img src="{{ asset('images/logos/ms_xbox.png') }}" alt="" />
                        </div>
                        <div class="rating">
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>Xbox</p>
                    </div>
                    <div class="grant-card">
                        <div class="logo-con">
                            <img src="{{ asset('images/logos/airbnb.png') }}" alt="" />
                        </div>
                        <div class="rating">
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>Air Bnb</p>
                    </div>
                    <div class="grant-card">
                        <div class="logo-con">
                            <img src="{{ asset('images/logos/intel.png') }}" alt="" />
                        </div>
                        <div class="rating">
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star colored" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>Intel</p>
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
