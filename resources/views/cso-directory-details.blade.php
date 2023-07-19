<x-layouts.app>
    <div class="cso-directory-details-page">
        <!-- breadcrumb -->
        <div class="top"></div>

        <section class="cso-directory-details-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset($cso->image) }}" alt="" class="top-image">
                    <h1>{{$cso->name}}</h1>
                    <h1>{{$cso->partnership}}</h1>
                    <h4>Registered on <b>{{$cso->registration_year}}</b></h4>
                    <h5>Status: <b>{{$cso->status}}</b></h5>
                    <br>
                    <h6>Vision:</h6>
                    <p>{{$cso->vision_statement}}</p>
                    <h6>Mission:</h6>
                    <p><b>{{$cso->mission}}</b></p>
                    <h6>Background and track record:</h6>
                    <p><b>{{$cso->background}}</b></p>
                </div>
                <aside>
                    <x-donation-card />
                    <x-latest-cso :csos="$latestCsos" />
                </aside>
            </div>
        </section>

        <section class="other-cso-section">
            <div class="con">
                <h2>Other CSO</h2>
                <div class="cso-grid">
                    @foreach ($otherCsos as $otherCso)
                    <a href="{{ route('cso-directory-details', ['cso' => $otherCso->id]) }}" class="cso-card">
                        <img src="{{ asset($otherCso->image) }}" alt="" />
                        <h2>{{$otherCso->name}}</h2>
                        <p>{{$otherCso->domain}}</p>
                    </a>
                    @endforeach
            </div>
        </section>

    </div>
</x-layouts.app>
