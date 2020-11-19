@extends('client.layout.app')

@section('broadcramb', 'About')
@section('content')




    <!-- Hero Section Begin -->
    @include('client.component.hero')
    <!-- Hero Section End -->



    <section class="about-section row m-0">
        <div class="about-image col-md-6 col-sm-12">
            <img class="img-fluid" src="<?php if ($aboutPageData) {
                    echo $aboutPageData->image;
                } ?>" alt="">
        </div>
        <div class="about-content col-md-6 col-sm-12 text-justify">
            <h1 style="word-wrap: break-word; margin: 0rem 1rem;">
                <?php if ($aboutPageData): ?>
                {!! nl2br(e($aboutPageData->title)) !!}
                <?php endif; ?>
            </h1>
            <br>
            <p  style="word-wrap: break-word;">
                <?php if ($aboutPageData): ?>
                {!! nl2br(e($aboutPageData->description)) !!}
                <?php endif; ?>
            </p>
        </div>
    </section>







    <section class="counters">
        <div class="container">
            <div>
                <i class="fab fa-youtube fa-3x"></i>
                <div class="counter" data-target="<?php if ($aboutPageData) {
                            echo $aboutPageData->youtube;
                        } ?> ">0</div>
                <h3>Subscribers</h3>
            </div>
            <div>
                <i class="fab fa-twitter fa-3x"></i>
                <div class="counter" data-target="<?php if ($aboutPageData) {
                            echo $aboutPageData->twitter;
                        } ?>">0</div>
                <h3>Followers</h3>
            </div>
            <div>
                <i class="fab fa-facebook fa-3x"></i>
                <div class="counter" data-target="<?php if ($aboutPageData) {
                            echo $aboutPageData->facebook;
                        } ?> ">0</div>
                <h3>Likes</h3>
            </div>
            <div>
                <i class="fab fa-linkedin fa-3x"></i>
                <div class="counter" data-target="<?php if ($aboutPageData) {
                            echo $aboutPageData->linkedin;
                        } ?> ">0</div>
                <h3>Connections</h3>
            </div>
        </div>
    </section>




    <section class="review-section mt-5">
        <div class="text-center">
            <a href="https://www.booking.com/hotel/bd/bluebird-ltd.html">
                <img src="{{ asset('client/images') }}/booking .com logodesgin.png" alt="">
            </a>
            <span class="review-devidor">Foxuries Resort & Hotel Booking</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span><?php if ($aboutPageData) {
                echo $aboutPageData->review;
                } ?> (Reviews)</span>
        </div>
    </section>


    <!-- 
        <section class="extra-services-section text-center m-5 ">
            <img src="{{ asset('client/images') }}/icon-02.svg" alt="" class="icon-logo mt-5" data-aos="fade-up"
                data-aos-duration="500" data-aos-easing="ease-in-out">
            <p class="mt-3" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">SERVICES</p>
            <h1 class="mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">Extra Services 
            </h1>
            <div class="ex-service mt-5 row" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="col-md-3 px-5"
                    style="background-image: url({{ asset('client/images') }}/shape.png); background-repeat: no-repeat; background-position: center top;">
                    <h3 class="mt-3">1.</h3>
                    <h4 class="mt-3">Family Rooms​</h4>
                    <p class="mt-3 text-muted">We’ll pick up from airport while you comfy on your ride.</p>
                </div>
                <div class="col-md-3 px-5"
                    style="background-image: url({{ asset('client/images') }}/shape.png); background-repeat: no-repeat; background-position: center top;">
                    <h3 class="mt-3">2.</h3>
                    <h4 class="mt-3">Airport shuttle​​</h4>
                    <p class="mt-3 text-muted">Please consider your private parking or better yet.</p>
                </div>
                <div class="col-md-3 px-5"
                    style="background-image: url({{ asset('client/images') }}/shape.png); background-repeat: no-repeat; background-position: center top;">
                    <h3 class="mt-3">3.</h3>
                    <h4 class="mt-3">Guest Parking​</h4>
                    <p class="mt-3 text-muted">We have the fuel to start your day right.</p>
                </div>
                <div class="col-md-3 px-5"
                    style="background-image: url({{ asset('client/images') }}/shape.png); background-repeat: no-repeat; background-position: center top;">
                    <h3 class="mt-3">4.</h3>
                    <h4 class="mt-3">Fitness Centre​​</h4>
                    <p class="mt-3 text-muted">Let us know if you need anything to be more comfortable</p>
                </div>
            </div>
        </section>
    -->

    <section class="extra-services-section text-center m-5 ">
        {{-- <img src="{{ asset('client/images') }}/icon-02.svg" alt="" class="icon-logo mt-5" data-aos="fade-up"
            data-aos-duration="500" data-aos-easing="ease-in-out">
        <p class="mt-3" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">SERVICES</p> --}}
        <h1 class="mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">Extra Services
        </h1>
        <div class="ex-service mt-5 row" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
            @php
                 $i=0;
            @endphp

            @foreach ($aboutESPageDatas as $aboutESPageData)
              @php
                  $i++
              @endphp
            <div class="col-md-3 px-5 mt-5"
            style="background-image: url({{ asset('client/images') }}/shape.png); background-repeat: no-repeat; background-position: center top;">
            <h3 class="mt-3">
               @php
                   echo $i;
               @endphp
            </h3>
            <h4 class="mt-3">{{$aboutESPageData->title}}</h4>
            <p class="mt-3 text-muted"  style="word-wrap: break-word;">
                <?php if ($aboutPageData): ?>
                {!! nl2br(e($aboutESPageData->description)) !!}
                <?php endif; ?>
               
            
            </p>
        </div>
            @endforeach
           
            
        </div>
    </section>


@section('script')
    <script src="{{ asset('client') }}/js/counter.js"></script>
@endsection


@endsection
