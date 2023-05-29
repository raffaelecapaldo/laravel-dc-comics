@extends('layouts.default')
@section('title')
{{$comic['title']}}
@endsection

@section('content')
    <main>
        <div class="jumbotron"></div>
        <div class="blue-divider">
            <div class="singleimage">
                <div class="container">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
            </div>
        </div>

        <div class="container d-flex flex-column gap-2 align-items-center">
            <div class="title-comic mt-5 text-uppercase">
                <h1>{{ $comic['title'] }}</h1>
            </div>
            <div class="price fw-bold px-5">
                U.S. Price: {{ $comic['price'] }}
            </div>
            <p class="text-center">{{ $comic['description'] }}</p>
        </div>

        <div class="container info-scomic mt-4 mb-5">
            <div class="row justify-content-center gap-5">
                <div class="col-5">
                    <div class="sec-title mb-3 ">
                        <h5>Talents</h5>
                    </div>
                    <div class="art-by  btg1  row">
                        <div class="sub-title bmg1 col-5 py-3">
                            <h6>Art by:</h6>
                        </div>
                        <div class="sub-content bmg1 col-7  py-3">
                            @foreach ($comic['artists'] as $artist)
                            <span> {{$artist}}, </span>
                            @if ($loop->last)
                            <span> {{$artist}}. </span>

                            @endif

                            @endforeach
                        </div>
                    </div>
                    <div class="written-by bmg1 row">
                        <div class="sub-title py-3 col-5">
                            <h6>Written by:</h6>
                        </div>
                        <div class="sub-content py-3 col-7">
                            @foreach ($comic['writers'] as $writer)
                            <span> {{$writer}}, </span>
                            @if ($loop->last)
                            <span> {{$writer}}. </span>

                            @endif

                            @endforeach
                        </div>
                    </div>



                </div>
                <div class="col-5">
                    <div class="sec-title mb-3 ">
                        <h5>Specs</h5>
                    </div>
                    <div class="series-by btg1  row">
                        <div class="sub-title  bmg1 py-3 col-5">
                            <h6>Series</h6>
                        </div>
                        <div class="sub-content bmg1 py-3 col-7">
                           {{$comic['series']}}
                        </div>
                    </div>
                    <div class="price-is  bmg1 row">
                        <div class="sub-title py-3 col-5">
                            <h6>U.S Price:</h6>
                        </div>
                        <div class="sub-content py-3 col-7">
                            {{$comic['price']}}
                        </div>
                    </div>
                    <div class="sale-date  row">
                        <div class="sub-title py-3 bmg1 col-5">
                            <h6>On sale date:</h6>
                        </div>
                        <div class="sub-content py-3 bmg1 col-7">
                            {{$comic['sale_date']}}
                        </div>
                    </div>



                </div>

            </div>
    </main>

@endsection
