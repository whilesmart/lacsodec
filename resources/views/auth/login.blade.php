<x-layouts.app>
    <div class="auth-page login-page">
        <div class="con">
            <h1>{{__('front_login.Login')}}</h1>
            <form action="{{ route('login.perform') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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
                <a href="/forgot-password" class="forgot-password">{{__('front_login.Forgot password?')}}</a>
                <button type="submit" class="custom-button secondary">
                    <span>{{__('front_login.Login')}}</span>
                </button>
            </form>
            <p>{{__("login.Don't have an Account?")}} <a href="{{ route('register') }}">{{__('front_login.Sign Up')}}</a></p>
        </div>
    </div>
</x-layouts.app>
