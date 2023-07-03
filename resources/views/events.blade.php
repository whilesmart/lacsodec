<x-layouts.app>
    <div class="events-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Events/Trainings
            @endslot
        @endcomponent

        <section class="events-section">
            <div class="con">
            <div class="events-top">
                        <a href="{{ route('create-event') }}" class="custom-button secondary"><span>Create event</span></a>
                    </div>
                <div class="events-grid">
                    @foreach ($events as $event)
                    <div class="event-card">
                        <div class="img-con">
                            <img src="{{ asset('images/publication-1.png') }}" alt="" />
                            <div class="type event">{{$event->type}}</div>
                        </div>
                        <div class="flex">
                            <div class="label sponsored">{{$event->entrance}}</div>
                            <p>{{$event->date}}</p>
                        </div>
                        <div class="content">
                            <p>{{$event->name}}</p>
                            <a href="{{$event->url}}" target="__blank" class="custom-button primary"><span>Participate</span></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination">
                    {{$events->links()}}
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
