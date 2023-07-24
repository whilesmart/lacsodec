<x-layouts.app>
    <div class="donate-page impact-stories-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{__('donate.Donate')}}
            @endslot
        @endcomponent

        <section class="donate-section impact-stories-section">
            <div class="con">
            <div class="main-content">
                    <img src="{{ asset('images/donate.jpg') }}" alt="" />
                    <h1>{{__('donate.Bank details')}}</h1>
                    <div class="info-container">
                        <div class="info">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            <p>{{__('donate.Bank code')}}: <b>10029</b></p>
                        </div>
                        <div class="info">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            <p>{{__('donate.Branch Code')}}: <b>26022</b></p>
                        </div>
                        <div class="info">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            <p>{{__('donate.Account Number')}}: <b>31545011075</b></p>
                        </div>
                        <div class="info">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            <p>{{__('donate.RIB Key')}}: <b>86</b></p>
                        </div>
                    </div>
                    <div class="info-container">
                        <div class="info">
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <p>{{__('donate.IBAN Code')}}: <b>CM21 10029 26022 31545011075 86</b></p>
                        </div>
                        <div class="info">
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <p>{{__('donate.Swift Code')}}: <b>ECOCCMCX</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
