<x-layouts.app>
    <div class="about-us-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Aboout us
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
                    WHO WE ARE
</b></p>
                    <p>
                    The LUKMEF Africa Civil Society Development Centre (LACSODEC) is a Civil Society Organization (CSO) service providing agency facilitating knowledge acquisition, dialogue among and between CSOs and their networks, mutualization of resources, information sharing and promotion of fair access to resources by CSOs of all categories (levels) using the principle of need, equality and equity with the population as final beneficiaries in mind.
</p>
                    <p>LACSODEC was founded in {year} by Tanyi Christian under the LUKMEF vision for Sustainable Development and Empowerment of communities and other local civil society actors to improve on service delivery. LACSODEC is located in NGO Street, Molyko – Buea, in the SW Region of Cameroon with registration number {insert here}. </p>
                </div>
                <div class="right">
                    <img src="{{ asset('images/home-img-2.png') }}" alt="" />
                </div>
            </div>
        </section>

        <section class="about-section-2">
            <div class="con">
                <div class="left">
                    <h1>Our vision</h1>
                    <p>To build a dependable and impactful Civil Society in Africa</p>
                    <h1>Our Mission</h1>
                    <p>Mission is to strengthen the institutional and operational capacity of CSOs, improve their operating environment in order to amplify their voices, and improve performance in addressing diverse issues of human development at local, national and regional level in West Africa and the Lake Chad Basin Countries using a rights-based approach.
</p>
                    <!-- <ul>
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
                    </ul> -->
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
                    <h1>WHY WE EXIST</h1>
                    <ul>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <div class="content">
                                <h3>The 1990 law on Associations and the 1999 Law on NGOs are the two fundamental legal instruments used by the civil society in Cameroon.</h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <div class="content">
                                <h3>Within the framework of these two laws, over 55,602 organizations are registered in the books of the ministry of territorial administration at sub divisional (DO) and divisional levels (SDO) in Cameroon (Ref CSOSI-2019 by USAID).</h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <div class="content">
                                <h3>According to the National Governance Program, approximately 500,000 grassroots community organizations, private associations, common initiative groups, development committees, and economic interest groups, were thought to exist in 2019.</h3>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <div class="tabs">
                        <div class="tab active">WHAT WE DO</div>
                        <div class="tab">OUR APPROACH</div>
                    </div>
                    <div class="content">
                        <p>We facilitate knowledge acquisition, dialogue among and between CSOs and their networks, mutualization of resources, information sharing and promotion of fair access to resources by CSOs of all categories (levels) using the principle of need, equality and equity with the population as final beneficiaries in mind.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-section">
            <div class="con">
                <h2>Our team</h2>

                <div class="team-grid">
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-1.png') }}" alt="">
                        <h4>Tanyi Christian</h4>
                        <p>Chief Executive Officer</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-2.png') }}" alt="">
                        <h4>Akwese Nkatmbi</h4>
                        <p>General Manager</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-3.png') }}" alt="">
                        <h4>Bate Godwill Bate</h4>
                        <p>Human Resource Manager</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-4.png') }}" alt="">
                        <h4>Ngwathe Modest</h4>
                        <p>Finance Manager</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-5.png') }}" alt="">
                        <h4>Chita Brine Chita</h4>
                        <p>IT Manager</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-6.png') }}" alt="">
                        <h4>Kolle</h4>
                        <p>Logistics Manager</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-6.png') }}" alt="">
                        <h4>Efeti Zita</h4>
                        <p>Facility Manager</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-6.png') }}" alt="">
                        <h4>Olive Bobga</h4>
                        <p>Gender Expert</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-6.png') }}" alt="">
                        <h4>Simine Borner</h4>
                        <p>Child Protection Expert</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-6.png') }}" alt="">
                        <h4>Wabo kevin</h4>
                        <p>MEAL Officer</p>
                    </div>
                    <div class="member">
                        <img src="{{ asset('images/team/team-member-6.png') }}" alt="">
                        <h4>Njie Yannick</h4>
                        <p>Security and Safety Officer</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
