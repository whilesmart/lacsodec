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

                    <div class="comments-sec">
                        <h3>Comments</h3>
                        @foreach ($blog->comments as $comment)
                        <div class="comment">
                            <p>{{$comment->comment}}</p>
                            <h4>by {{$comment->user->name}}</h4>
                            <h6>On {{$comment->created_at}}</h6>
                        </div>
                        @endforeach
                    </div>

                    <form action="{{ route('post-comment', ['blog' => $blog->slug]) }}" class="comment-form" method="POST">
                        @csrf
                        <div class="form-section">
                        <div class="field">
                                    <label for="comment">Your comment</label>
                                    <textarea name="comment"></textarea>
                                </div>
                        </div>
                        <div class="form-section">
                        <button type="submit" class="custom-button primary">Submit comment</button>
                    </div>
                    </form>
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
