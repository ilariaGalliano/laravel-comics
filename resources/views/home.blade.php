@extends('layouts.main')


@section('content')
    <main class="hero">

        <section class="section-hero">
            <div class="container pt-3 mt-1">
                <img src="{{ asset('images/cover-home.jpg')}}" alt="Dc Comics">
            </div>
        </section>

        <div class="blue-block"></div>

        <section class="comic-section">
            <div class="container"> 
                <ul class="list-comics pt-2 pb-2">
                    @foreach ($comics as $comic)
                        <li>
                          <a href="{{ route('comic-detail' , $comic['slug']) }}">
                            <img src="{{ $comic['image'] }}" alt="">
                            <h4> 
                                <a href="">{{ $comic['title'] }}</a>
                            </h4>
                          </a>
                        </li>
                    @endforeach
                </ul>

                <div class="relative">
                    <div class="center">
                      <button class="btn-blue">Load More</button>
                    </div>
                </div>

            </div>

        </section>

        <section class="comic-section-bottom">
            <div class="container pt-2 pb-2">
                <ul class="disp-flex">
                    <li>
                        <img src="{{ asset('images/digital-comics.png')}}" alt="Dc comics">
                        <span>Digital comics</span>
                    </li>
                    <li>
                        <img src="{{ asset('images/merchandise.png')}}" alt="merchandise">
                        <span>Dc merchandise</span>
                    </li>
                    <li>
                        <img src="{{ asset('images/subscription.png')}}" alt="subscription">
                        <span>Subscription</span>
                    </li>
                    <li>
                        <img src="{{ asset('images/shop-locator.png')}}" alt="shop">
                        <span>Comic shop locator</span>
                    </li>
                    <li>
                        <img src="{{ asset('images/digital.png')}}" alt="digital">
                        <span>Dc power visa</span>
                    </li>
                </ul>
            </div>
        </section>


        
    </main>
@endsection