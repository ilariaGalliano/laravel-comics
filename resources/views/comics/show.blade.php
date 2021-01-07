@extends('layouts.main')


@section('content')
    <main class="hero">
        <section class="section-hero comic-section" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container pt-3 mt-1">
                <img src="{{ $comic['image-cover'] }}" alt={{ $comic['title'] }}>
            </div>
        </section>


        <section class="comic-section">
            <div class="container"> 
                
               <h1 class="title">{{ $comic['title'] }}</h1>
               <div class="price">{{ $comic['price'] }}</div>
               <div class="description">{{$comic['body'] }}</div>
                

            </div>

        </section>
        
    </main>
@endsection