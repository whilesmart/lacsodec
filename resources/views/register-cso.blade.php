<x-layouts.app>
    <div class="regsiter-cso-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Register CSO
            @endslot
        @endcomponent

        <div class="con">
            <section>
                <form action="{{ route('store-cso') }}" class="create-cso-form" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" placeholder="CSO name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">Assessment score </label>
                                <input type="number" name="assessment_score" id="assessment-score"
                                    placeholder="CSO sssessment score" value="{{ old('assessment_score') }}" required>
                                @error('assessment_score')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Partnership</label>
                                <input type="text" name="partnership" id="partnership" placeholder="CSO partnership"
                                    value="{{ old('partnership') }}" required>
                                @error('partnership')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Registration date</label>
                                <input type="date" name="registration_date" id="registration-date"
                                    placeholder="registration-date" value="{{ old('registration_date') }}" required>
                                @error('registration_date')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">Registration number</label>
                                <input type="text" name="registration_number" id="registration-number"
                                    placeholder="registration-number" value="{{ old('registration_number') }}" required>
                                @error('registration_number')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Type of organization</label>
                                <select name="organization_type" id="organization-type"
                                    value="{{ old('organization_type') }}" required>
                                    <option value="Association">Association</option>
                                    <option value="Accredited NGO">Accredited NGO</option>
                                    <option value="trade union">trade union</option>
                                    <option value="CIG">CIG</option>
                                    <option value="Cooperative">Cooperative</option>
                                    <option value="Media">Media</option>
                                    <option value="Village development Association">Village development Association
                                    </option>
                                    <option value="CSO Network">CSO Network</option>
                                    <option value="Faith Based organization">Faith Based organization</option>
                                </select>
                                @error('organization_type')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">Country</label>
                                <select name="country" id="country" value="{{ old('country') }}" required>
                                    <option value="cameroon">Cameroon</option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="ghana">Ghana</option>
                                    <option value="rwanda">Rwanda</option>
                                </select>
                                @error('country')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Region</label>
                                <input type="text" name="region" id="region" placeholder="region"
                                    value="{{ old('region') }}" required>
                                @error('region')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">Devision</label>
                                <input type="text" name="division" id="division" placeholder="division"
                                    value="{{ old('division') }}" required>
                                @error('division')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Sub devision</label>
                                <input type="text" name="sub_division" id="sub-division" placeholder="sub-division"
                                    value="{{ old('sub_division') }}" required>
                            </div>
                            <div class="field">
                                <label for="">Village</label>
                                <input type="text" name="village" id="village" placeholder="village"
                                    value="{{ old('village') }}" required>
                                @error('village')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <label for="image">
                                <span>Choose image</span>
                                <input type="file" name="image" id="" accept="image/*" />
                                @error('image')
                                    <span>{{ $message }}</span>
                                @enderror
                            </label>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Name of contact person </label>
                                <input type="text" name="contact_person_name" id="contact-name"
                                    placeholder="contact-name" value="{{ old('contact_person_name') }}" required>
                                @error('contact_person_name')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">Sex of contact person</label>
                                <select name="contact_person_sex" id="contact-sex"
                                    value="{{ old('contact_person_sex') }}" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('contact_person_sex')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Email of contact person</label>
                                <input type="email" name="contact_person_email" id="contact-email"
                                    placeholder="contact-email" value="{{ old('contact_person_email') }}" required>
                                @error('contact_person_email')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">Telephone of contact person</label>
                                <input type="tel" name="contact_person_tel" id="contact-phone"
                                    placeholder="contact-phone" value="{{ old('contact_person_tel') }}" required>
                                @error('contact_person_tel')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Position of contact person</label>
                                <input type="text" name="contact_person_position" id="contact-position"
                                    placeholder="contact-position" value="{{ old('contact_person_position') }}"
                                    required>
                                @error('contact_person_position')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">CSO address</label>
                                <input type="text" name="address" id="cso-address" placeholder="cso-address"
                                    value="{{ old('address') }}" required>
                                @error('address')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">CSO website</label>
                                <input type="url" name="website" id="cso-website" placeholder="cso-website"
                                    value="{{ old('website') }}" required>
                                @error('website')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">CSO email address</label>
                                <input type="email" name="email" id="cso-email" placeholder="cso-email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">CSO contact phone number</label>
                                <input type="tel" name="tel" id="cso-contact" placeholder="cso-contact"
                                    value="{{ old('tel') }}" required>
                                @error('tel')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">CSO Vision statement</label>
                                <input type="text" name="vision_statement" id="vision-statement"
                                    placeholder="vision-statement" value="{{ old('vision_statement') }}" required>
                                @error('vision_statement')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">Primary target beneficiaries</label>
                                <input type="text" name="primary_target_beneficiaries" id="primary-meneficiaries"
                                    placeholder="primary-meneficiaries"
                                    value="{{ old('primary_target_beneficiaries') }}" required>
                                @error('primary_target_beneficiaries')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Choose domain of activity</label>
                                <select name="domain" id="domain-of-activity" value="{{ old('domain') }}" required>
                                    @foreach ($domains as $domain)
                                        <option value="{{ $domain->name }}">{{ $domain->name }}</option>
                                    @endforeach
                                </select>
                                @error('domain')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="">Board of directors</label>
                                <div class="radio-flex">
                                    <div class="sub">
                                        <input type="radio" name="board_directors" value="true"
                                            id="board-of-directors-yes">
                                        <label for="board-of-directors-yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="sub">
                                        <input type="radio" name="board_directors" value="false"
                                            id="board-of-directors-no">
                                        <label for="board-of-directors-no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                @error('board_directors')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label for="">Organisation leadership</label>
                            <div class="radio-flex">
                                <div class="sub">
                                    <input type="radio" name="organization_leaderships" id="leadership-women"
                                        value="Women headed organization">
                                    <label for="leadership-women">
                                        Women headed organization
                                    </label>
                                </div>
                                <div class="sub">
                                    <input type="radio" name="organization_leaderships" id="leadership-youth"
                                        value="Youth lead organization">
                                    <label for="leadership-youth">
                                        Youth lead organization
                                    </label>
                                </div>
                                <div class="sub">
                                    <input type="radio" name="organization_leaderships" id="leadership-General"
                                        value="General">
                                    <label for="leadership-General">
                                        General
                                    </label>
                                </div>
                            </div>
                            @error('organization_leaderships')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="field">
                            <label for="">African coverage CSO</label>
                            <select name="african_coverage" id="" value="{{ old('african_coverage') }}"
                                required>
                                <option value="national">National</option>
                                <option value="regional">Regional (more than one african country)</option>
                            </select>
                            @error('african_coverage')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="custom-button">Create Cso</button>
                    </div>

                    <div class="form-section">
                        <button type="submit" class="custom-button primary">Confirm CSO Registration</button>
                    </div>
                </form>
            </section>
        </div>

    </div>
</x-layouts.app>
