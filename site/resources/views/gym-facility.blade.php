@extends('layout.app')

@section('content')
       <!-- Hero Section Begin -->
       @include('component.hero')
       <!-- Hero Section End -->

       <section class="gym-section mt-5 text-center">
        <h1 class="mt-5">Welcome to Our Gym</h1>
        <p class="mt-2">Be fit, be happy, be healthy.</p>
        <div class="gym-wrapper row ">
            <div class="gallery col-md-6 col-sm-12 mt-5 ">
                <div data-featherlight-gallery data-featherlight-filter="a" class="d-flex flex-wrap text-center p-5">
                    <a href="{{asset('client/images')}}/gym(1).jpg" data-featherlight="image"><img class="img-fluid"
                            src="{{asset('client/images')}}/gym(1).jpg" width="150px" height="auto"></a>
                    <a href="{{asset('client/images')}}/gym(2).jpg" data-featherlight="image"><img class="img-fluid"
                            src="{{asset('client/images')}}/gym(2).jpg" width="150px" height="auto"></a>
                    <a href="{{asset('client/images')}}/gym(3).jpg" data-featherlight="image"><img class="img-fluid"
                            src="{{asset('client/images')}}/gym(3).jpg" width="150px" height="auto"></a>
                    <a href="{{asset('client/images')}}/gym(4).jpg" data-featherlight="image"><img class="img-fluid"
                            src="{{asset('client/images')}}/gym(4).jpg" width="150px" height="auto"></a>
                    <a href="{{asset('client/images')}}/gym(5).jpg" data-featherlight="image"><img class="img-fluid"
                            src="{{asset('client/images')}}/gym(5).jpg" width="150px" height="auto"></a>
                    <a href="{{asset('client/images')}}/gym_EPS132.jpg" data-featherlight="image"><img class="img-fluid"
                            src="{{asset('client/images')}}/gym_EPS132.jpg" width="150px" height="auto"></a>
                </div>
            </div>
            <div class="gym-about col-md-6 col-sm-12 mt-5">
                <div class="gym-menu p-5">
                    <h1>Gym Facilities</h1>
                    <hr class="w-75 text-center mb-5">
                    <div class="menu-item text-left mb-5 col-sm-12 ">
                        <ol>
                            <li>Power Racks - Available</li>
                            <li>Hot Shower - Available</li>
                            <li>IPS System - Available</li>
                            <li>Locker System - Available</li>
                            <li>Massage Machine - Available</li>
                            <li>Steam bath Automatic - Available</li>
                            <li>Multi-jungles</li>
                            <li>8-station Crossover Cable.</li>
                            <li>Hammer Strength plate-loaded equipment</li>
                            <li>Fitness Roll Flooring</li>
                            <li>Indoor Climbing</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

    </section>
   
 @endsection