    <section id="banner-section">
        <div class="container">
            @foreach($banner_links as $link)
                <figure>
                    <img src="{{asset($link['src'])}}" alt="{{$link['text']}}">
                    <figcaption><a href="{{$link['url']}}">{{$link['text']}}</a></figcaption>
                </figure>
            @endforeach
        </div>
    </section>
