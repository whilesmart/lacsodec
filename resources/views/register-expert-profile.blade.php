<x-layouts.app>
    <div class="regsiter-cso-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                {{__('experts.Register Expert Profile')}}
            @endslot
        @endcomponent

        <div class="con">
            <section>
                <form action="{{ route('store-expert') }}" class="create-cso-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-section">
                        <div class="flex">
                            <div class="field 
                            @error('location')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Location')}}</label>
                                <input type="text" name="location" id="location" placeholder="{{__('experts.Enter your location')}}"
                                    value="{{ old('location') }}" required>
                                    @error('location')
                                        <span class="error-msg">{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="field 
                            @error('phone_number')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Phone number')}}</label>
                                <input type="text" name="phone_number" id="phone_number" placeholder="example: +237656000000"
                                    value="{{ old('phone_number') }}" required>
                                    @error('phone_number')
                                        <span class="error-msg">{{$message}}</span>
                                    @enderror
                            </div>
                        </div>
                        <div class="flex">
                        <div class="field 
                        @error('sex')
                                error
                        @enderror
                        ">
                                <label for="">{{__('experts.Sex')}}</label>
                                <select name="sex" id="contact-sex" value="{{ old('sex') }}" required>
                                    <option value="male">{{__('experts.Male')}}</option>
                                    <option value="female">{{__('experts.Female')}}</option>
                                </select>
                            </div>
                            <div class="field 
                            @error('birthday')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Date of birth')}}</label>
                                <input type="date" name="birthday" id="date-of-birth"
                                    placeholder="{{__('experts.Enter your date-of-birth')}}" value="{{ old('birthday') }}" required>
                                    @error('birthday')
                                        <span class="error-msg">{{$message}}</span>
                                    @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('birth_place')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Place of birth')}}</label>
                                <input type="text" name="birth_place" id="place-of-birth"
                                    placeholder="{{__('experts.Enter your place-of-birth')}}" value="{{ old('birth_place') }}" required>
                                    @error('birth_place')
                                        <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="field 
                        @error('details')
                                error
                        @enderror
                        ">
                            <label for="">Bio details</label>
                            <textarea name="details" id="details" cols="30" rows="10" value="{{ old('details') }}" required></textarea>
                            @error('details')
                                <span class="error-msg">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('nationality')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Nationality')}}</label>
                                <select name="nationality" id="nationality" value="{{ old('nationality') }}" required>
                                    <option value="cameroonian">Cameroonian</option>
                                </select>
                            </div>
                            <div class="field 
                            @error('language')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Language')}}s</label>
                                <select name="languages[]" id="languages" value="{{ old('language') }}" multiple required>
                                    <option value="english">{{__('experts.English')}}</option>
                                    <option value="french">{{__('experts.French')}}</option>
                                    <option value="spanish">Spanish</option>
                                    <option value="german">German</option>
                                </select>
                                @error('language')
                                    <span class="error-msg">{{$message}}</span>
                                @enderror
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
                            <div class="field 
                            @error('company')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Company')}}</label>
                                <input type="text" name="company" id="company" placeholder="{{__('experts.Enter your company')}}"
                                value="{{ old('company') }}" required>
                                @error('company')
                                        <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('work_duration')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Work duration')}}</label>
                                <input type="text" name="work_duration" id="work-duration"
                                    placeholder="{{__('experts.Enter your work duration')}}" value="{{ old('work_duration') }}" required>
                                @error('work_duration')
                                    <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('position')
                                error
                            @enderror
                            ">
                                <label for="">Role/Position</label>
                                <input type="text" name="position" id="role" placeholder="{{__('experts.Enter your role/position')}}"
                                value="{{ old('position') }}" required>
                                @error('position')
                                        <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field 
                            @error('certification')
                                error
                            @enderror
                            ">
                                <label for="">Certification</label>
                                <input type="text" name="certification" id="certification"
                                    placeholder="{{__('experts.Enter your certification')}}" value="{{ old('certification') }}" required>
                                @error('certification')
                                    <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('certification_date')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Date of certification')}}</label>
                                <input type="date" name="certification_date" id="date-of-certification"
                                    placeholder="{{__('experts.Enter your date-of-certification')}}" value="{{ old('certification_date') }}" required>
                                @error('certification_date')
                                    <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">{{__('experts.Image of the Certificate')}}</label>
                                <input type="file" name="certification_image" id="image" placeholder="image" accept="image/*"
                                    value="">
                                @error('certification_image')
                                    <span class="error-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('isHumanResource')
                                error
                            @enderror
                            ">
                                <label for="">{{__('experts.Request to be listed on Human resource page')}}"</label>
                                <div class="radio-flex">
                                    <div class="sub">
                                        <input type="radio" name="isHumanResource" value="true" id="isHumanResource-yes">
                                        <label for="isHumanResource-yes">
                                        {{__('experts.Yes')}}
                                        </label>
                                    </div>
                                    <div class="sub">
                                        <input type="radio" name="isHumanResource" value="false" id="isHumanResource-no">
                                        <label for="isHumanResource-no">
                                        {{__('experts.No')}}
                                        </label>
                                    </div>
                                </div>
                                @error('isHumanResource')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <button type="submit" class="custom-button primary">{{__('experts.Confirm your Registration')}}</button>
                    </div>
                </form>
            </section>
        </div>

    </div>
</x-layouts.app>
