@extends('layout.main')

@section('main-content')
    <main class="white-main">
        <div id="background" class="border-bottom">
            <div class="small-container wall-position">
                <img src="{{$comic['thumb']}}" alt="" class="thumb">
            </div>
        </div>

        <div id="comic-detail" class="small-container">
            <h1 class="m-b">{{$comic['title']}}</h1>

            <div class="availability-box m-b">
                <div class="price-section">
                    <div>U.S. Price: <span class="text-white">{{$comic['price']}}</span></div>
                    <div>AVAILABLE</div>
                </div>
                <div class="availability-select text-white">Check availability</div>
            </div>

            <p class="comic-description">{{$comic['description']}}</p>
        </div>

        <div class="comic-table m-b">
            <div class="small-container d-flex">
                <div class="talent">
                    <h3>Talent</h3>
                    <div class="table-row">
                        <div class="table-column">Art by:</div>
                        <div class="table-column">
                            @foreach($comic['artists'] as $artist)
                            <span class="text-blue">{{$artist}}@if(!$loop->last),@endif </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-column">Written by:</div>
                        <div class="table-column">
                            @foreach($comic['writers'] as $writer)
                                <span class="text-blue">{{$writer}}@if(!$loop->last),@endif </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="specs">
                <h3>Specs</h3>
                        <div class="table-row">
                            <div class="table-column">Series:</div>
                            <div class="table-column text-blue">{{$comic['series']}}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-column">U.S. Price:</div>
                            <div class="table-column">{{$comic['price']}}</div>
                        </div>
                        <div class="table-row">
                            <div class="table-column">On Sale Date:</div>
                            <div class="table-column">{{$comic['sale_date']}}</div>
                        </div>
                </div>
            </div>
        </div>

    </main>
@endsection