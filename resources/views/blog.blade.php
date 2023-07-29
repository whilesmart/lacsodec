<x-layouts.app>
    <div class="blog-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{ __('blog.Blog') }}
            @endslot
        @endcomponent

        <section class="blog-section">
            <div class="con">
                <div class="main-content">
                    <div class="publications-grid">
                        @foreach ($blogs as $blog)
                            <div class="publication">
                                <img src="{{ asset($blog->image) }}" alt="" />
                                <h2>{{ $blog->title }}</h2>
                                <p>{{ $blog->description }}</p>
                                <a
                                    href="{{ route('blog-details', ['blog' => $blog->slug]) }}">{{ __('blog.Read More') }}</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination">
                        {{ $blogs->links() }}
                    </div>
                </div>
                <aside>
                    <div class="aside-section">
                        <div class="top">
                            <h3>{{ __('blog.Featured') }}</h3>
                        </div>
                        @foreach ($featuredBlogs as $blog)
                            <div class="publication">
                                <img src="{{ asset($blog->image) }}" alt="" />
                                <h2>{{ $blog->title }}</h2>
                                <p>{{ $blog->description }}</p>
                                <a
                                    href="{{ route('blog-details', ['blog' => $blog->slug]) }}">{{ __('blog.Read More') }}</a>
                            </div>
                        @endforeach
                    </div>
                </aside>
            </div>
        </section>

    </div>
</x-layouts.app>
