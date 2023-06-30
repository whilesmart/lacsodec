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
                <form action="" class="create-cso-form">
                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Select user</label>
                                <select name="organization-type" id="organization-type">
                                    {{-- select options data from backend --}}
                                    <option value="option">Option</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="">Location</label>
                                <input type="text" name="location" id="location" placeholder="Enter expert location"
                                    value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Expert status</label>
                                <input type="text" name="status" id="status" placeholder="Enter expert status"
                                    value="" required>
                            </div>
                            <div class="field">
                                <label for="">Date of birth</label>
                                <input type="date" name="date-of-birth" id="date-of-birth"
                                    placeholder="Enter expert date-of-birth" value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Place of birth</label>
                                <input type="text" name="place-of-birth" id="place-of-birth"
                                    placeholder="Enter expert place-of-birth" value="" required>
                            </div>
                            <div class="field">
                                <label for="">Sex</label>
                                <select name="contact-sex" id="contact-sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="field">
                            <label for="">Details</label>
                            <textarea name="details" id="details" cols="30" rows="10"></textarea>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Nationality</label>
                                <select name="nationality" id="nationality">
                                    <option value="cameroonian">Cameroonian</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="">Language</label>
                                <select name="language" id="language">
                                    <option value="english">English</option>
                                    <option value="french">French</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Image</label>
                                <input type="file" name="image" id="image" placeholder="image" value=""
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Company</label>
                                <input type="text" name="company" id="company" placeholder="Enter expert company"
                                    value="" required>
                            </div>
                            <div class="field">
                                <label for="">Work duration</label>
                                <input type="text" name="work-duration" id="work-duration"
                                    placeholder="Enter expert work duration" value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Role/Position</label>
                                <input type="text" name="role" id="role" placeholder="Enter expert role"
                                    value="" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Certification</label>
                                <input type="text" name="certification" id="certification"
                                    placeholder="Enter expert certification" value="" required>
                            </div>
                            <div class="field">
                                <label for="">date of certification</label>
                                <input type="date" name="date-of-certification" id="date-of-certification"
                                    placeholder="Enter expert date-of-certification" value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Certification Image</label>
                                <input type="file" name="image" id="image" placeholder="image"
                                    value="" required>
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
