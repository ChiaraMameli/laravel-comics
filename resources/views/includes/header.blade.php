    <header class="container">
        <nav>
            <a href="{{route('home')}}">
                <img src="{{asset('images/dc-logo.png')}}" alt="dc logo">
            </a>
            <div id="nav-links">
                <ul>
                    @foreach($header_links as $link)
                        <li><a href="{{route($link['route'])}}" class="{{Route::is($link['route']) ? 'active' : ''}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </header>
