<x-layouts.app>
    <div class="cso-directory-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{ __('cso.CSO Directory') }}
            @endslot
        @endcomponent

        <section class="cso-directory-section">
            <div class="con">
                <aside>
                    <nav>
                        <ul>
                            <li><a href="/cso-directory">{{ __('cso.All') }}</a></li>
                            @foreach ($cso_domains as $domain)
                                @if (Lang::locale() == 'en')
                                    <li><a href="/cso-directory?domain={{ $domain->name }}">{{ $domain->name }}
                                            ({{ $domain->csoNumber }})
                                        </a></li>
                                @else
                                    <li><a href="/cso-directory?domain={{ $domain->name }}">{{ $domain->french_name }}
                                            ({{ $domain->csoNumber }})</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </nav>
                </aside>
                <div class="main-content">
                    <div class="cso-directory-top">
                        <a href="{{ route('register-cso') }}"
                            class="custom-button secondary"><span>{{ __('cso.Register CSO') }}</span></a>
                    </div>
                    <div class="cso-directory-grid">
                        @foreach ($csos as $cso)
                            <a href="{{ route('cso-directory-details', ['cso' => $cso->id]) }}" class="cso-card">
                                <img src="{{ asset($cso->image) }}" alt="" />
                                <h2>{{ $cso->name }}</h2>
                                @if (Lang::locale() == 'en')
                                    <p>{{ $cso->domain }}</p>
                                @else
                                    <p>{{ $cso_domains->firstWhere('name', $cso->domain)->french_name }}</p>
                                @endif
                            </a>
                        @endforeach
                    </div>
                    <div class="pagination">
                        {{ $csos->links() }}
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
