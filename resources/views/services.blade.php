<x-layouts.app>
    <div class="services-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{__('services.Services')}}
            @endslot
        @endcomponent

        <section>
            <div class="con">
                <div class="services-grid">
                    <a href="/" class="service">
                        S5: <br>
                        {{__('services.Legal Advisory & support')}}
                    </a>
                    <a href="/" class="service">
                        S4: <br>
                        {{__('services.Financial Management Support')}}
                    </a>
                    <a href="/" class="service">{{__('services.CSO Directories')}}</a>
                    <a href="/" class="service">{{__('services.Research and Documentation')}}</a>
                    <a href="/" class="service">{{__('services.Capacity Development')}}</a>
                    <a href="/" class="service">{{__('services.CSO Media Centre')}}</a>
                    <a href="/" class="service">{{__('services.CSO Annual Conference')}}</a>
                    <a href="/" class="service">{{__('services.Public Policy Watch')}}</a>
                    <a href="/" class="service">{{__('services.Community Dialogue')}}</a>
                    <a href="/" class="service">{{__('services.ICT4D and Biz Incubation Hub')}}</a>
                    <a href="/" class="service">{{__('services.Small Grant Scheme')}}</a>
                    <a href="/" class="service">{{__('services.Meals')}}</a>
                    <a href="/" class="service">{{__('services.Lodging Facilities')}}</a>
                    <a href="/" class="service">{{__('services.Children Parliament')}}</a>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
