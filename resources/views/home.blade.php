{{-- Indico il layout che intendo utilizzare --}}
@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', 'Laravel comics - Home')

{{-- Indico il contenuto principale della pagina --}}
@section('content')
    {{-- Sezione current series --}}
    <div class="comics-main">
        <img src="{{ asset('img/jumbotron.jpg') }}" alt="bg image" class="my-jumbotron">
        <div class="container pb-3">
            <div class="section-comics-title">
                <h3 class="text-uppercase p-0 m-0 fs-5">
                    current series
                </h3>
            </div>
            <div class="row">
                @foreach ($comics as $comicSingle)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="comics-list pt-3 d-flex justify-content-center">
                            <div>
                                <img src="{{ $comicSingle['thumb'] }}" alt="{{ $comicSingle['series'] }}">
                                <p class="text-white text-uppercase m-0 p-0 pt-2"> {{ $comicSingle['series'] }} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex align-items-center justify-content-center pt-2">
                <button type="button" class="btn my-btn-comics text-uppercase pe-5 ps-5">
                    load more
                </button>
            </div>
        </div>
    </div>

    {{-- Sezione banner --}}
    <div class="banner pt-4 pb-4 overflow-hidden">
        <div class="row justify-content-center">
            @foreach ($bannerLinks as $link)
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset($link['srcImg']) }}" alt="{{ $link['name'] }}" class="pe-2">
                        <p class="text-white text-uppercase text-nowrap m-0 p-0"> {{ $link['name'] }} </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
