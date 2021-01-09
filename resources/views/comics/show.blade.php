@extends('layouts.main')


@section('content')
    <main class="hero-detail">
        <section class="section-hero comic-section" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container pt-3 mt-1">
                <img src="{{ $comic['image-cover'] }}" alt={{ $comic['title'] }}>
            </div>
        </section>

        <div class="blue-bar"></div>


        <section class="comic-section container">
            <div class="info-comic"> 

                <h1 class="title pt-2 pb-1">{{ $comic['title'] }}</h1>

                <ul class="disp-flex text-available">
                    <li class="price">U.S Price: $ {{ $comic['price'] }}</li>
                    <li class="available">AVAILABLE ON 11/10</li>
                    <li>Check Availability 
                        <i class="fas fa-caret-down"></i>
                    </li>
                </ul>
            
               <div class="description pt-2">{!! $comic['body'] !!}</div>

            </div>

            <section class="adv pt-3">
                <p>Advertisement</p>
                <img class="pt-1" src="{{ asset("images/adv.png") }}" alt="advertisement">
            </section>

            <div class="social-col relative">
                <ul class="list-boxes">
                    <li class="box-blue">
                        <i class="fab fa-facebook-square"></i>
                    </li>
                    <li class="box-lt-blue">
                        <i class="fab fa-twitter"></i>
                    </li>
                    <li class="box-red">
                        <i class="fab fa-pinterest-p"></i>
                    </li>
                    <li class="box-orange">
                        <i class="fas fa-map-marker-alt"></i>
                    </li>
                </ul>
            </div>
             
        </section>

        <div class="info-content pb-2 mt-2">
          <div class="container info-part">
            <div class="talent">
                <ul class="talent-list">
                    <h3 class="mb-2">Talent</h3>
                    <li class="talent-item">
                        Art by: 
                        <span class="blue-lt">Sandy Jarrell <span class="dot">,</span> Agnes Garbowska</span>
                    </li>
                    <li class="talent-item">
                        Written by: 
                        <span class="blue-lt">P.C. Morrissey <span class="dot">,</span> Heather Nuhfer</span>
                    </li>
                </ul>
            </div>

            <div class="specs">
                <ul class="specs-list">
                    <h3 class="mb-2">Specs</h3>
                    <li class="specs-item">
                        Series: 
                        <span class="blue-lt"> {{ $comic['title'] }} </span>
                    </li>
                    <li class="specs-item">
                        U.S. Price: 
                        <span class="black">{{ $comic['price'] }}</span>
                    </li>
                    <li class="specs-item">
                        On Sale Date: 
                        <span class="black">Nov 10 2020</span>
                    </li>
                </ul>
            </div>
          </div>
        </div>

        <div class="comic-detailed">
            <ul class="info-list-bottom disp-flex container">
                <li class="info-item-bottom">
                    <a href="#" class="disp-flex">
                        <h5>Digital comics</h5>
                        <img src="{{ asset('images/digital.png')}}" alt="Digital">
                    </a>
                </li>
                <li class="info-item-bottom">
                    <a href="#" class="disp-flex">
                        <h5>SHOP DC</h5>
                        <img src="{{ asset('images/shop.png')}}" alt="DC Merchandise">
                    </a>
                </li>
                <li class="info-item-bottom">
                    <a href="#" class="disp-flex">
                        <h5>Comic shop leocator</h5>
                        <img src="{{ asset('images/locator.png')}}" alt="Comic shop leocator">
                    </a>
                </li>
                <li class="info-item-bottom">
                    <a href="#" class="disp-flex">
                        <h5>subscriptions</h5>
                        <img src="{{ asset('images/subscription.png')}}" alt="Subscription">
                 </a>
                </li>
            </ul>
        </div> 

    </main>
@endsection

