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
                <div class="events-grid">
                    @foreach ($events as $event)
                    <div href="{{ route('event-participate', ['event' => $event->id]) }}" class="event-card">
                        <div class="img-con">
                            <img src="{{ asset($event->image) }}" alt="" />
                            <div class="type event">{{$event->type}}</div>
                        </div>
                        <div class="flex">
                            <div class="label sponsored">{{$event->entrance}}</div>
                            <p>{{$event->date}}</p>
                        </div>
                        <div class="content">
                            <p>{{$event->name}}</p>
                            @if ($event->date >= now())
                            <a href="{{ route('event-participate', ['event' => $event->id]) }}" class="custom-button primary"><span>Participate</span></a>
                            @else
                            <a href="{{ route('event-participate', ['event' => $event->id]) }}" class="custom-button primary"><span>See event</span></a>
                            @endif
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
