<div class="breadcrumb">
    <div class="sub">
        <div class="con">
            <h1>{{ $current }}</h1>
            <div class="breadcrumb-sub">
                <a href="{{ route('welcome') }}" class="breadcrumb-item">home</a>
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <a class="breadcrumb-item active">{{ $current }}</a>
            </div>
        </div>
    </div>
</div>
