<x-layouts.app>
    <div class="cso-directory-details-page">
        <!-- breadcrumb -->
        <div class="top"></div>

        <section class="cso-directory-details-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset($cso->image) }}" alt="" class="top-image">
                    <h1>{{ $cso->name }}</h1>
                    <h1>{{ $cso->partnership }}</h1>
                    <h4>{{__('cso.Registered in')}} <b>{{$cso->registration_year}}</b></h4>
                    <h5>{{__('cso.Status')}}: <b>{{$cso->status}}</b></h5>
		            <br>
                    <h5>{{__('cso.Vision')}}:</h5>
                    <p>{{$cso->vision_statement}}</p>
                    <h5>{{__('cso.Mission')}}:</h5>
                    <p><b>{{$cso->mission}}</b></p>
                    <h5>{{__('cso.Background and track record')}}:</h5>
                    <p>{{$cso->background}}</p>
                    <div class="title">
                        <h2>{{__('cso.CSO's Contacts')}}</h2>
                        <a class="custom-button primary" href="mailto:{{$cso->email}}"><span>{{__('cso.Write email')}}</span></a>
                    </div>
                    <ul>
                        <li><b>{{__('cso.Email address')}}:</b> {{$cso->email}}</li>
                        <li><b>{{__('cso.Website')}}:</b> <a href="{{$cso->website}}" target="_blank">{{$cso->website}}</a></li>
                        <li><b>{{__('cso.Phone number')}}:</b> {{$cso->contact_person_tel}}</li>
                    </ul>
                </div>
                <aside>
                    <x-donation-card />
                    <x-latest-cso :csos="$latestCsos" />
                </aside>
            </div>
        </section>

        <section class="other-cso-section">
            <div class="con">
                <h2>{{ __('cso.Other CSOs') }}</h2>
                <div class="cso-grid">
                    @foreach ($otherCsos as $otherCso)
                    <a href="{{ route('cso-directory-details', ['cso' => $otherCso->id]) }}" class="cso-card">
                        <img src="{{ asset($otherCso->image) }}" alt="" />
                        <h2>{{ $otherCso->name }}</h2>
                        <p>{{ $otherCso->domain }}</p>
                    </a>
                    @endforeach
                </div>
        </section>

    </div>
</x-layouts.app>
