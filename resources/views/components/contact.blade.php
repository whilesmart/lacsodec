<section class="contact-section">
    <div class="con">
        <div class="left">
            <h2>Get in touch</h2>
            <form action="{{ route('contact-mail') }}" method="post">
                @csrf
                <div class="flex">
                    <div class="field">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="">Phone</label>
                        <input type="text" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}" required>
                        @error('phone')
                            <span class="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
                <div class="field">
                    <label for="">Subject</label>
                    <input type="text" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                    @error('subject')
                        <span class="error-msg">{{ $message }}</span>
                    @enderror
                </div>
                <div class="field">
                    <label for="">Message</label>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message" value="{{ old('message') }}" required></textarea>
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
                    <span>send</span>
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <div class="right">
            <h2>Contact Info</h2>
            <p>If you’d like to get in touch with us, please use the form or the contact details below. Looking forward
                to hearing from you!</p>
            <div class="info">
                <div class="sub">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>Address: {{$contactInfo->location}}</p>
                </div>
                <div class="sub">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>{{$contactInfo->listed_email_address}}</p>
                </div>
                <div class="sub">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>Phone: {{$contactInfo->phone_number}}</p>
                </div>
            </div>
            <div class="social">
                <ul>
                    <li>
                        <a href="">
                            <i class="fab fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-pinterest" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
