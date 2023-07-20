<x-layouts.app>
    <div class="auth-page register-page">
        <div class="con">
            <h1>{{__('register.Join us now')}}</h1>
            <form action="{{ route('register.perform') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="flex">
                    <div class="field">
                        <label for="">{{__('register.First name')}}</label>
                        <input type="text" name="first-name" id="first-name" placeholder="{{__('register.First name')}}" value="{{ old('first-name') }}" required>
                    </div>
                    <div class="field">
                        <label for="">{{__('register.Last name')}}</label>
                        <input type="text" name="last-name" id="last-name" placeholder="{{__('register.Last name')}}" value="{{ old('last-name') }}" required>
                    </div>
                </div>
                <div class="field
                @if ($errors->has('email'))
                    error
                @endif
                ">
                    <label for="">{{__('register.Email')}}</label>
                    <input type="text" name="email" id="email" placeholder="{{__('register.Email')}}" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="error-msg">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="field 
                @if ($errors->has('password'))
                    error
                @endif
                ">
                    <label for="">{{__('register.Password')}}</label>
                    <input type="password" name="password" id="password" placeholder="{{__('register.Enter password')}}" value="{{ old('password') }}" required>
                    @if ($errors->has('password'))
                    <span class="error-msg">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="field 
                @if ($errors->has('password_confirmation'))
                    error
                @endif
                ">
                    <label for="password_confirmation">{{__('register.Confirm password')}}</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="{{__('register.Confirm password')}}" value="{{ old('password_confirmation') }}" required>
                    @if ($errors->has('password_confirmation'))
                    <span class="error-msg">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
                <div class="field
                @if ($errors->has('country'))
                    error
                @endif
                ">
                    <label for="">{{__('register.Country')}}</label>
                    <select name="country" id="country" value="{{ old('country') }}">
                        <option value="" disabled selected hidden>{{__('cso.Choose')}}</option>
                        <option value="algeria">{{__('countries.Algeria')}}</option>
                        <option value="angola">{{__('countries.Angola')}}</option>
                        <option value="benin">{{__('countries.Benin')}}</option>
                        <option value="botswana">{{__('countries.Botswana')}}</option>
                        <option value="burkina faso">{{__('countries.Burkina Faso')}}</option>
                        <option value="burundi">{{__('countries.Burundi')}}</option>
                        <option value="cameroon">{{__('countries.Cameroon')}}</option>
                        <option value="cape verde">{{__('countries.Cape Verde')}}</option>
                        <option value="central african republic">{{__('countries.Central African Republic')}}</option>
                        <option value="chad">{{__('countries.Chad')}}</option>
                        <option value="comoros">{{__('countries.Comoros')}}</option>
                        <option value="democratic republic of congo">{{__('countries.Democratic Republic of Congo')}}</option>
                        <option value="republic of congo">{{__('countries.Republic of Congo')}}</option>
                        <option value="djibouti">{{__('countries.Djibouti')}}</option>
                        <option value="egypt">{{__('countries.Egypt')}}</option>
                        <option value="equatorial guinea">{{__('countries.Equatorial Guinea')}}</option>
                        <option value="eritrea">{{__('countries.Eritrea')}}</option>
                        <option value="ethiopia">{{__('countries.Ethiopia')}}</option>
                        <option value="gabon">{{__('countries.Gabon')}}</option>
                        <option value="gambia">{{__('countries.Gambia')}}</option>
                        <option value="ghana">{{__('countries.Ghana')}}</option>
                        <option value="guinea">{{__('countries.Guinea')}}</option>
                        <option value="guinea-bissau">{{__('countries.Guinea-Bissau')}}</option>
                        <option value="ivory coast">{{__('countries.Ivory Coast')}}</option>
                        <option value="kenya">{{__('countries.Kenya')}}</option>
                        <option value="lesotho">{{__('countries.Lesotho')}}</option>
                        <option value="liberia">{{__('countries.Liberia')}}</option>
                        <option value="libya">{{__('countries.Libya')}}</option>
                        <option value="madagascar">{{__('countries.Madagascar')}}</option>
                        <option value="malawi">{{__('countries.Malawi')}}</option>
                        <option value="mali">{{__('countries.Mali')}}</option>
                        <option value="mauritania">{{__('countries.Mauritania')}}</option>
                        <option value="mauritius">{{__('countries.Mauritius')}}</option>
                        <option value="morocco">{{__('countries.Morocco')}}</option>
                        <option value="mozambique">{{__('countries.Mozambique')}}</option>
                        <option value="namibia">{{__('countries.Namibia')}}</option>
                        <option value="niger">{{__('countries.Niger')}}</option>
                        <option value="nigeria">{{__('countries.Nigeria')}}</option>
                        <option value="rwanda">{{__('countries.Rwanda')}}</option>
                        <option value="sao tome and principe">{{__('countries.Sao Tome and Principe')}}</option>
                        <option value="senegal">{{__('countries.Senegal')}}</option>
                        <option value="seychelles">{{__('countries.Seychelles')}}</option>
                        <option value="sierra leone">{{__('countries.Sierra Leone')}}</option>
                        <option value="somalie">{{__('countries.Somalia')}}</option>
                        <option value="south africa">{{__('countries.South Africa')}}</option>
                        <option value="south sudan">{{__('countries.South Sudan')}}</option>
                        <option value="sudan">{{__('countries.Sudan')}}</option>
                        <option value="swaziland">{{__('countries.Swaziland')}}</option>
                        <option value="tanzania">{{__('countries.Tanzania')}}</option>
                        <option value="togo">{{__('countries.Togo')}}</option>
                        <option value="tunisia">{{__('countries.Tunisia')}}</option>
                        <option value="uganda">{{__('countries.Uganda')}}</option>
                        <option value="zambia">{{__('countries.Zambia')}}</option>
                        <option value="zimbabwe">{{__('countries.Zimbabwe')}}</option>
                    </select>
                    @error('country')
                    <span class="error-msg">{{ $message }}</span>
                    @enderror
                    <!-- <input type="text" name="country" id="country" placeholder="{{__('register.Country')}}" value="{{ old('country') }}" required>
                    @if ($errors->has('country'))
                    <span class="error-msg">{{ $errors->first('country') }}</span>
                    @endif -->
                </div>
                <button type="submit" class="custom-button secondary">
                    <span>{{__('register.Create Account')}}</span>
                </button>
            </form>
            <p>{{__('register.Already have an Account?')}} <a href="{{ route('login') }}">{{__('register.Sign In')}}</a></p>
        </div>
    </div>
</x-layouts.app>