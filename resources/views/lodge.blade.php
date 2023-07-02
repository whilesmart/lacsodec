<x-layouts.app>
    <div class="lodge-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Lodge
            @endslot
        @endcomponent

        <section class="lodge-section">
            <div class="con">
                <div class="main-content">
                    <img src="{{ asset('images/lodge-breadcrumb.png') }}" alt="" />
                    <h1>Latest accomodations from LACSODEC</h1>
                    @foreach ($accomodations as $accomodation)
                    <p>{{$accomodation->name}}</p>
                    <a href="" class="link">More details</a>
                    <div class="images">
                        @foreach ($accomodation->attachment as $image)
                        <img src="{{ asset($image->url()) }}" alt="" />
                        @endforeach
                    </div>
                    <p>{{$accomodation->description}}</p>
                    @endforeach

                </div>
                <aside>
                    <div class="aside-section">
                        <div class="top">
                            <h3>Home Facilities</h3>
                        </div>
                        <div class="facilities">
                            <div class="info">
                                <img src="{{ asset('images/icons/wifi.svg') }}" alt="" />
                                <p>Free wifi</p>
                            </div>
                            <div class="info">
                                <img src="{{ asset('images/icons/bottle.svg') }}" alt="" />
                                <p>Baby Shower</p>
                            </div>
                            <div class="info">
                                <img src="{{ asset('images/icons/save.svg') }}" alt="" />
                                <p>Watching machine</p>
                            </div>
                            <div class="info">
                                <img src="{{ asset('images/icons/no-smooking.svg') }}" alt="" />
                                <p>No Smoking</p>
                            </div>
                        </div>
                        @foreach ($accomodations as $accomodation)
                        <div class="publication">
                            <img src="{{ asset($accomodation->attachment->first()->url()) }}" alt="" />
                            <h2>{{$accomodation->name}}</h2>
                            <a href="">Details</a>
                        </div>
                        @endforeach
                    </div>
                </aside>
            </div>
        </section>

    </div>
</x-layouts.app>
