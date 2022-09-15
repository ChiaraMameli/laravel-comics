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
