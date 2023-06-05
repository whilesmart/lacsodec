<x-layouts.app>
    <div class="auth-page login-page">
        <div class="con">
            <h1>Login</h1>
            <form action="">
                <div class="field">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email">
                </div>
                <div class="field">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter password">
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
