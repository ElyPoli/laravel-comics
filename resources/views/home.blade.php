{{-- Indico il layout che intendo utilizzare --}}
@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', 'Laravel comics - Home')

{{-- Indico il contenuto principale della pagina --}}
@section('content')
    <h1>Contenuto Home</h1>
    <div class="banner pt-4 pb-4 overflow-hidden">
        <div class="row justify-content-center">
            @foreach ($bannerLinks as $link)
            {{-- <li class="list-group-item pt-1 pt-md-0">
                <a href="{{ $link['name'] }}" class="link-underline link-underline-opacity-0">
                    {{ $link['name'] }}
                </a>
            </li> --}}


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
