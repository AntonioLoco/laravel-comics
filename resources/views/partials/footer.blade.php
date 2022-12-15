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
</footer>
