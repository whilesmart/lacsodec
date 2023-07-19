<section class="contact-section">
    <div class="con">
        <div class="left">
            <h2>{{__('contact.Get in touch')}}</h2>
            <form action="{{ route('contact-mail') }}" method="post">
                @csrf
                <div class="flex">
                    <div class="field">
                        <label for="">{{__('contact.Name')}}</label>
                        <input type="text" name="name" id="name" placeholder="{{__('contact.Name')}}" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="">{{__('contact.Phone')}}</label>
                        <input type="text" name="phone" id="phone" placeholder="{{__('contact.Phone')}}" value="{{ old('phone') }}" required>
                        @error('phone')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="">{{__('contact.Email')}}</label>
                    <input type="text" name="email" id="email" placeholder="{{__('contact.Email')}}" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
                <div class="field">
                    <label for="">{{__('contact.Subject')}}</label>
                    <input type="text" name="subject" id="subject" placeholder="{{__('contact.Subject')}}" value="{{ old('subject') }}" required>
                    @error('subject')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
                <div class="field">
                    <label for="">{{__('contact.Message')}}</label>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="{{__('contact.Enter your message')}}" value="{{ old('message') }}" required></textarea>
                    @error('message')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <button type="submit" class="custom-button secondary">
                    <span>{{__('contact.send')}}</span>
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <div class="right">
            <h2>{{__('contact.Contact Info')}}</h2>
            <p>{{__("contact.If you'd like to get in touch with us, please use the form or the contact details below. Looking forward to hearing from you!")}}</p>
            <div class="info">
                <div class="sub">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>{{__('contact.Address')}}: {{$contactInfo->location}}</p>
                </div>
                <div class="sub">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>{{$contactInfo->listed_email_address}}</p>
                </div>
                <div class="sub">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>{{__('contact.Phone')}}: {{$contactInfo->phone_number}}</p>
                </div>
            </div>
            <div class="social">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/lukmefcameroon/" target="_blank">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <!-- LACSODEC HAS NO PINTEREST ACCOUNT
                            <li>
                            <a href="">
                                <i class="fab fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </li> -->
                        <li>
                            <a href="https://www.instagram.com/lukmefcam/" target="_blank">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/lukmefcameroon/" target="_blank">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@lukmefcameroon253/" target="_blank">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/martin-luther-king-jr-memorial-foundation-lukmef-/mycompany/" target="_blank">
                                <i class="fab fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
</section>
