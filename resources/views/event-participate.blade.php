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
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" placeholder=""
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="partnership" placeholder=""
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="sex">Sex</label>
                               <select name="sex" id="" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                               </select>
                                @error('sex')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="country">Country of origin</label>
                                <select name="country" id="" required>
                                    <option value="cameroon" selected>Cameroon</option>
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
                                <label for="organization">Organization</label>
                                <input type="text" name="organization" id="organization" placeholder=""
                                    value="{{ old('organization') }}" required>
                                @error('organization')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                        <div class="field">
                                <label for="other_details">Your motivation to attend</label>
                                <textarea name="other_details" id="other_details" value="{{ old('other_details') }}"></textarea>
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
