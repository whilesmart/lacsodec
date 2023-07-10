<x-layouts.app>
    <div class="lodge-details-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Lodge
            @endslot
        @endcomponent

        <section class="lodge-details-section">
            <div class="con">
                <div class="main-content">
                    <h1>{{ $accomodation->name }}</h1>
                    <div class="rating">
                        <i class="fa fa-star colored" aria-hidden="true"></i>
                        <i class="fa fa-star colored" aria-hidden="true"></i>
                        <i class="fa fa-star colored" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="location">
                        <div class="sub">{{ $accomodation->city }}</div>
                        <div class="sub">{{ $accomodation->quarter }}</div>
                    </div>

                    <div class="images">
                        @foreach ($accomodation->attachment as $image)
                            @if ($loop->first)
                                <img src="{{ asset($image->url()) }}" alt="">
                            @endif
                        @endforeach

                        <div class="sub">
                            @foreach ($accomodation->attachment as $image)
                                @if ($loop->iteration == 2)
                                    <img src="{{ asset($image->url()) }}" alt="">
                                @endif
                                @if ($loop->iteration == 3)
                                    <!-- Button trigger modal -->
                                    <div class="more" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                        <img src="{{ asset($image->url()) }}" alt="">
                                        <div class="content">
                                            +{{ $loop->count }} other photos
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <p>{{ $accomodation->description }}</p>


                    <!-- Image gallery Modal -->
                    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="carouselExample" class="carousel slide">
                                        <div class="carousel-inner">
                                            @foreach ($accomodation->attachment as $image)
                                                <div class="carousel-item active">
                                                    <img src="{{ asset($image->url()) }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExample" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExample" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <aside>
                    <div class="aside-section">
                        <div class="top">
                            <h3>Reserve</h3>
                        </div>
                        <form action="" class="book-form">
                            <div class="field">
                                <label for="">Arrival</label>
                                <input type="date" name="" id="">
                            </div>
                            <div class="field">
                                <label for="">Departure</label>
                                <input type="date" name="" id="">
                            </div>
                            <button type="button" class="custom-button primary" data-bs-toggle="modal"
                                data-bs-target="#bookingModal">Book now</button>
                        </form>
                    </div>
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
                    </div>
                </aside>

                <!-- Confirm booking details Modal -->
                <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="booking-modal">
                                    <h3>Confim Reservation</h3>

                                    <h2>RÉSIDENCE MARTHA</h2>
                                    <p>Studio avec Balcon</p>

                                    <div class="info">
                                        <p>Total Price for 4 nights</p>
                                        <h1>XAF 84,000</h1>
                                    </div>

                                    <a href="" class="custom-button secondary">Confirm Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
