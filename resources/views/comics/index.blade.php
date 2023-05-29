@extends('layouts.default')

@section('title', 'DC Comics - Home')
@section('content')
    <main>
        <div class="jumbotron"></div>

        <div class="comics">

            <div class="container cont-cards">
                <div class="showtitle text-white fs-3 fw-bold text-uppercase">

                    current series
                </div>
                <div class="row pt-5">
                    <!-- COMIC CARDS -->
                    @foreach ($comicCards as $comicCard)
                        <div class="col-xxl-2 col5 col-lg-3 col-md-4 col-sm-6 col-12  d-flex d-sm-block justify-content-center align-items-center col-comic">
                            <div class="comic-card mt-3 d-flex flex-column justify-content-center align-items-center d-sm-block">
                                <a href="{{route('comics', ['id' => $loop->index])}}">
                                <img class="cover" src="{{ $comicCard['thumb'] }}" alt="{{ $comicCard['title'] }}">
                                <div class="text-cover text-center text-sm-start">
                                    <p class="text-uppercase mt-3 ">{{ $comicCard['title'] }}</p>
                                </div>
                            </a>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="load text-white d-flex justify-content-center text-uppercase">
                    <span>load more</span>
                </div>
            </div>
        </div>

        <div class="items-dc">
            <div class="container p-5">
                <div class="d-flex justify-content-around align-items-center flex-wrap gap-3">
                    @foreach ($dcItems as $dcItem)
                        <div class="itemdc text-white">
                            <!-- itemdc -->
                            <img class="@if ($dcItem['text'] === 'Comic Shop Locator') smalldc
                    @else
                      '' @endif"
                                src="{{ $dcItem['image'] }}" :alt="{{ $dcItem['text'] }}">
                            <span class="ms-3 text-uppercase">{{ $dcItem['text'] }}</span>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>

@endsection

