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
                    <h1>Star land hotel bastos</h1>
                    <div class="rating">
                        <i class="fa fa-star colored" aria-hidden="true"></i>
                        <i class="fa fa-star colored" aria-hidden="true"></i>
                        <i class="fa fa-star colored" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="location">
                        <div class="sub">Yaounde</div>
                        <div class="sub">Centre ville</div>
                    </div>

                    <div class="images">
                        <img src="{{ asset('images/lodge/lodge-1.jpg') }}" alt="">
                        <div class="sub">
                            <img src="{{ asset('images/lodge/lodge-2.jpg') }}" alt="">
                            <!-- Button trigger modal -->
                            <div class="more" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <img src="{{ asset('images/lodge/lodge-3.jpg') }}" alt="">
                                <div class="content">
                                    +6 other photos
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid accusamus placeat
                        suscipit vitae, tempore quasi, aut sequi, dicta blanditiis quo iste eum reprehenderit qui
                        minus sunt voluptates beatae quam.</p>


                    {{-- modal  --}}

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="carouselExample" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('images/lodge/lodge-1.jpg') }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/lodge/lodge-2.jpg') }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/lodge/lodge-3.jpg') }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/lodge/lodge-4.jpg') }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('images/lodge/lodge-5.jpg') }}" class="d-block w-100"
                                                    alt="...">
                                            </div>
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
                            <button type="submit" class="custom-button primary">Book now</button>
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
            </div>
        </section>

    </div>
</x-layouts.app>
