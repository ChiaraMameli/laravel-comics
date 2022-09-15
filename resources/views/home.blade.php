<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">    
    <title>Comics</title>
</head>
<body>

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

    <main>
        <div id="background">
            <span id="current-series">CURRENT SERIES</span>
        </div>
        <div class="container box">
            @foreach($comics as $comic)
                <div  class="comic-card">
                    <figure>
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    </figure>
                    <figcaption>{{$comic['series']}}</figcaption>
                </div>
            @endforeach
        </div>
    </main>

    <section id="banner-section">
    <div class="container">
        @foreach($banner_links as $link)
            <figure>
                <img src="{{$link['src']}}" alt="{{$link['text']}}">
                <figcaption><a href="{{$link['url']}}">{{$link['text']}}</a></figcaption>
            </figure>
        @endforeach
    </div>
  </section>


</body>
</html>