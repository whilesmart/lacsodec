<x-layouts.app>
    <div class="expert-directory-details-page">
        <!-- breadcrumb -->
        <div class="top"></div>

        <section class="expert-directory-details-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset($expert->image) }}" alt="" class="top-image">
                    <h1>{{$expert->user->name}}</h1>
                    <h2>Dog Trainer</h2>
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
                        <img src="{{ asset($expert->image) }}" alt="">
                        <h4>{{$expert->user->name}}</h4>
                        <p>IT Director</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
