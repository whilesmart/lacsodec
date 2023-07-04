<x-layouts.app>
    <div class="contact-us-page">
        <!-- breadcrumb -->
        @component('components.breacrumb')
            @slot('current')
                Contact us
            @endslot
        @endcomponent

        <x-contact :contactInfo="$contactInfo"></x-contact>

        <section class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15917.191904170486!2d9.2825461!3d4.1617072!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106131a7f6745d2d%3A0x61a8b0f02de1b600!2sLUKMEF%20AFRICA%20CIVIL%20SOCIETY%20DEVELOPMENT%20CENTER(LACSODEC)!5e0!3m2!1sen!2scm!4v1685948367346!5m2!1sen!2scm"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </div>
</x-layouts.app>
