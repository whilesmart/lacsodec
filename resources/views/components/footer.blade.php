<footer>
    <div class="top">
        <div class="con">
            <div class="sub">
                <img src="{{ asset('images/logos/lacsodec-logo-white.png') }}" alt="" class="logo">
                <p>{{__('footer.We promote knowledge acquisition, resource sharing and fairness among CSOs of all levels, with the ultimate goal of benefiting the populace.')}}</p>
                <a href="{{ route('donate') }}" class="custom-button secondary"><span>{{__('footer.Donate now')}}</span></a>
            </div>
            <div class="sub">
                <h3>{{__('footer.Follow us on')}}</h3>
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
            <div class="sub">
                <h3>{{__('footer.contact us')}}</h3>
                <p>
                    {{__('contact.Email')}}: info@lacsodec.org,<br>
                    {{__('contact.Address')}}: NGO Street, <br>
                    Molyko - Buea
                </p>
                <p>{{__('contact.Phone')}}: +237 677947449</p>
            </div>
            <div class="sub">
                <h3>{{__('footer.Newsletter')}}</h3>
                <p>{{__('footer.Join our subscribers list to get the latest news and updates delivered directly in your inbox.')}}</p>
                <form action="">
                    <input type="text" name="" id="" placeholder="{{__('footer.Your email address')}}">
                    <button type="submit">{{__('footer.Sign up')}}</button>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="con">
            <p>{{__('footer.Copyright © 2023 by')}} <a href="https://whilesmart.com" target="__blank">whilesmart</a></p>
        </div>
    </div>
</footer>
