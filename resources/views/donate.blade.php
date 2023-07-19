<x-layouts.app>
    <div class="donate-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{__('donate.Donate')}}
            @endslot
        @endcomponent

        <section class="donate-section">
            <div class="con">
            </div>
        </section>

    </div>
</x-layouts.app>
