<x-layouts.app>
    <div class="auth-page register-page">
        <div class="con">
            <h1>Join us now</h1>
            <form action="{{ route('register.perform') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="flex">
                    <div class="field">
                        <label for="">First name</label>
                        <input type="text" name="first-name" id="first-name" placeholder="First name" value="{{ old('first-name') }}" required>
                    </div>
                    <div class="field">
                        <label for="">Last name</label>
                        <input type="text" name="last-name" id="last-name" placeholder="Last name" value="{{ old('last-name') }}" required>
                    </div>
                </div>
                <div class="field">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="error-msg">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="field">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter password" value="{{ old('password') }}" required>
                    @if ($errors->has('password'))
                    <span class="error-msg">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="field">
                    <label for="password_confirmation">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" value="{{ old('password_confirmation') }}" required>
                    @if ($errors->has('password_confirmation'))
                    <span class="error-msg">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
                <div class="field">
                    <label for="">Country</label>
                    <input type="text" name="country" id="country" placeholder="Country" value="{{ old('country') }}" required>
                    @if ($errors->has('country'))
                    <span class="error-msg">{{ $errors->first('country') }}</span>
                    @endif
                </div>
                <button type="submit" class="custom-button secondary">
                    <span>Create Account</span>
                </button>
            </form>
            <p>Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
        </div>
    </div>
</x-layouts.app>
