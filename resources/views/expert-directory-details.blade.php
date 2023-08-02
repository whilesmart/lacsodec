<x-layouts.app>
    <div class="expert-directory-details-page">
        <!-- breadcrumb -->
        <div class="top"></div>

        <section class="expert-directory-details-section">
            <div class="con">
                <div class="main-content">
                    <div class="top-card">
                        <img src="{{ asset($expert->image) }}" alt="" class="top-image">
                        <div class="content">
                            <h1>{{ $expert->user->name }}</h1>
                            <h2>{{ $expert->position }}</h2>
                            <h3>{{ $expert->location }}, {{ $expert->nationality }}</h3>
                            <ul>
                                <li><b>{{ __('experts.Nationality') }}: </b> {{ $expert->nationality }}</li>
                                <li><b>{{ __('experts.Language') }}s: </b>
                                    @foreach ($expert->languages as $lang)
                                        {{ $lang->name }},
                                    @endforeach
                                </li>
                                <li><b>{{ __('experts.Company') }}:</b> {{ $expert->company }}</li>
                                <li><b>Experience:</b> {{ $expert->work_duration }}</li>
                                <li><b>Gender:</b> {{ $expert->sex }}</li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="bio">
                        <h2>Biography</h2>
                        <p>{{ $expert->details }}</p>
                    </div>
                    <x-contact-expert name="{{ $expert->user->name }}" expertId="{{$expert->id}}" />
                </div>
                <aside>
                    <x-donation-card />
                    <x-latest-cso :csos="$latestCsos" />
                </aside>
            </div>
        </section>

        <section class="other-expert-section">
            <div class="con">
                <h2>{{ __('experts.Other Experts') }}</h2>
                <div class="expert-grid">
                    @foreach ($otherExperts as $otherExpert)
                        <a href="{{ route('expert-directory-details', ['expert' => $otherExpert->id]) }}"
                            class="expert-card">
                            <img src="{{ asset($otherExpert->image) }}" alt="">
                            <h4>{{ $otherExpert->user->name }}</h4>
                            <h5>{{ $otherExpert->position }}</h5>
                            <div class="flex">
                                <div class="left">
                                    <span>{{ $otherExpert->sex }}</span>
                                    <span>{{ $otherExpert->work_duration }}</span>
                                </div>
                                <div class="status {{ $expert->status }}">{{ $otherExpert->status }}</div>
                            </div>
                            <p>{{ $otherExpert->location }} - {{ $otherExpert->nationality }} -
                                {{ $otherExpert->company }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
