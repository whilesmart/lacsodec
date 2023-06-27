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
                            @foreach ($cso_domains as $domain)
                                <li><a href="/">{{ $domain->name }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </aside>
                <div class="main-content">
                    <div class="cso-top">
                        <a href="" class="custom-button secondary">Register CSO</a>
                    </div>
                    <div class="cso-library-grid">
                        @foreach ($csos as $cso)
                            <a href="{{ route('cso-directory-details', ['cso' => $cso->id]) }}" class="cso-card">
                                <img src="{{ asset($cso->image) }}" alt="" />
                                <h2>{{ $cso->name }}</h2>
                                <p>{{ $cso->domain }}</p>
                            </a>
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
