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
                    <div class="cso-directory-top">
                        <a href="{{ route('register-cso') }}" class="custom-button secondary"><span>Register
                                CSO</span></a>
                    </div>
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
                        {{$csos->links()}}
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
