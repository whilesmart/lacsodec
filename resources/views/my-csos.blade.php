<x-layouts.app>
    <div class="my-csos-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                My CSOs
            @endslot
        @endcomponent

        <section class="my-csos-section">
            <div class="con">
                <div class="my-csos-top">
                    <a href="{{ route('register-cso') }}" class="custom-button secondary"><span>Register
                            CSO</span></a>
                </div>
                <div class="table-wrapper">
                    <div class="table-responsive">
                        <table class="custom-table table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Organization type</th>
                                    <th scope="col">Registration number</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($csos as $cso)
                                <tr>
                                    <td>{{$cso->name}}</td>
                                    <td>{{$cso->organization_type}}</td>
                                    <td>{{$cso->registration_number}}</td>
                                    <td>{{$cso->country}}</td>
                                    <td>{{$cso->created_at}}</td>
                                    <td>
                                        <div class="actions">
                                            <a class="edit" href=""><i class="fas fa-edit "></i></a>
                                            <a class="delete" onclick="event.preventDefault(); document.getElementById('delete-form').submit(); return confirm('Do you really want to delete this cso?')"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></a>
                                            <form action="{{ route('delete-cso', ['cso' => $cso->id]) }}" method="post" id="delete-form">
                                                @csrf
                                            </form>    
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        {{$csos->links()}}
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
