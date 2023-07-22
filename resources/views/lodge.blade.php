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
                                <h4>Location</h4>
                                <select name="location" id="">
                                    <option value="" disabled hidden selected>{{__('cso.Choose')}}</option>
                                    <option value="yaounde">Yaoundé</option>
                                    <option value="douala">Douala</option>
                                    <option value="buea">Buea</option>
                                    <option value="bamenda">Bamenda</option>
                                    <option value="all">{{__('lodge.All')}}</option>
                                </select>
                            </div>
                            <div class="sub">
                                <h4>{{__('lodge.Category')}}</h4>
                                <ul>
                                    <li>
                                        <div class="left">
                                            <input type="checkbox" name="star-1" id="star-1">
                                            <label for="star-1">1 {{__('lodge.star')}}</label>
                                        </div>
                                        <div class="right">4</div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <input type="checkbox" name="star-2" id="star-2">
                                            <label for="star-2">2 {{__('lodge.stars')}}</label>
                                        </div>
                                        <div class="right">6</div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <input type="checkbox" name="star-3" id="star-3">
                                            <label for="star-3">3 {{__('lodge.stars')}}</label>
                                        </div>
                                        <div class="right">21</div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <input type="checkbox" name="star-4" id="star-4">
                                            <label for="star-4">4 {{__('lodge.stars')}}</label>
                                        </div>
                                        <div class="right">14</div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <input type="checkbox" name="star-5" id="star-5">
                                            <label for="star-5">5 {{__('lodge.stars')}}</label>
                                        </div>
                                        <div class="right">1</div>
                                    </li>
                                    <li>
                                        <div class="left"><input type="checkbox" name="unclassified"
                                                id="unclassified">
                                            <label for="unclassified">{{__('lodge.unclassified')}}</label>
                                        </div>
                                        <div class="right">216</div>
                                    </li>
                                </ul>
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
                                    <p>{{ $accomodation->description }}</p>
                                    @if ($accomodation->available)
                                    <p>{{__('lodge.Status')}}: <b>{{__('lodge.available')}}</b></p>
                                    @endif
                                    <a href="{{ route('lodge-details', ['accomodation' => $accomodation->id]) }}"
                                        class="custom-button primary">{{__('lodge.View details')}}</a>
                                </div>
                                <div class="location">
                                    <div class="sub">{{ $accomodation->city ?? '' }}</div>
                                    <div class="sub">{{ $accomodation->quarter }}</div>
                                </div>
                                <p>{{ $accomodation->description }}</p>
                                <a href="{{ route('lodge-details', ['accomodation' => $accomodation->id]) }}"
                                    class="custom-button primary">{{__('lodge.View details')}}</a>
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
