<x-layouts.app>
    <div class="regsiter-cso-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Become an expert
            @endslot
        @endcomponent

        <div class="con">
            <section>
                <form action="{{ route('store-expert') }}" class="create-expert-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Location</label>
                                <input type="text" name="location" id="location" placeholder="Douala, Cameroon" value="{{ old('location') }}"
                                    required>
                            </div>
                            <div class="field">
                                <label for="">Birthday</label>
                                <input type="date" name="birthday" id="birthday"
                                    placeholder="" value="{{ old('birthday') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Sex</label>
                                <select name="sex" id="sex" value="{{ old('sex') }}" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="">Birth place</label>
                                <input type="text" name="birth_place" id="" value="{{ old('birth_place') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Nationality</label>
                                <select name="nationality" id="" value="{{ old('nationality') }}" required>
                                    <option value="cameroonian">Cameroonian</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="">Language</label>
                                <select name="language" id="" value="{{ old('language') }}" required>
                                    <option value="english">English</option>
                                    <option value="french">French</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Details</label>
                                <textarea name="details" id="" value="{{ old('details') }}" required></textarea>
                            </div>
                            <div>
                                <label for="">
                                    <span>Image</span>
                                    <input type="file" name="image" id="" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Company</label>
                                <input type="text" name="company" id="company" value="{{ old('company') }}" required>
                            </div>
                            <div class="field">
                                <label for="">Work duration</label>
                                <input type="text" name="work_duration" id="" value="{{ old('work_duration') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Certification</label>
                                <input type="text" name="certification" id="certification"
                                    placeholder="" value="{{ old('certification') }}" required>
                            </div>
                            <div class="field">
                                <label for="">Certification date</label>
                                <input type="date" name="certification_date" id="certification_date"
                                    placeholder="" value="{{ old('certification_date') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Current position/jobtitle</label>
                                <input type="text" name="position" id="position"
                                value="{{ old('position') }}" required>
                            </div>
                            <div>
                                <label for="">
                                    <span>Certification image</span>
                                    <input type="file" name="certification_image" id="certification_image" accept="image/*" />
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="custom-button">Submit</button>
                    </div>
                </form>
            </section>
        </div>

    </div>
</x-layouts.app>
