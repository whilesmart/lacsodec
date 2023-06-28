<x-layouts.app>
    <div class="expert-directory-details-page">
        <!-- breadcrumb -->
        <div class="top"></div>

        <section class="expert-directory-details-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset($expert->image) }}" alt="" class="top-image">
                    <h1>{{$expert->user->name}}</h1>
                    <h2>{{$expert->position}}</h2>
                    <h4>Nationality: {{$expert->nationality}}</h4>
                    <h4>Language: {{$expert->language}}</h4>
                    <h4>Company: {{$expert->company}}</h4>
                    <br>
                    <p>{{$expert->details}}</p>
                </div>
                <aside>
                    <x-donation-card />
                    <x-latest-cso />
                </aside>
            </div>
        </section>

        <section class="other-expert-section">
            <div class="con">
                <h2>Other Expert</h2>
                <div class="expert-grid">
                    @foreach ($otherExperts as $otherExpert)
                    <div class="member-card">
                        <img src="{{ asset($otherExpert->image) }}" alt="">
                        <h4>{{$otherExpert->user->name}}</h4>
                        <p>{{$otherExpert->position}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
