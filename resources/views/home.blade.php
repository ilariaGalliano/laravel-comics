@extends('layouts.main')


@section('content')
    <main class="hero">
        <section class="section-hero">
            <div class="container pt-3 mt-1">
                <img src="{{ asset('images/cover-home.jpg')}}" alt="Dc Comics">
            </div>
        </section>


        <section class="comic-section">
            <div class="container"> 
                <ul class="list-comics pt-2 pb-2">
                    @foreach ($comics as $comic)
                        <li>
                          <a href="{{ route('comic-detail' , $comic['id']) }}">
                            <img src="{{ $comic['image'] }}" alt="">
                            <h4> 
                                <a href="">{{ $comic['title'] }}</a>
                            </h4>
                          </a>
                        </li>
                    @endforeach
                </ul>

            </div>

        </section>
        
    </main>
@endsection