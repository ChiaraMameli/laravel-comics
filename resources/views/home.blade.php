    @extends('layout.main')

    @section('main-content')
        <main>
            <div id="background">
                <span id="current-series">CURRENT SERIES</span>
            </div>
            <div class="container box">
                @foreach($comics as $index => $comic)
                    <div  class="comic-card">
                        <a href="{{route('comics')}}">
                            <figure>
                                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                            </figure>
                            <figcaption>{{$comic['series']}}</figcaption>
                        </a>
                    </div>
                @endforeach
            </div>
        </main>
    @endsection
