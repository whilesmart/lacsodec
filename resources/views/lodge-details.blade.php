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

                    @if ($accomodation->available)
                        <p>Status: <b>available</b></p>
                    @endif
                    <p>Type: <b>{{$accomodation->type}}</b></p>
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
                            <button type="button" class="custom-button primary" data-bs-toggle="modal"
                                data-bs-target="#bookingModal">Book now</button>
                        </form>
                    </div>
                    <div class="aside-section">
                        <div class="top">
                            <h3>Home Facilities</h3>
                        </div>
                        <div class="facilities">
                            @foreach ($accomodation->equipment as $equipment)
                            <div class="info">
                                <!-- <img src="{{ asset('images/icons/wifi.svg') }}" alt="" /> -->
                                <p>{{$equipment->name}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </aside>

                <!-- Confirm booking details Modal -->
                <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form class="booking-modal" action="{{ route('book-lodge', ['accomodation' => $accomodation->id]) }}" method="POST">
                                    @csrf
                                    <h3>Confim Reservation</h3>

                                    <h2>{{ $accomodation->name }}</h2>
                                    <p>{{ $accomodation->type }}</p>

                                    <div class="field">
                                <label for="arrival">Arrival *</label>
                                <input type="date" name="arrival" id="arrival" required>
                            </div>
                            <div class="field">
                                <label for="departure">Departure *</label>
                                <input type="date" name="departure" id="departure" required>
                            </div>
                            <div class="field">
                                <label for="name">Full name *</label>
                                <input type="text" name="name" id="" required>
                            </div>
                            <div class="field">
                                <label for="email">Email *</label>
                                <input type="email" name="email" id="">
                            </div>
                            <div class="field">
                                <label for="phone">Phone number *</label>
                                <input type="tel" name="phone" id="" required>
                            </div>
                            <div class="field">
                                <label for="cause">Select a cause to support</label>
                                <select name="cause" id="">
                                    <option value="climate change">Climate change</option>
                                    <option value="" disabled hidden selected>{{__('cso.Choose')}}</option>
                                </select>
                            </div>

                                    <div class="info">
                                        <p>Total Price for <span id="nights">0</span> nights</p>
                                        <h1 id="total-price">XAF {{$accomodation->price}}</h1>
                                    </div>

                                    <button type="submit" class="custom-button secondary">Book and pay upon arrival</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>

<script>
    // Calculate total price based on arrival and departure dates
    const arrivalInput = document.getElementById('arrival');
    const departureInput = document.getElementById('departure');
    const totalPriceElement = document.getElementById('total-price');
    const nights = document.getElementById('nights');

    function calculateTotalPrice() {
        const arrivalDate = new Date(arrivalInput.value);
        const departureDate = new Date(departureInput.value);
        var accomodation = {!! $accomodation->toJson() !!};
        const price = accomodation.price;
        const differenceInDays = Math.ceil((departureDate - arrivalDate) / (1000 * 60 * 60 * 24));
        const totalPrice = differenceInDays * price;
        totalPriceElement.textContent = `XAF ${totalPrice??0}`;
        nights.textContent = differenceInDays??0;
    }

    // Listen for changes in arrival and departure date inputs
    arrivalInput.addEventListener('change', calculateTotalPrice);
    departureInput.addEventListener('change', calculateTotalPrice);
</script>
