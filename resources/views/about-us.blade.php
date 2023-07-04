<x-layouts.app>
    <div class="about-us-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                About us
            @endslot
        @endcomponent

        <section class="about-section-1">
            <div class="con">
                <div class="left">
                    <div class="images">
                        <img src="{{ asset('images/home-img-1.png') }}" alt="" />
                        <img src="{{ asset('images/home-img-2.png') }}" alt="" />
                    </div>
                    <p><b>
                            Lorem ipsum dolor sit amet consectetur. Adipiscing vel varius nam a aliquet sed aliquam eu.
                            Enim
                            sed non duis in tincidunt. Posuere eu quis odio ju.</b></p>
                    <p>
                        Duis et nisl at tellus nisl. Venenatis suscipit posuere diam orci ornare habitasse. Eget sem sed
                        aliquet ultrices enim viverra velit. Dolor dapibus tincidunt risus id. Enim in egestas nibh
                        risus
                        ullamcorper sapien. Eleifend tellus tristique mi lorem. Ipsum tempus dictumst platea amet at vel
                        est
                        felis volutpat. Vulputate condimentum sit neque ullamcorper egestas. Iaculis molestie aliquam
                        quis
                        elementum erat risus. Bibendum risus purus nullam sed bibendum lacus.</p>
                    <p>Duis tempus diam eu pretium purus facilisi quam. Sapien velit ante dignissim urna. Mattis
                        praesent
                        faucibus tellus laoreet nibh felis amet eu odio.</p>
                </div>
                <div class="right">
                    <img src="{{ asset('images/home-img-2.png') }}" alt="" />
                </div>
            </div>
        </section>

        <section class="about-section-2">
            <div class="con">
                <div class="left">
                    <h1>About Us</h1>
                    <p>tis suscipit posuere diam orci ornare habitasse. Eget sem sed aliquet ultrices enim viverra
                        velit. Dolor dapibus tincidunt risus id. Enim in egestas nibh risus ullamcorper sapien. Eleifend
                        tellus tristique mi lorem. Ipsum tempus dictumst platea amet at vel est felis vol</p>

                    <ul>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <div class="content">
                                <h3>Tis suscipit posuere diam</h3>
                                <p>tis suscipit posuere diam orci ornare habitasse. Eget sem sed aliquet ultrices enim
                                    viverra velit. Dolor dapibus tincidunt risus id. Enim in egestas nibh.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <div class="content">
                                <h3>Tis suscipit posuere diam</h3>
                                <p>tis suscipit posuere diam orci ornare habitasse. Eget sem sed aliquet ultrices enim
                                    viverra velit. Dolor dapibus tincidunt risus id. Enim in egestas nibh.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <div class="members">
                        <h3>8,000</h3>
                        <p>Members</p>
                    </div>
                    <img src="{{ asset('images/about-building.png') }}" alt="" />
                </div>
            </div>
        </section>

        <x-numbers />

        <section class="about-section-3">
            <div class="con">
                <div class="left">
                    <h1>About Us</h1>
                    <p>tis suscipit posuere diam orci ornare habitasse. Eget sem sed aliquet ultrices enim viverra
                        velit. Dolor dapibus tincidunt risus id. Enim in egestas nibh risus ullamcorper sapien. Eleifend
                        tellus tristique mi lorem. Ipsum tempus dictumst platea amet at vel est felis vol</p>

                    <ul>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <div class="content">
                                <h3>Tis suscipit posuere diam</h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <div class="content">
                                <h3>Tis suscipit posuere diam</h3>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <div class="tabs">
                        <div class="tab active">Our Mission</div>
                        <div class="tab">Our Vision</div>
                    </div>
                    <div class="content">
                        <p>tis suscipit posuere diam orci ornare habitasse. Eget sem sed aliquet ultrices enim viverra
                            velit. Dolor dapibus tincidunt risus id. Enim in egestas nibh. <br><br>
                            tis suscipit posuere diam orci ornare habitasse. Eget sem sed aliquet ultrices enim viverra
                            velit. Dolor dapibus tincidunt risus id. Enim in egestas nibh risus ullamcorper sapien.
                            Eleifend tellus tristique mi lorem. Ipsum tempus dictumst platea amet at vel est felis vol
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-section">
            <div class="con">
                <h2>Our team</h2>

                <div class="team-grid">
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
            </div>
        </section>

    </div>
</x-layouts.app>
