<x-layouts.app>
    <div class="regsiter-cso-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Register for event
            @endslot
        @endcomponent

        <div class="con">
            <section>
                @if ($event->date >= now())
                <form action="{{ route('event-participate-store', ['event' => $event->id]) }}" class="create-cso-form" method="POST">
                    @csrf
                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Name *</label>
                                <input type="text" name="name" id="name" placeholder=""
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="email">Email *</label>
                                <input type="email" name="email" id="partnership" placeholder=""
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="sex">Sex *</label>
                               <select name="sex" id="">
                               <option value="male" {{ old('sex') == 'male' ? 'selected' : '' }}>{{__('experts.Male')}}</option>
                                    <option value="female"  {{ old('sex') == 'female' ? 'selected' : '' }}>{{__('experts.Female')}}</option>
                               </select>
                                @error('sex')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="country">Country of origin *</label>
                                <select name="country" id="country" value="{{ old('country') }}" >
                                    <option value="" disabled hidden>{{__('cso.Choose')}}</option>
                                @foreach ($countries as $country)
                                <option value="" disabled hidden>{{__('cso.Choose')}}</option>
                                @if (Lang::locale() == 'en')
                                <option value="{{$country->name}}" {{ old('country') == $country->name ? 'selected' : '' }}>{{$country->name}}</option>
                                @else
                                <option value="{{$country->french_name}}" {{ old('country') == $country->french_name ? 'selected' : '' }}>{{$country->french_name}}</option>
                                @endif
                                    
                                @endforeach
                                </select>
                                @error('country')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="phone">Phone number</label>
                                <input type="tel" name="phone" id="phone"
                                    placeholder="+237656000000" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="organization">Organization *</label>
                                <input type="text" name="organization" id="organization" placeholder=""
                                    value="{{ old('organization') }}">
                                @error('organization')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                        <div class="field">
                                <label for="other_details">Your motivation to attend</label>
                                <textarea name="other_details" id="other_details">{{ old('other_details') }}</textarea>
                                @error('other_details')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <button type="submit" class="custom-button primary">Confirm Event Participation</button>
                    </div>
                </form>
                @else
                    <div></div>
                @endif
            </section>
        </div>

    </div>
</x-layouts.app>
