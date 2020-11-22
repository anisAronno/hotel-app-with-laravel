@extends('client.layout.app')
@section('broadcramb','Rersturant')
@section('content')


        <!-- Hero Section Start -->
        <div class="resturant-hero mt-5 pt-5">
            <div class="resturant-hero-content text-center">
                </iframe>
                <iframe class="mx-auto" width="80%" height="500" src="@if ($ResturantAbout)
                {{$ResturantAbout->video}}
                @endif" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

      
        <!-- Hero Section End -->

        <section class="resturant-about-section mt-5 text-center">
            <h1 class="mt-5"> Terrace View Restaurant</h1>
            <p class="mt-2">Come to Terrace View restaurant, eat and be happy.</p>
            <div class="resturant-wrapper row ">
                <div class="gallery col-md-6 col-sm-12 mt-5 ">
                    <div data-featherlight-gallery data-featherlight-filter="a" class="d-flex flex-wrap text-center">
                        @foreach ($ResturantImages as $ResturantImage)
                            <a href="@if ($ResturantImage)
                                {{$ResturantImage->image}}
                                @endif" data-featherlight="image"><img class="img-fluid"
                                        src="@if ($ResturantImage)
                                        {{$ResturantImage->image}}
                                @endif" width="150px" height="auto">
                            </a>
                        @endforeach
                       
                        
                    </div>
                </div>
                <div class="resturant-about col-md-6 col-sm-12 mt-5">
                    <div class="resturant-content">
                        <div class="resturant-about text-center">
                            <h2 class="text-break">
                                @if ($ResturantAbout)
                                {!! nl2br(e($ResturantAbout->title)) !!}
                                @endif
                                
                            </h2>
                            <p class="p-5 text-break"> @if ($ResturantAbout)
                                {!! nl2br(e($ResturantAbout->description)) !!}
                            @endif</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="resturant-menu p-5">
                <h1 >Menu Card Details</h1>
                <hr class="w-25 text-center mb-5">
                <div class="row">
                    
                    @foreach ($ResturantMenus as $ResturantMenu)
                    @if ($ResturantMenu->category==1)
                        <div class="menu-item text-left mb-5 col-md-3 col-sm-12">

                            <div class="card mb-3 menu-heading text-break  text-white bg-dark mb-3" style="max-width: 18rem;">
                                        <div class="card-header text-uppercase">
                                        @if ($ResturantMenu)
                                         {!! nl2br(e($ResturantMenu->title)) !!}
                                        @endif
                                        </div>
                                        <div class="card-body">

                                        <p  class="text-break">
                                            @if ($ResturantMenu)
                                            {!! nl2br(e($ResturantMenu->description)) !!}
                                        @endif
                                        </p>
                                    </div>
                            </div>
                        </div>
                    @endif
                   
                    @endforeach
                    
                    

                </div>

            </div>
            <div class="row">
                <div class="resturant-set-menu p-5 col-md-6">
                    <h1>Set Menu </h1>
                    <hr class="w-50 text-center mb-5">
                    <div class="row">
                        @foreach ($ResturantMenus as $ResturantMenu)
                        @if ($ResturantMenu->category==2)
                        <div class="menu-item mb-5 col-md-6  col-sm-12">
                            <div class="card mb-3 menu-heading text-break  text-white bg-dark" style="max-width: 18rem;">
                                <div class="card-header text-uppercase">
                                @if ($ResturantMenu)
                                 {!! nl2br(e($ResturantMenu->title)) !!}
                                @endif
                                </div>
                                <div class="card-body">

                                <p  class="text-break">
                                    @if ($ResturantMenu)
                                    {!! nl2br(e($ResturantMenu->description)) !!}
                                @endif
                                </p>
                            </div>
                    </div>

                        </div>
                        @endif
                        @endforeach
                     

                    </div>

                </div>
           

            <div class="resturant-party-menu p-5 col-md-6">
                <h1>Party Menu </h1>
                <hr class="w-50 text-center mb-5">
                <div class="row">
                    @foreach ($ResturantMenus as $ResturantMenu)
                    @if ($ResturantMenu->category==3)
                    <div class="menu-item text-center mb-5 col-md-6 col-sm-12">
                        <div class="card mb-3 menu-heading text-break  text-white bg-dark" style="max-width: 18rem;">
                            <div class="card-header text-uppercase">
                            @if ($ResturantMenu)
                             {!! nl2br(e($ResturantMenu->title)) !!}
                            @endif
                            </div>
                            <div class="card-body">

                            <p  class="text-break">
                                @if ($ResturantMenu)
                                {!! nl2br(e($ResturantMenu->description)) !!}
                            @endif
                            </p>
                        </div>
                </div>

                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            </div>


        </section>

        
        @include('client.component.testimonial')

@endsection
