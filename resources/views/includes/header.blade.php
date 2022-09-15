    <header class="container">
        <nav>
            <a href="#">
                <img src="{{asset('images/dc-logo.png')}}" alt="dc logo">
            </a>
            <div id="nav-links">
                <ul>
                    @foreach($header_links as $link)
                        <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </header>
