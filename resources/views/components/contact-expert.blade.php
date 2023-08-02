<div class="contact-expert">
    <h2>Contact {{ $name }}</h2>
    <form action="{{ route('send-expert-mail', ['expert' => $expertId]) }}" method="post">
        @csrf
        <div class="flex">
            <div class="field">
                <label for="">{{ __('contact.Name') }}*</label>
                <input type="text" name="name" id="name" placeholder="{{ __('contact.Name') }}" value=""
                    required>
            </div>
            <div class="field">
                <label for="">{{ __('contact.Phone') }}*</label>
                <input type="text" name="phone" id="phone" placeholder="{{ __('contact.Phone') }}"
                    value="" required>
            </div>
        </div>
        <div class="field">
            <label for="">{{ __('contact.Email') }}*</label>
            <input type="text" name="email" id="email" placeholder="{{ __('contact.Email') }}" value=""
                required>
        </div>
        <div class="field">
            <label for="">{{ __('contact.Subject') }}*</label>
            <input type="text" name="subject" id="subject" placeholder="{{ __('contact.Subject') }}" value=""
                required>
        </div>
        <div class="field">
            <label for="">{{ __('contact.Message') }}*</label>
            <textarea name="message" id="" cols="30" rows="10"
                placeholder="{{ __('contact.Enter your message') }}" value="" required></textarea>
        </div>
        <button type="submit" class="custom-button secondary">
            <span>{{ __('contact.send') }}</span>
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
        </button>
    </form>
</div>
