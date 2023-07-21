<x-layouts.app>
    <div class="auth-page login-page">
        <div class="con">
            <h1>{{__('passwords.Forgot password')}}</h1>
            <form action="{{ route('password-reset-mail') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="field 
                @if ($errors->has('email'))
                        error
                @endif
                ">
                    <label for="">{{__('login.Email')}}</label>
                    <input type="text" name="email" id="email" placeholder="{{__('login.Email')}}" value="{{ old('email') }}"
                        required>
                    @if ($errors->has('email'))
                        <span class="error-msg">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <button type="submit" class="custom-button secondary">
                    <span>Send password reset mail</span>
                </button>
            </form>
        </div>
    </div>
</x-layouts.app>
