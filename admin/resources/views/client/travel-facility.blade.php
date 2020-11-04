@extends('client.layout.app')
@section('broadcramb','Travel Facilty')
@section('content')
       <!-- Hero Section Begin -->
       @include('client.component.hero')
       <!-- Hero Section End -->

       <section class="travel-section mt-5 text-center">

        <h1 class="mt-5">Come to Hotel Blue Bird, Expose Yourself to Different Cultures.</h1>

             <div class="travel-wrapper row ">
                 <div class="gallery col-md-6 col-sm-12 mt-5 ">
                     <div data-featherlight-gallery data-featherlight-filter="a" class="d-flex flex-wrap text-center p-5">
                         <a href="{{asset('client/images')}}/travel-1.jpeg" data-featherlight="image"><img class="img-fluid"
                                 src="{{asset('client/images')}}/travel-1.jpeg" width="150px" height="auto"></a>
                         <a href="{{asset('client/images')}}/travel-2.png" data-featherlight="image"><img class="img-fluid"
                                 src="{{asset('client/images')}}/travel-2.png" width="150px" height="auto"></a>
                         <a href="{{asset('client/images')}}/travel-3.jpg" data-featherlight="image"><img class="img-fluid"
                                 src="{{asset('client/images')}}/travel-3.jpg" width="150px" height="auto"></a>
                         <a href="{{asset('client/images')}}/travel-4.jpg" data-featherlight="image"><img class="img-fluid"
                                 src="{{asset('client/images')}}/travel-4.jpg" width="150px" height="auto"></a>
                         <a href="{{asset('client/images')}}/travel-5.jpg" data-featherlight="image"><img class="img-fluid"
                                 src="{{asset('client/images')}}/travel-5.jpg" width="150px" height="auto"></a>
                         <a href="{{asset('client/images')}}/travel-6.jpg" data-featherlight="image"><img class="img-fluid"
                                 src="{{asset('client/images')}}/travel-6.jpg" width="150px" height="auto"></a>
                     </div>
                 </div>
                 <div class="travel-about col-md-6 col-sm-12 mt-5">
                     <div class="travel-menu p-5">
                         <h1>Travel Desk Features</h1>
                         <hr class="w-75 text-center mb-5">
                         <div class="menu-item text-left mb-5 col-sm-12 ">
                             <ol>
                                 <li>Immerse yourself in a virtual tour in a museum or art gallery</li>
                                 <li>Relax with some travel-related books and ebooks</li>
                                 <li>Clean or renew your travel gear</li>
                                 <li>Organize your travel pictures and memories</li>
                                 <li>Make some popcorn and watch some travel-related movies</li>
                                 <li>Visit some dream destinations by taking virtual tours from your home</li>
                                 <li>Go “out” and visit a national park from your couch with a virtual tour</li>
                                 <li>Learn a New Language</li>
                                 <li>Grow Your Knowledge</li>
                                 <li>Spark Inner Creativity</li>
                                 <li>Make New Friends</li>
                             </ol>
                         </div>
                     </div>
                 </div>

             </div>

         </section>



 @endsection
