<x-layouts.app>
    <div class="lodge-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{__('lodge.Lodge')}}
            @endslot
        @endcomponent

        <section class="lodge-section">
            <div class="con">
                <aside>
                    <div class="aside-section">
                        <div class="top">
                            <h3>{{__('lodge.Filters')}}</h3>
                        </div>
                        <form class="filters" action="{{ route('lodge') }}" method="GET">
                            <div class="sub">
                                <h4>Type</h4>
                                <select name="type" id="">
                                    <option value="" disabled hidden selected>{{__('cso.Choose')}}</option>
                                    <option value="hall">Hall</option>
                                    <option value="room">Room</option>
                                </select>
                            </div>
                            <div class="sub">
                                <h4>{{__('lodge.equipments')}}</h4>
                                <ul>
                                    <li>
                                        <div class="left"><input type="checkbox" name="equipment_names[]" value="swimming pool"
                                                id="swimming-pool">
                                            <label for="swimming-pool">{{__('lodge.swimming pool')}}</label>
                                        </div>
                                        <div class="right">16</div>
                                    </li>
                                    <li>
                                        <div class="left"><input type="checkbox" name="equipment_names[]" value="smoking" id="smoking">
                                            <label for="smoking">{{__('lodge.smoking')}}</label>
                                        </div>
                                        <div class="right">26</div>
                                    </li>
                                    <li>
                                        <div class="left"><input type="checkbox" name="equipment_names[]" value="wifi" id="wifi">
                                            <label for="wifi">wifi</label>
                                        </div>
                                        <div class="right">216</div>
                                    </li>
                                    <li>
                                        <div class="left"><input type="checkbox" name="equipment_names[]" value="restaurant" id="restaurant">
                                            <label for="restaurant">restaurant</label>
                                        </div>
                                        <div class="right">26</div>
                                    </li>
                                    <li>
                                        <div class="left"><input type="checkbox" name="equipment_names[]" value="parking" id="parking">
                                            <label for="parking">parking</label>
                                        </div>
                                        <div class="right">26</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub">
                                <button type="submit" class="custom-button primary">{{__('lodge.Filter')}}</button>
                            </div>
                        </form>
                    </div>
                </aside>
                <div class="main-content">
                    <div class="lodges">
                        @foreach ($accomodations as $accomodation)
                            <div class="lodge-card">
                            @if (count($accomodation->attachment) > 0)
                            <img src="{{ asset($accomodation->attachment[0]->url()) }}" alt="">
                            @else
                            <img src="{{ asset('images/lodge/lodge-1.jpg') }}" alt="">
                            @endif
                                <div class="content">
                                    <h2>{{ $accomodation->name }}</h2>
                                    <div class="location">
                                        <div class="sub">{{ $accomodation->city }}</div>
                                        <div class="sub">{{ $accomodation->quarter }}</div>
                                    </div>
                                    <!-- <p>{{ $accomodation->description }}</p> -->
                                    @if ($accomodation->available)
                                    <p>{{__('lodge.Status')}}: <b>{{__('lodge.available')}}</b></p>
                                    @endif
                                    <p>Type: <b>{{$accomodation->type}}</b></p>
                                    <a href="{{ route('lodge-details', ['accomodation' => $accomodation->id]) }}"
                                        class="custom-button primary">{{__('lodge.View details')}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination">
                        {{ $accomodations->links() }}
                    </div>
                </div>

            </div>
        </section>

    </div>
</x-layouts.app>
