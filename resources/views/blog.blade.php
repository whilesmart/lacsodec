<x-layouts.app>
    <div class="blog-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Blog
            @endslot
        @endcomponent

        <section class="blog-section">
            <div class="con">
                <div class="main-content">
                    <div class="publications-grid">
                        @foreach ($blogs as $blog) 
                        <div class="publication">
                            <img src="{{ asset($blog->image) }}" alt="" />
                            <h2>{{$blog->title}}</h2>
                            <p>{{$blog->description}}</p>
                            <a href="{{ route('blog-details', ['blog' => $blog->slug]) }}">Read More</a>
                        </div>
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
                <aside>
                    <div class="aside-section">
                        <div class="top">
                            <h3>Featured</h3>
                        </div>
                        @foreach ($featuredBlogs as $blog)
                        <div class="publication">
                        <img src="{{ asset($blog->image) }}" alt="" />
                            <h2>{{$blog->title}}</h2>
                            <p>{{$blog->description}}</p>
                            <a href="{{ route('blog-details', ['blog' => $blog->slug]) }}">Read More</a>
                        </div>
                        @endforeach
                    </div>
                </aside>
            </div>
        </section>

    </div>
</x-layouts.app>
