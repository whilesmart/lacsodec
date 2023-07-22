<x-layouts.app>
    <div class="auth-page login-page">
        <div class="con">
            <h1>{{__('passwords.Reset password')}}</h1>
            <form action="{{ route('password.update') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="token" value="{{$token}}">
                <div class="field 
                @if ($errors->has('email'))
                        error
                @endif
                ">
                    <label for="">{{__('front_login.Email')}}</label>
                    <input type="text" name="email" id="email" placeholder="{{__('front_login.Email')}}" value="{{ old('email') }}"
                        required>
                    @if ($errors->has('email'))
                        <span class="error-msg">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="field 
                @if ($errors->has('password'))
                        error
                @endif
                ">
                    <label for="">{{__('front_login.Password')}}</label>
                    <input type="password" name="password" id="password" placeholder="{{__('front_login.Enter password')}}" required>
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
                <button type="submit" class="custom-button secondary">
                    <span>{{__('passwords.Reset password')}}</span>
                </button>
            </form>
        </div>
    </div>
</x-layouts.app>
