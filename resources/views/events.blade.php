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
            </div>
        </section>

    </div>
</x-layouts.app>
