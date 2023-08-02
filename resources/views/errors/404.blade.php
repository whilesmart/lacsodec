<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body>
    <x-header />
    <div class="page-404">
        <div class="con">
            <div class="left">
                <h1>404</h1>
                <h2>Oops, you still haven't found what you are looking for?</h2>
                <p>The page you are looking for has been removed, had its name changed, or is temporarily unavailable
                </p>
                <a href="/" class="custom-button primary">
                    <span>Go back home</span>
                </a>
            </div>
            <div class="right">
                <img src="{{ asset('images/404.svg') }}" alt="404 image">
            </div>
        </div>
    </div>
    {{-- <x-footer /> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
