<x-layouts.app>
    <div class="auth-page login-page">
        <div class="con">
            <h1>Login</h1>
            <form action="{{ route('login.perform') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="field 
                @if ($errors->has('email'))
                        error
                @endif
                ">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}"
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
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter password" required>
                    @if ($errors->has('password'))
                        <span class="error-msg">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <a href="" class="forgot-password">Forgot password?</a>
                <button type="submit" class="custom-button secondary">
                    <span>Login</span>
                </button>
            </form>
            <p>Don't have an Account? <a href="{{ route('register') }}">Sign Up</a></p>
        </div>
    </div>
</x-layouts.app>
