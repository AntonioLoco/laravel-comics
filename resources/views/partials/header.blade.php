<header>
    <div class="header-top">
        <div class="container">
            <p>DC POWER VISA</p>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container pt-3 d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc Logo">
            </div>
            <nav>
                <ul class="d-flex">
                    @foreach ($links as $link)
                        <li><a href="{{ $link['href'] }}">{{ $link['name'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>
