<div class="aside-section">
    <div class="top">
        <h3>Latest CSO</h3>
    </div>
    @foreach ($csos as $cso)
    <a href="{{ route('cso-directory-details', ['cso' => $cso->id]) }}" class="cso">
        <img src="{{ asset($cso->image) }}" alt="" />
        <div class="info">
            <h5>{{$cso->name}}</h5>
            <p>{{$cso->created_at}}</p>
        </div>
    </a>
    @endforeach
</div>
