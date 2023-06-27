<x-layouts.app>
    <div class="expert-directory-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Expert Directory
            @endslot
        @endcomponent

        <section class="expert-directory-section">
            <div class="con">
                <div class="main-content">
                    <div class="expert-directory-grid">
                        @foreach ($experts as $expert)
                            <a href="{{ route('expert-directory-details', ['expert' => $expert->id]) }}"
                                class="member-card">
                                <img src="{{ asset($expert->image) }}" alt="">
                                <h4>{{ $expert->user->name }}</h4>
                                <p>IT Director</p>
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
