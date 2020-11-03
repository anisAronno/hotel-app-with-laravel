@extends('layout.app')

@section('content')

  
    <!-- Hero Section Begin -->
    @include('component.hero')
    <!-- Hero Section End -->

    <div class="row contact-form">
        <!--Get in touch Start-->
        <div class="col-md-6">
            <div class="location">
                <div class="contact-detail p-3">
                    <h2>Get in touch</h2>
                    <font face="times new roman"><?php if ($othersData) {echo $othersData->title;}?>
                    </font><br><br>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p><i class="far fa-envelope"></i> EMAIL <br>
                           <a class="text-decoration-none text-dark" href="mailto:support@foxuries.com"><?php if ($othersData) {echo $othersData->email;}?></a> </p><br>
                        <p> <i class="fas fa-stopwatch"></i> OPEN HOUR <br> <?php if ($othersData) {echo $othersData->opening_hour;}?></p><br>

                    </div>
                    <div class="col-md-6">
                        <p><i class="fas fa-map-marker-alt"></i> ADDRESS<br>
                            <?php if ($othersData) {echo $othersData->address;}?></p><br>

                        <p><i class="fas fa-phone-alt"></i> PHONE <br>
                           <a  class="text-decoration-none text-dark" href="tel: +8005678990"><?php if ($othersData) {echo $othersData->phone;}?></a> <br> <a class="text-decoration-none text-dark" href="tel: +8441800 3355"></a></p> <br>
                    </div>
                </div>
            </div>
        </div>
        <!--Get in touch END-->

        <!-- Hero Section Begin -->
    @include('template-part.contact')
    <!-- Hero Section End -->
    </div>

    <!--Main Div Part END-->


    <!--Google map Start-->
    <div class="map text-center">
        <div id="map-container-google-2" class="z-depth-1-half map-container ">
            <?php if ($othersData) {echo $othersData->gmap;}?>

        </div>
    </div>
    <!--Google Maps END-->





    @section('script')
   
    @endsection


@endsection