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
                <form action="" class="create-cso-form">
                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" placeholder="CSO name" value=""
                                    required>
                            </div>
                            <div class="field">
                                <label for="">Assessment score </label>
                                <input type="text" name="assessment-score" id="assessment-score"
                                    placeholder="CSO sssessment score" value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Partnership</label>
                                <input type="text" name="partnership" id="partnership" placeholder="CSO partnership"
                                    value="" required>
                            </div>
                            <div class="field">
                                <label for="">Select CSO status </label>
                                <input type="text" name="cso-status" id="cso-status" placeholder="cso-status"
                                    value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Registration date</label>
                                <input type="text" name="registration-date" id="registration-date"
                                    placeholder="registration-date" value="" required>
                            </div>
                            <div class="field">
                                <label for="">Registration number</label>
                                <input type="text" name="registration-number" id="registration-number"
                                    placeholder="registration-number" value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Type of organization</label>
                                <input type="text" name="organization-type" id="organization-type"
                                    placeholder="organization-type" value="" required>
                            </div>
                            <div class="field">
                                <label for="">Country</label>
                                <input type="text" name="country" id="country" placeholder="country" value=""
                                    required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Region</label>
                                <input type="text" name="region" id="region" placeholder="region" value=""
                                    required>
                            </div>
                            <div class="field">
                                <label for="">Devision</label>
                                <input type="text" name="division" id="division" placeholder="division"
                                    value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Sub devision</label>
                                <input type="text" name="sub-division" id="sub-division" placeholder="sub-division"
                                    value="" required>
                            </div>
                            <div class="field">
                                <label for="">Village</label>
                                <input type="text" name="village" id="village" placeholder="village" value=""
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">Name of contact person </label>
                                <input type="text" name="contact-name" id="contact-name"
                                    placeholder="contact-name" value="" required>
                            </div>
                            <div class="field">
                                <label for="">Sex of contact person</label>
                                <input type="text" name="contact-sex" id="contact-sex" placeholder="contact-sex"
                                    value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Email of contact person</label>
                                <input type="text" name="contact-email" id="contact-email"
                                    placeholder="contact-email" value="" required>
                            </div>
                            <div class="field">
                                <label for="">Telephone of contact person</label>
                                <input type="text" name="contact-phone" id="contact-phone"
                                    placeholder="contact-phone" value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Position of contact person</label>
                                <input type="text" name="contact-position" id="contact-position"
                                    placeholder="contact-position" value="" required>
                            </div>
                            <div class="field">
                                <label for="">CSO address</label>
                                <input type="text" name="cso-address" id="cso-address" placeholder="cso-address"
                                    value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">CSO website</label>
                                <input type="text" name="cso-website" id="cso-website" placeholder="cso-website"
                                    value="" required>
                            </div>
                            <div class="field">
                                <label for="">CSO email address</label>
                                <input type="text" name="cso-email" id="cso-email" placeholder="cso-email"
                                    value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">CSO contact phone number</label>
                                <input type="text" name="cso-contact" id="cso-contact" placeholder="cso-contact"
                                    value="" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="flex">
                            <div class="field">
                                <label for="">CSO Vision statement</label>
                                <input type="text" name="vision-statement" id="vision-statement"
                                    placeholder="vision-statement" value="" required>
                            </div>
                            <div class="field">
                                <label for="">Primary target beneficiaries</label>
                                <input type="text" name="primary-meneficiaries" id="primary-meneficiaries"
                                    placeholder="primary-meneficiaries" value="" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="field">
                                <label for="">Choose domain of activity</label>
                                <input type="text" name="domain-of-activity" id="domain-of-activity"
                                    placeholder="domain-of-activity" value="" required>
                            </div>
                            <div class="field">
                                <label for="">Board of directors</label>
                                <div class="radio-flex">
                                    <div class="sub">
                                        <input type="radio" name="board-of-directors" id="board-of-directors-yes">
                                        <label for="board-of-directors-yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="sub">
                                        <input type="radio" name="board-of-directors" id="board-of-directors-no">
                                        <label for="board-of-directors-no">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label for="">Organisation leadership</label>
                            <div class="radio-flex">
                                <div class="sub">
                                    <input type="radio" name="leadership" id="leadership-women">
                                    <label for="leadership-women">
                                        Women headed organization
                                    </label>
                                </div>
                                <div class="sub">
                                    <input type="radio" name="leadership" id="leadership-youth">
                                    <label for="leadership-youth">
                                        Youth lead organization
                                    </label>
                                </div>
                                <div class="sub">
                                    <input type="radio" name="leadership" id="leadership-General">
                                    <label for="leadership-General">
                                        General
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label for="">African coverage CSO</label>
                            <input type="text" name="name" id="name" placeholder="name" value=""
                                required>
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
</x-layouts.app>
