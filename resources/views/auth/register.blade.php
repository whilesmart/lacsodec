<x-layouts.app>
    <div class="auth-page register-page">
        <div class="con">
            <h1>Join us now</h1>
            <form action="">
                <div class="flex">
                    <div class="field">
                        <label for="">First name</label>
                        <input type="text" name="first-name" id="first-name" placeholder="First name">
                    </div>
                    <div class="field">
                        <label for="">Last name</label>
                        <input type="text" name="last-name" id="last-name" placeholder="Last name">
                    </div>
                </div>
                <div class="field">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email">
                </div>
                <div class="field">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter password">
                </div>
                <div class="field">
                    <label for="">Country</label>
                    <input type="text" name="country" id="country" placeholder="Country">
                </div>
                <button type="submit" class="custom-button secondary">
                    <span>Create Account</span>
                </button>
            </form>
            <p>Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
        </div>
    </div>
</x-layouts.app>
