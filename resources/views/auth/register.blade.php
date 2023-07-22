<x-layouts.app>
    <div class="auth-page register-page">
        <div class="con">
            <h1>{{__('register.Join us now')}}</h1>
            <form action="{{ route('register.perform') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="flex">
                    <div class="field">
                        <label for="">{{__('register.First name')}} *</label>
                        <input type="text" name="first-name" id="first-name" placeholder="{{__('register.First name')}}" value="{{ old('first-name') }}" required>
                    </div>
                    <div class="field">
                        <label for="">{{__('register.Last name')}} *</label>
                        <input type="text" name="last-name" id="last-name" placeholder="{{__('register.Last name')}}" value="{{ old('last-name') }}" required>
                    </div>
                </div>
                <div class="field
                @if ($errors->has('email'))
                    error
                @endif
                ">
                    <label for="">{{__('register.Email')}} *</label>
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
                    <label for="">{{__('register.Password')}} *</label>
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
                    <label for="password_confirmation">{{__('register.Confirm password')}} *</label>
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
                    <label for="">{{__('register.Country')}} *</label>
                    <select name="country" id="country" value="{{ old('country') }}" >
                                    <option value="" disabled hidden selected>{{__('cso.Choose')}}</option>
                                @foreach ($countries as $country)
                                @if (Lang::locale() == 'en')
                                <option value="{{$country->name}}" {{ old('country') == $country->name ? 'selected' : '' }}>{{$country->name}}</option>
                                @else
                                <option value="{{$country->french_name}}" {{ old('country') == $country->french_name ? 'selected' : '' }}>{{$country->french_name}}</option>
                                @endif
                                    
                                @endforeach
                                </select>
                                @if ($errors->has('country'))
                    <span class="error-msg">{{ $errors->first('country') }}</span>
                    @endif
                </div>
                <button type="submit" class="custom-button secondary">
                    <span>{{__('register.Create Account')}}</span>
                </button>
            </form>
            <p>{{__('register.Already have an Account?')}} <a href="{{ route('login') }}">{{__('register.Sign In')}}</a></p>
        </div>
    </div>
</x-layouts.app>
