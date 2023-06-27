<x-layouts.app>
    <div class="cso-directory-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                CSO Directory
            @endslot
        @endcomponent

        <section class="cso-directory-section">
            <div class="con">
                <div class="main-content">
                    <div class="cso-directory-grid">
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
