@extends('client.layout.app')
@section('broadcramb','Transport')
@section('content')
       <!-- Hero Section Begin -->
       @include('client.component.hero')
       <!-- Hero Section End -->
       <section class="transport-section mt-5 text-center">
        <h1 class="mt-2"> Transportation in Bangladesh is always crowded; it is nearly always uncomfortable; it is often a struggle.That's why we have this services.</h1>

         <!-- <p class="mt-2"></p> -->
         <div class="transport-wrapper row ">
           <div class="gallery col-md-6 col-sm-12 mt-5 ">
             <div data-featherlight-gallery data-featherlight-filter="a" class="d-flex flex-wrap text-center p-5">
               <a href="{{asset('client/images')}}/car.jpg" data-featherlight="image"><img class="img-fluid"
                   src="{{asset('client/images')}}/car.jpg" width="150px" height="auto"></a>
                   <a href="{{asset('client/images')}}/car5.jpg" data-featherlight="image"><img class="img-fluid"
                       src="{{asset('client/images')}}/car5.jpg" width="150px" height="auto"></a>
               <a href="{{asset('client/images')}}/car2.jpg" data-featherlight="image"><img class="img-fluid"
                   src="{{asset('client/images')}}/car2.jpg" width="150px" height="auto"></a>
               <a href="{{asset('client/images')}}/car3.jpg" data-featherlight="image"><img class="img-fluid"
                   src="{{asset('client/images')}}/car3.jpg" width="150px" height="auto"></a>
               <a href="{{asset('client/images')}}/car4.jpg" data-featherlight="image"><img class="img-fluid"
                   src="{{asset('client/images')}}/car4.jpg" width="150px" height="auto"></a>
               <a href="{{asset('client/images')}}/car58.jpg" data-featherlight="image"><img class="img-fluid"
                   src="{{asset('client/images')}}/car58.jpg" width="150px" height="auto"></a>
             </div>
           </div>
           <div class="transport-about col-md-6 col-sm-12 mt-5">
             <div class="transport-menu p-5">
               <h1>Transport Details</h1>

               <hr class="w-75 text-center mb-5">
               <div class="menu-item text-left mb-5 col-sm-12 ">
                 <p>The following parking options are available to guests staying at HOTEL BLUE BIRD (subject to
                   availability):</p>
                 <ol class="mt-2">
                   <li>Airport drop off (Additional charge)</li>
                   <li>Airport pick up (Additional charge)</li>
                   <li>Parking</li>
                   <li>Private parking</li>
                   <li>Secured parking</li>
                   <li>Parking garage</li>
                 </ol>
               </div>
             </div>
           </div>

         </div>

       </section>



 @endsection
