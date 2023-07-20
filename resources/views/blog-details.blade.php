<x-layouts.app>
    <div class="impact-stories-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{$blog->title}}
            @endslot
        @endcomponent

        <section class="impact-stories-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset($blog->image) }}" alt="" />
                    <h1>{{$blog->title}}</h1>
                    <div class="info-container">
                        @if ($blog->user)
                        <div class="info">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <p>Posted By: {{$blog->user->name}}</p>
                        </div>
                        @endif
                        <div class="info">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <p>{{$blog->created_at}}</p>
                        </div>
                    </div>
                    <p>{{$blog->description}}</p>
                    {!! $blog->content !!}
                </div>
                <aside>
                    <div class="aside-section">
                        <div class="top">
                            <h3>Previous stories</h3>
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
