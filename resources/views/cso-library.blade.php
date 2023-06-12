<x-layouts.app>
    <div class="cso-library-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                CSO Library
            @endslot
        @endcomponent

        <section class="cso-library-section">
            <div class="con">
                <aside>
                    <nav>
                        <ul>
                            <li>
                                <a href="/">Environmental resources</a>
                                <ul>
                                    <li><a href="/">Lorem, ipsum</a></li>
                                    <li><a href="/">Lorem, ipsum</a></li>
                                    <li><a href="/">Lorem, ipsum</a></li>
                                    <li><a href="/">Lorem, ipsum</a></li>
                                    <li><a href="/">Lorem, ipsum</a></li>
                                </ul>
                            </li>
                            <li><a href="/">Peacebuilding resource</a></li>
                            <li><a href="/">Gender related tresources</a></li>
                            <li><a href="/">Water management</a></li>
                            <li><a href="/">ICT resources</a></li>
                        </ul>
                    </nav>
                </aside>
                <div class="main-content">
                    <div class="cso-library-grid">
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
                        <div class="cso-card">
                            <img src="{{ asset('images/library/library-5.png') }}" alt="" />
                            <h2>Orange Fondation</h2>
                            <p>Close Partner</p>
                        </div>
                        <div class="cso-card">
                            <img src="{{ asset('images/library/library-6.png') }}" alt="" />
                            <h2>Street Child</h2>
                            <p>Close Partner</p>
                        </div>
                        <div class="cso-card">
                            <img src="{{ asset('images/library/library-7.png') }}" alt="" />
                            <h2>United States Embassy</h2>
                            <p>Close Partner</p>
                        </div>
                        <div class="cso-card">
                            <img src="{{ asset('images/library/library-8.png') }}" alt="" />
                            <h2>World Food Programme</h2>
                            <p>Close Partner</p>
                        </div>
                        <div class="cso-card">
                            <img src="{{ asset('images/library/library-9.png') }}" alt="" />
                            <h2>UNDPA</h2>
                            <p>Close Partner</p>
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
