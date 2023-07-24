@push('head')
    <link
        href="{{ asset('images/logos/lacsodec-logo.ico') }}"
        id="favicon"
        rel="icon"
    >
@endpush

<div class="h2 d-flex align-items-center">
    @auth
        <x-orchid-icon path="bs.house" class="d-inline d-xl-none"/>
    @endauth

    <p class="my-0 {{ auth()->check() ? 'd-none d-xl-block' : '' }}">
        LACSODEC
        <small class="align-top opacity">dashboard</small>
    </p>
</div>
