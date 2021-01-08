@extends('layouts.main')


@section('content')
    <main class="hero-detail">
        <section class="section-hero comic-section" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container pt-3 mt-1">
                <img src="{{ $comic['image-cover'] }}" alt={{ $comic['title'] }}>
            </div>
        </section>

        <div class="blue-bar"></div>

        <section class="comic-section">
            <div class="container"> 
                
               <h1 class="title pt-2 pb-1">{{ $comic['title'] }}</h1>
               <div class="price mb-1">Price: $ {{ $comic['price'] }}</div>
               <div class="description pt-2">{!! $comic['body'] !!}</div>
                
            </div>

        </section>

    </main>
@endsection