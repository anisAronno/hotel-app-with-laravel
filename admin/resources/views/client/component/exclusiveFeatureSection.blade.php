
      <section class="special-section text-center mt-5">
        <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo" data-aos="fade-up" data-aos-duration="500"
          data-aos-easing="ease-in-out"> -->
        <p class="font-weight-bold mt-2" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out">
          WHY
          CHOOSE STAY</p>
        <h2 class="font-weight-bold" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out"> Top
          Reasons to Stay</h2>
        <div class="row  m-0 mt-5">
          <div class="col-md-4">
            <div class="d-md-flex mt-5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
              
              
              <div class="mr-5 d-none d-md-block d-sm-none text-right">
                <h4>
                @if ($homeEXPPageData)
                {!! nl2br(e($homeEXPPageData[0]->exp_title)) !!}
                @endif
               
                
                </h4>
                <p>  
                  @if ($homeEXPPageData)
                  {!! nl2br(e($homeEXPPageData[0]->exp_description)) !!}
                  @endif
                </p>
              </div>
                           
           
                 
             
             
              <div class="text-center d-block d-sm-block mx-auto">
                <i class="fas fa-hotel font-icon"></i>
                <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mx-auto"> -->
              </div>
              <div class="mr-sm-3 d-block d-sm-block d-md-none text-center">
                <h4>
                  @if ($homeEXPPageData)
                  {!! nl2br(e($homeEXPPageData[0]->exp_title)) !!}
                  @endif
                 
                  
                  </h4>
                  <p>  
                    @if ($homeEXPPageData)
                    {!! nl2br(e($homeEXPPageData[0]->exp_description)) !!}
                    @endif
                  </p>
              </div>
            </div>
            <div class="d-md-flex mt-5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
              <div class="mr-5 d-none d-md-block d-sm-none text-right">
                <h4>
                  @if ($homeEXPPageData)
                  {!! nl2br(e($homeEXPPageData[1]->exp_title)) !!}
                  @endif
                 
                  
                  </h4>
                  <p>  
                    @if ($homeEXPPageData)
                    {!! nl2br(e($homeEXPPageData[1]->exp_description)) !!}
                    @endif
                  </p>
              </div>
              <div class="text-center d-block d-sm-block mx-auto">
                <i class="fas fa-utensils font-icon"></i>
                <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mx-auto"> -->
              </div>
              <div class="mr-sm-3 d-block d-sm-block d-md-none text-center">
                <h4>
                  @if ($homeEXPPageData)
                  {!! nl2br(e($homeEXPPageData[1]->exp_title)) !!}
                  @endif
                 
                  
                  </h4>
                  <p>  
                    @if ($homeEXPPageData)
                    {!! nl2br(e($homeEXPPageData[1]->exp_description)) !!}
                    @endif
                  </p>
              </div>
            </div>
          </div>


          <div class="col-md-4 d-none d-sm-none d-md-block">
            <img src="<?php if ($HomeAboutSectionData): ?>
            {{ $HomeAboutSectionData->exp_image }}
            <?php endif; ?>" alt="">
          </div>




          <div class="col-md-4">
            <div class="d-md-flex text-md-left text-sm-center mt-5" data-aos="fade-up" data-aos-duration="500"
              data-aos-easing="ease-in-out">
              <div class="">
                <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mx-auto"> -->
                <i class="fas fa-glass-martini-alt font-icon"></i>
              </div>
              <div class="ml-sm-3">
                <h4>
                  @if ($homeEXPPageData)
                  {!! nl2br(e($homeEXPPageData[2]->exp_title)) !!}
                  @endif
                 
                  
                  </h4>
                  <p>  
                    @if ($homeEXPPageData)
                    {!! nl2br(e($homeEXPPageData[2]->exp_description)) !!}
                    @endif
                  </p>
              </div>

            </div>
            <div class="d-md-flex text-md-left text-sm-center mt-5" data-aos="fade-up" data-aos-duration="500"
              data-aos-easing="ease-in-out">
              <div class="">
                <i class="fas fa-bed font-icon"></i>
                <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mx-auto"> -->
              </div>
              <div class="ml-sm-3">
                <h4>
                  @if ($homeEXPPageData)
                  {!! nl2br(e($homeEXPPageData[3]->exp_title)) !!}
                  @endif
                 
                  
                  </h4>
                  <p>  
                    @if ($homeEXPPageData)
                    {!! nl2br(e($homeEXPPageData[3]->exp_description)) !!}
                    @endif
                  </p>
              </div>

            </div>
          </div>

        </div>
      </section>
