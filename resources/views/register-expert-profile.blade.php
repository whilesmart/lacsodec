<x-layouts.app>
    <div class="regsiter-cso-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Register Expert profile
            @endslot
        @endcomponent

        <div class="con">
            <section>
                <form action="{{ route('store-expert') }}" class="create-cso-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Location</label>
                                <input type="text" name="location" id="location" placeholder="Enter expert location"
                                    value="{{ old('location') }}" required>
                                    @error('location')
                                        <span class="error-msg">{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="field">
                                <label for="">Phone number</label>
                                <input type="text" name="phone_number" id="phone_number" placeholder="+237656000000"
                                    value="{{ old('phone_number') }}" required>
                                    @error('phone_number')
                                        <span class="error-msg">{{$message}}</span>
                                    @enderror
                            </div>
                        </div>
                        <div class="flex">
                        <div class="field">
                                <label for="">Sex</label>
                                <select name="sex" id="contact-sex" value="{{ old('sex') }}" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="">Date of birth</label>
                                <input type="date" name="birthday" id="date-of-birth"
                                    placeholder="Enter expert date-of-birth" value="{{ old('birthday') }}" required>
                                    @error('birthday')
                                        <span class="error-msg">{{$message}}</span>
                                    @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Place of birth</label>
                                <input type="text" name="birth_place" id="place-of-birth"
                                    placeholder="Enter expert place-of-birth" value="{{ old('birth_place') }}" required>
                                    @error('birth_place')
                                        <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label for="">Bio details</label>
                            <textarea name="details" id="details" cols="30" rows="10" value="{{ old('details') }}" required></textarea>
                            @error('details')
                                <span class="error-msg">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Nationality</label>
                                <select name="nationality" id="nationality" value="{{ old('nationality') }}" required>
                                    <option value="cameroonian">Cameroonian</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="">Language</label>
                                <select name="language" id="language" value="{{ old('language') }}" required>
                                    <option value="english">English</option>
                                    <option value="french">French</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Image</label>
                                <input type="file" name="image" id="image" placeholder="image" value="" accept="image/*"
                                >
                                @error('image')
                                    <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Company</label>
                                <input type="text" name="company" id="company" placeholder="Enter expert company"
                                value="{{ old('company') }}" required>
                                @error('company')
                                        <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">Work duration</label>
                                <input type="text" name="work_duration" id="work-duration"
                                    placeholder="Enter expert work duration" value="{{ old('work_duration') }}" required>
                                @error('work_duration')
                                    <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Role/Position</label>
                                <input type="text" name="position" id="role" placeholder="Enter expert role"
                                value="{{ old('position') }}" required>
                                @error('position')
                                        <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Certification</label>
                                <input type="text" name="certification" id="certification"
                                    placeholder="Enter expert certification" value="{{ old('certification') }}" required>
                                @error('certification')
                                    <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">date of certification</label>
                                <input type="date" name="certification_date" id="date-of-certification"
                                    placeholder="Enter expert date-of-certification" value="{{ old('certification_date') }}" required>
                                @error('certification_date')
                                    <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Certification Image</label>
                                <input type="file" name="certification_image" id="image" placeholder="image" accept="image/*"
                                    value="">
                                @error('certification_image')
                                    <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <button type="submit" class="custom-button primary">Confirm expert Registration</button>
                    </div>
                </form>
            </section>
        </div>

    </div>
</x-layouts.app>
