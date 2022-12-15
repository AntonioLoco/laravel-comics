<header>
    <div class="header-top">
        <div class="container">
            <p class="mx-2">DC POWER VISA</p>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container pt-3 d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc Logo">
            </div>
            <nav>
                <ul class="d-flex justify-content-end">
                    @foreach ($links as $link)
                        <li><a href="{{ $link['href'] }}">{{ $link['name'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>
