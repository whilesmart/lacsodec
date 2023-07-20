<x-layouts.app>
    <div class="regsiter-cso-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
        @slot('current')
        {{__('cso.Register CSO')}}
        @endslot
        @endcomponent

        <div class="con">
            <section>
                <form action="{{ route('store-cso') }}" class="create-cso-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-section">
                        <div class="flex">
                            <div class="field 
                            @if ($errors->has('name'))
                                error
                            @endif
                            ">
                                <label for="">{{__('cso.Full name')}} *</label>
                                <input type="text" name="name" id="name" placeholder="{{__('cso.CSO name')}}" value="{{ old('name') }}" >
                                @error('name')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @if ($errors->has('partnership'))
                                error
                            @endif
                            ">
                                <label for="">{{__('cso.Acronym')}} *</label>
                                <input type="text" name="partnership" id="partnership" placeholder="{{__('cso.Acronym')}}" value="{{ old('partnership') }}" >
                                @error('partnership')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @if ($errors->has('registration_year'))
                                error
                            @endif
                            ">
                                <label for="registration_year">{{__('cso.Registration year')}} *</label>
                                <input type="number" name="registration_year" id="registration-year" placeholder="{{__('cso.Registration year')}}" value="{{ old('registration_year') }}" >
                                @error('registration_year')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('registration_number')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Registration number')}} *</label>
                                <input type="text" name="registration_number" id="registration-number" placeholder="{{__('cso.Registration number')}}" value="{{ old('registration_number') }}" >
                                @error('registration_number')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('organization_type')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Type of organization')}} *</label>
                                <select name="organization_type" id="organization-type" value="{{ old('organization_type') }}" >
                                    <option value="" disabled hidden>{{__('cso.Choose')}}</option>
                                    <option value="Association" {{ old('organization_type') == 'Association' ? 'selected' : '' }}>{{__('cso.Association')}}</option>
                                    <option value="Accredited NGO" {{ old('organization_type') == 'Accredited NGO' ? 'selected' : '' }}>{{__('cso.Accredited NGO (Non-governmental Organisation)')}}</option>
                                    <option value="trade union" {{ old('organization_type') == 'trade union' ? 'selected' : '' }}>{{__('cso.Trade union')}}</option>
                                    <option value="CIG" {{ old('organization_type') == 'CIG' ? 'selected' : '' }}>{{__('cso.CIG (Community Interest Group)')}}</option>
                                    <option value="Cooperative" {{ old('organization_type') == 'Cooperative' ? 'selected' : '' }}>{{__('cso.Cooperative')}}</option>
                                    <option value="Media" {{ old('organization_type') == 'Media' ? 'selected' : '' }}>{{__('cso.Media')}}</option>
                                    <option value="CBO" {{ old('organization_type') == 'CBO' ? 'selected' : '' }}>{{__('cso.CBO (Community-based Organisation)')}}</option>
                                    <option value="Village development Association" {{ old('organization_type') == 'Village development Association' ? 'selected' : '' }}>{{__('cso.Village development Association')}}</option>
                                    <option value="CSO Network" {{ old('organization_type') == 'CSO Network' ? 'selected' : '' }}>{{__('cso.CSO Network')}}</option>
                                    <option value="Faith Based organization" {{ old('organization_type') == 'Faith Based organization' ? 'selected' : '' }}>{{__('cso.Faith Based organization')}}</option>
                                </select>
                                @error('organization_type')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('country')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Country')}} *</label>
                                <select name="country" id="country" value="{{ old('country') }}" >
                                    <option value="" disabled hidden>{{__('cso.Choose')}}</option>
                                    <option value="cameroon">Cameroon</option>
                                    <option value="nigeria">Nigeria</option>
                                    <option value="ghana">Ghana</option>
                                    <option value="rwanda">Rwanda</option>
                                </select>
                                @error('country')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('region')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.State/Region')}} *</label>
                                <input type="text" name="region" id="region" placeholder="{{__('cso.State/Region')}}" value="{{ old('region') }}" >
                                @error('region')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('division')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Division')}} *</label>
                                <input type="text" name="division" id="division" placeholder="{{__('cso.Division')}}" value="{{ old('division') }}" >
                                @error('division')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">{{__('cso.Sub Division')}} *</label>
                                <input type="text" name="sub_division" id="sub-division" placeholder="{{__('cso.Sub Division')}}" value="{{ old('sub_division') }}" >
                            </div>
                            <div class="field 
                            @error('village')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Village')}} *</label>
                                <input type="text" name="village" id="village" placeholder="{{__('cso.Village')}}" value="{{ old('village') }}" >
                                @error('village')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <label for="image">
                                <span>{{__('cso.Upload Logo( jpeg or PNG) Max:1mb')}} *</span>
                                <input type="file" name="image" id="" accept="image/*" />
                                @error('image')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field 
                            @error('contact_person_name')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Who to contact')}} *</label>
                                <input type="text" name="contact_person_name" id="contact-name" placeholder="{{__("cso.Contact's name")}}" value="{{ old('contact_person_name') }}" >
                                @error('contact_person_name')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('contact_person_sex')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Sex')}} *</label>
                                <select name="contact_person_sex" id="contact-sex" value="{{ old('contact_person_sex') }}" >
                                    <option value="" disabled hidden>choose</option>
                                    <option value="male" {{ old('contact_person_sex') == 'male' ? 'selected' : '' }}>{{__('cso.Male')}}</option>
                                    <option value="female" {{ old('contact_person_sex') == 'female' ? 'selected' : '' }}>{{__('cso.Female')}}</option>
                                </select>
                                @error('contact_person_sex')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('contact_person_email')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Email address')}} *</label>
                                <input type="email" name="contact_person_email" id="contact-email" placeholder="{{__("cso.Contact's email address")}}" value="{{ old('contact_person_email') }}" >
                                @error('contact_person_email')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('contact_person_tel')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Phone number')}} *</label>
                                <input type="tel" name="contact_person_tel" id="contact-phone" placeholder="{{__('cso.Phone number')}}" value="{{ old('contact_person_tel') }}" >
                                @error('contact_person_tel')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('contact_person_position')
                                error
                            @enderror
                            ">
                                <label for="">{{__("cso.Person's position/role")}} *</label>
                                <input type="text" name="contact_person_position" id="contact-position" placeholder="{{__('cso.position/role')}}" value="{{ old('contact_person_position') }}" >
                                @error('contact_person_position')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('address')
                                error
                            @enderror
                            ">
                                <label for="">{{__("cso.CSO's physical address")}} *</label>
                                <input type="text" name="address" id="cso-address" placeholder="{{__('cso.Address')}}" value="{{ old('address') }}" >
                                @error('address')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('website')
                                error
                            @enderror
                            ">
                                <label for="">{{__("cso.CSO's Website")}} *</label>
                                <input type="text" name="website" id="cso-website" placeholder="{{__('cso.Website')}}" value="{{ old('website') }}" >
                                @error('website')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('email')
                                error
                            @enderror
                            ">
                                <label for="">{{__("cso.CSO's email address")}} *</label>
                                <input type="email" name="email" id="cso-email" placeholder="{{__('cso.Email address')}}" value="{{ old('email') }}" >
                                @error('email')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('tel')
                                error
                            @enderror
                            ">
                                <label for="">{{__("cso.CSO's phone number")}} *</label>
                                <input type="tel" name="tel" id="cso-contact" placeholder="{{__('cso.Phone number')}}" value="{{ old('tel') }}" >
                                @error('tel')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field 
                            @error('vision_statement')
                                error
                            @enderror
                            ">
                                <label for="">{{__("cso.CSO's Vision statement")}} *</label>
                                <input type="text" name="vision_statement" id="vision-statement" placeholder="{{__('cso.Vision statement')}}" value="{{ old('vision_statement') }}" oninput="countWords()" >
                                @error('vision_statement')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                                <span id="vision-count">0/150 {{__('cso.words')}}</span>
                            </div>
                            <div class="field 
                            @error('primary_target_beneficiaries')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Primary target beneficiaries')}} *</label>
                                <input type="text" name="primary_target_beneficiaries" id="primary-meneficiaries" placeholder="{{__('cso.Primary beneficiaries')}}" value="{{ old('primary_target_beneficiaries') }}">
                                @error('primary_target_beneficiaries')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field 
                            @error('domain')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Primary domain of activity')}} *</label>
                                <select name="domain" id="domain-of-activity" value="{{ old('domain') }}">
                                    <option value="" disabled selected hidden>{{__('cso.Choose')}}</option>
                                    @foreach ($domains as $domain)
                                    <option value="{{ $domain->name }}">{{ $domain->name }}</option>
                                    @endforeach
                                </select>
                                @error('domain')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                           
                        </div>
                        <div class="checkbox-field 
                            @error('other_domains')
                                error
                            @enderror
                            ">
                                    <label class="check-label">{{__('cso.Other domains of activity')}}</label>
                                <div class="flex">
                                    @foreach ($domains as $domain)
                                    <div>
                                        <input type="checkbox" name="other_domains[]" value="{{$domain->name}}" id="other_domains_{{$domain->name}}" {{ in_array($domain->name, old('other_domains')??[]) ? 'checked' : '' }}>
                                        <label for="other_domains_{{$domain->name}}">
                                            {{$domain->name}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                @error('other_domains')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        <div class="flex">
                            <div class="field 
                            @error('board_directors')
                                error
                            @enderror
                            ">
                                <label for="">{{__('cso.Board of Directors')}} *</label>
                                <div class="radio-flex">
                                    <div class="sub">
                                        <input type="radio" name="board_directors" value="true" id="board-of-directors-yes" {{old('board_directors') == 'true'? 'checked':''}}>
                                        <label for="board-of-directors-yes">
                                        {{__('cso.Yes')}}
                                        </label>
                                    </div>
                                    <div class="sub">
                                        <input type="radio" name="board_directors" value="false" id="board-of-directors-no" {{old('board_directors') == 'false'? 'checked':''}}>
                                        <label for="board-of-directors-no">
                                        {{__('cso.No')}}
                                        </label>
                                    </div>
                                </div>
                                @error('board_directors')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field 
                            @error('background')
                                error
                            @enderror
                            ">
                                <label for="">Organization background and track record *</label>
                                <input type="text" name="background" id="background" placeholder="" value="{{ old('background') }}" >
                                @error('background')
                                <span class="error-msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="field 
                        @error('board_directors')
                                error
                        @enderror
                        ">
                            <label for="">{{__("cso.Organization's leadership")}} *</label>
                            <div class="radio-flex">
                                <div class="sub">
                                    <input type="radio" name="organization_leaderships" id="leadership-women" value="Women headed organization" {{old('organization_leaderships') == 'Women headed organization'? 'checked':''}}>
                                    <label for="leadership-women">
                                    {{__('cso.Women-led organization')}}
                                    </label>
                                </div>
                                <div class="sub">
                                    <input type="radio" name="organization_leaderships" id="leadership-youth" value="Youth lead organization" {{old('organization_leaderships') == 'Youth lead organization'? 'checked':''}}>
                                    <label for="leadership-youth">
                                    {{__('cso.Youth-led organization')}}
                                    </label>
                                </div>
                                <div class="sub">
                                    <input type="radio" name="organization_leaderships" id="leadership-General" value="General" {{old('organization_leaderships') == 'General'? 'checked':''}}>
                                    <label for="leadership-General">
                                    {{__('cso.General')}}
                                    </label>
                                </div>
                            </div>
                            @error('organization_leaderships')
                            <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="field 
                        @error('african_coverage')
                                error
                        @enderror
                        ">
                            <label for="">{{__("cso.CSO's geographical coverage")}} *</label>
                            <select name="african_coverage" id="" value="{{ old('african_coverage') }}" >
                                <option value="" disabled hidden>{{__('cso.Select')}}</option>
                                <option value="local"  {{ old('african_coverage') == 'local' ? 'selected' : '' }}>{{__('cso.Local')}}</option>
                                <option value="national"  {{ old('african_coverage') == 'national' ? 'selected' : '' }}>{{__('cso.National')}}</option>
                                <option value="global"  {{ old('african_coverage') == 'global' ? 'selected' : '' }}>{{__('cso.Global (more than one african country)')}}</option>
                            </select>
                            @error('african_coverage')
                            <span class="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-section">
                        <button type="submit" class="custom-button primary">{{__('cso.Confirm CSO Registration')}}</button>
                    </div>
                </form>
            </section>
        </div>

    </div>
</x-layouts.app>

<script>
    function countWords() {
        const input = document.getElementById('vision-statement').value;
        const wordCount = input.trim().split(/\s+/).length;
        if (wordCount >= 150) {
            // Disable the input field if word count exceeds 150
            document.getElementById('vision-statement').disabled = true;
        } else {
            // Enable the input field otherwise
            document.getElementById('vision-statement').disabled = false;
        }
        document.getElementById('vision-count').textContent = `${wordCount}/150 words maximum`;
    }
</script>
