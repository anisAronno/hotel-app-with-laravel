@extends('layout.app')
@section('broadcramb','Common Facility')
@section('content')
       <!-- Hero Section Begin -->
       @include('component.hero')
       <!-- Hero Section End -->

       <section class="common-section mt-5 text-center">
        <h1 class="mt-5">Come to Hotel Blue Bird</h1>
                    <div class="common-wrapper row ">
                        <div class="gallery col-md-6 col-sm-12 mt-5 ">
                            <div data-featherlight-gallery data-featherlight-filter="a" class="d-flex flex-wrap text-center p-5">
                                <a href="{{asset('client/images')}}/blog-3-500x560.jpg" data-featherlight="image"><img class="img-fluid"
                                        src="{{asset('client/images')}}/blog-3-500x560.jpg" width="150px" height="auto"></a>
                                <a href="{{asset('client/images')}}/blognew-2-500x560.jpg" data-featherlight="image"><img class="img-fluid"
                                        src="{{asset('client/images')}}/blognew-2-500x560.jpg" width="150px" height="auto"></a>
                                <a href="{{asset('client/images')}}/blog-3-500x560.jpg" data-featherlight="image"><img class="img-fluid"
                                        src="{{asset('client/images')}}/blog-3-500x560.jpg" width="150px" height="auto"></a>
                                <a href="{{asset('client/images')}}/blognew-2-500x560.jpg" data-featherlight="image"><img class="img-fluid"
                                        src="{{asset('client/images')}}/blognew-2-500x560.jpg" width="150px" height="auto"></a>
                                <a href="{{asset('client/images')}}/blog-3-500x560.jpg" data-featherlight="image"><img class="img-fluid"
                                        src="{{asset('client/images')}}/blog-3-500x560.jpg" width="150px" height="auto"></a>
                                <a href="{{asset('client/images')}}/blognew-2-500x560.jpg" data-featherlight="image"><img class="img-fluid"
                                        src="{{asset('client/images')}}/blognew-2-500x560.jpg" width="150px" height="auto"></a>
                            </div>
                        </div>
                        <div class="common-about col-md-6 col-sm-12 mt-5">
                            <div class="common-menu p-5">
                                <h1>Facilities Details</h1>
                                <hr class="w-75 text-center mb-5">
                                <div class="menu-item text-left mb-5 col-sm-12 ">
                                    <ol>
                                        <li>24 Hour security</li>
                                        <li>Disable rooms & Interconnecting rooms                                </li>
                                        <li>Public computer</li>
                                        <li>Swimming pool/ Jacuzzi</li>
                                        <li>Car parking</li>
                                        <li> Semi open & outdoor restaurant</li>
                                        <li>Spa</li>
                                        <li>Poolside bar                                </li>
                                        <!-- <li>Szechuan Soup</li>
                                        <li>Onion Soup</li>
                                        <li>Chicken Clear Soup</li> -->
                                    </ol>
                                </div>
                            </div>
                        </div>
        
                    </div>
        
                </section>
        
               
 @endsection