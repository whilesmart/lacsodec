<x-layouts.app>
    <div class="expert-directory-details-page">
        <!-- breadcrumb -->
        <div class="top"></div>

        <section class="expert-directory-details-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset($expert->image) }}" alt="" class="top-image">
                    {{-- <h1>{{$expert->user->name}}</h1> --}}
                    <h2>{{ $expert->position }}</h2>
                    <h4>{{__('experts.Nationality')}}: {{ $expert->nationality }}</h4>
                    <h4>{{__('experts.Language')}}: {{ $expert->language }}</h4>
                    <h4>{{__('experts.Company')}}: {{ $expert->company }}</h4>
                    <br>
                    <p>{{ $expert->details }}</p>
                </div>
                <aside>
                    <x-donation-card />
                    <x-latest-cso />
                </aside>
            </div>
        </section>

        <section class="other-expert-section">
            <div class="con">
                <h2>{{__('experts.Other Experts')}}</h2>
                <div class="expert-grid">
                    @foreach ($otherExperts as $otherExpert)
                        <a href="{{ route('expert-directory-details', ['expert' => $expert->id]) }}"
                            class="expert-card">
                            <img src="{{ asset($expert->image) }}" alt="">
                            <h4>{{ $expert->user->name }}</h4>
                            <h5>{{ $expert->position }}</h5>
                            <div class="flex">
                                <div class="left">
                                    <span>{{ $expert->sex }}</span> <span>{{ $expert->work_duration }}</span>
                                </div>
                                <div class="status {{ $expert->status }}">{{ $expert->status }}</div>
                            </div>
                            <p>{{ $expert->location }} - {{ $expert->nationality }} - {{ $expert->company }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
