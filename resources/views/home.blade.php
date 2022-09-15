@extends('layout.main')

    @section('main-content')
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
    @endsection
