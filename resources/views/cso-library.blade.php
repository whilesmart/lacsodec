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
                            @foreach ($cso_domains as $domain)
                            <li><a href="/">{{$domain->name}}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </aside>
                <div class="main-content">
                    <div class="cso-library-grid">
                        @foreach ($csos as $cso)
                        <div class="cso-card">
                            <img src="{{  config('app.url').$cso->image }}" alt="" />
                            <h2>{{$cso->name}}</h2>
                            <p>{{$cso->domain}}</p>
                        </div>
                        @endforeach
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
