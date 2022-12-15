<footer>
    <div class="footer-links">
        <div class="container">
            <div class="navigation-links">
                <ul>
                    @foreach ($links as $link)
                        <li><a href="{{ $link['href'] }}">{{ $link['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="footer-social">
        <div class="container">
            <div class="button">
                <button>SIGN-UP NOW!</button>
            </div>
            <div class="social-links">
                <h3>FOLLOW US</h3>
                <ul>
                    <li>
                        <a href="/facebook">
                            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook icona">
                        </a>
                    </li>
                    <li>
                        <a href="/periscope">
                            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope icona">
                        </a>
                    </li>
                    <li>
                        <a href="/pinterest">
                            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest icona">
                        </a>
                    </li>
                    <li>
                        <a href="/twitter">
                            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter icona">
                        </a>
                    </li>
                    <li>
                        <a href="/youtube">
                            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube icona">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
