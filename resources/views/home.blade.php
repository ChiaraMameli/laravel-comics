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
  <footer>
        <div id="footer-top">
            <div class="container">
                <div class="list-column">
                    <h4>{{$footer_links[0]['title']}}</h4>
                    <ul>
                        @foreach($footer_links[0]['links'] as $link)
                            <li>{{$link}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="list-column">
                <h4>{{$footer_links[1]['title']}}</h4>
                    <ul>
                        @foreach($footer_links[1]['links'] as $link)
                            <li>{{$link}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="list-column">
                <h4>{{$footer_links[2]['title']}}</h4>
                    <ul>
                        @foreach($footer_links[2]['links'] as $link)
                            <li>{{$link}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="list-column">
                <h4>{{$footer_links[3]['title']}}</h4>
                    <ul>
                        @foreach($footer_links[3]['links'] as $link)
                            <li>{{$link}}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <img id="background-logo" src="{{asset('images/dc-logo-bg.png')}}" alt="dc logo">
                </div>
            </div>
        </div>
        <div id="footer-bottom">
            <div class="container">
                <a id="sign-up" src="#">SIGN-UP NOW</a>
                <nav>
                    <a id="follow-us" src="#">FOLLOW US</a>
                    <ul>
                        <li><a href="#"><img src="{{asset('images/footer-facebook.png')}}" alt="facebook logo"></a></li>
                        <li><a href="#"><img src="{{asset('images/footer-twitter.png')}}" alt="twitter logo"></a></li>
                        <li><a href="#"><img src="{{asset('images/footer-youtube.png')}}" alt="youtube logo"></a></li>
                        <li><a href="#"><img src="{{asset('images/footer-pinterest.png')}}" alt="pinterest logo"></a></li>
                        <li><a href="#"><img src="{{asset('images/footer-periscope.png')}}" alt="periscope logo"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>


</body>
</html>