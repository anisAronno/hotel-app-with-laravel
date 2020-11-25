
  

      <section class="text-center mt-5 featured-section mt-5">
        <!--  <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mt-5" data-aos="fade-up" data-aos-duration="500"
            data-aos-easing="ease-in-out">
          <p class="font-weight-bold" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">EXCLUSIVE
            OFFERS</p>  -->
          <h1 class="font-weight-bold" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out"> Featured
            Specials</h1>
          <div class="col-md-12 mt-3">
            <div class="row wc-main-div  mx-auto">
@php
    
    $arr =[ "fa-user-lock"," fa-business-time"," fa-car-alt","fa-user-lock"," fa-business-time"," fa-car-alt","fa-user-lock"," fa-business-time"," fa-car-alt"];

@endphp
              @foreach ($HomeSFSectionDatas as $HomeSFSectionData)
             
                    <div class="col-md-4 col-sm-12 col-xl-3 fs-div  mx-auto" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <div class="fo-div">
                      <i class="fas  {{
                        $arr[$loop->index]
                      }} font-icon text-center"></i>
                    </div>
                    <p class="wc-content">
                      <?php if ($HomeSFSectionData): ?>
                      {!! nl2br(e($HomeSFSectionData->title)) !!}
                      <?php endif; ?>
                    </p>
                    <p class="mt-4 text-justify" ><?php if ($HomeSFSectionData): ?>
                      {!! nl2br(e($HomeSFSectionData->description)) !!}
                      <?php endif; ?></p>
                    <!-- <a href="#" class="wc-button"><i class="fas fa-arrow-right" id="fa-icon-hotel"></i>&nbsp;Learn More</a> -->
                  </div>
              @endforeach
              
              
            </div>
          </div>
  
        </section>