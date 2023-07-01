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
                                <tr>
                                    <td>Kris-O'Keefe</td>
                                    <td>Commodity</td>
                                    <td>7e0b0d2f-6b2c-3512</td>
                                    <td>South Africa</td>
                                    <td>3523</td>
                                    <td>
                                        <div class="actions">
                                            <a class="edit" href=""><i class="fas fa-edit "></i></a>
                                            <a class="delete" href=""><i class="fa fa-trash"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kris-O'Keefe</td>
                                    <td>Commodity</td>
                                    <td>7e0b0d2f-6b2c-3512</td>
                                    <td>South Africa</td>
                                    <td>3523</td>
                                    <td>
                                        <div class="actions">
                                            <a class="edit" href=""><i class="fas fa-edit "></i></a>
                                            <a class="delete" href=""><i class="fa fa-trash"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kris-O'Keefe</td>
                                    <td>Commodity</td>
                                    <td>7e0b0d2f-6b2c-3512</td>
                                    <td>South Africa</td>
                                    <td>3523</td>
                                    <td>
                                        <div class="actions">
                                            <a class="edit" href=""><i class="fas fa-edit "></i></a>
                                            <a class="delete" href=""><i class="fa fa-trash"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kris-O'Keefe</td>
                                    <td>Commodity</td>
                                    <td>7e0b0d2f-6b2c-3512</td>
                                    <td>South Africa</td>
                                    <td>3523</td>
                                    <td>
                                        <div class="actions">
                                            <a class="edit" href=""><i class="fas fa-edit "></i></a>
                                            <a class="delete" href=""><i class="fa fa-trash"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kris-O'Keefe</td>
                                    <td>Commodity</td>
                                    <td>7e0b0d2f-6b2c-3512</td>
                                    <td>South Africa</td>
                                    <td>3523</td>
                                    <td>
                                        <div class="actions">
                                            <a class="edit" href=""><i class="fas fa-edit "></i></a>
                                            <a class="delete" href=""><i class="fa fa-trash"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kris-O'Keefe</td>
                                    <td>Commodity</td>
                                    <td>7e0b0d2f-6b2c-3512</td>
                                    <td>South Africa</td>
                                    <td>3523</td>
                                    <td>
                                        <div class="actions">
                                            <a class="edit" href=""><i class="fas fa-edit "></i></a>
                                            <a class="delete" href=""><i class="fa fa-trash"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="/">1</a></li>
                            <li><a href="/">2</a></li>
                            <li><a href="/">3</a></li>
                            <li><a href="/">...</a></li>
                            <li><a href="/">20</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
