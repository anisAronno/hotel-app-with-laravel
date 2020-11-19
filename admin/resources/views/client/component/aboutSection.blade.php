<section class="welcome ">
    <div class="row">
      <div class="col-md-6 d-none d-sm-none d-md-block ">
        <div class="row">
          <div class="col-md-6">
            <img class="img-fluid" data-aos="fade-right" data-aos-duration="1000" src="<?php if ($HomeAboutSectionData): ?>
            {{ $HomeAboutSectionData->image1 }}
            <?php endif; ?>"
              alt="" data-aos="fade-right">
          </div>
          <div class="col-md-6">
            <div class="img-top">
              <img class="img-fluid" data-aos="fade-right" data-aos-duration="1500" src="<?php if ($HomeAboutSectionData): ?>
              {{ $HomeAboutSectionData->image2 }}
              <?php endif; ?>"
                alt="" data-aos="fade-right">
            </div>
            <div class="img-bottom mt-4">
              <img class="img-fluid" data-aos="fade-left" data-aos-duration="2000" src="<?php if ($HomeAboutSectionData): ?>
              {{ $HomeAboutSectionData->image3 }}
              <?php endif; ?>"
                alt="" data-aos="fade-right">
            </div>
          </div>

        </div>

      </div>

      <div class="col-md-6 col-sm-12 text-center px-5">
        <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo" data-aos="fade-up" data-aos-duration="500"
          data-aos-easing="ease-in-out">
        <p class="mb-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Welcome</p> -->
        <p class="mt-0 pt-0 welcome-heading" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">
          <?php if ($HomeAboutSectionData): ?>
          {!! nl2br(e($HomeAboutSectionData->title)) !!}
          <?php endif; ?>
        </p>
        <p class="welcome-content text-justify" data-aos="fade-up" data-aos-duration="1000">
          <?php if ($HomeAboutSectionData): ?>
          {!! nl2br(e($HomeAboutSectionData->description)) !!}
          <?php endif; ?>
        </p>
      <a href="{{ url('/about') }}"><button class="welcome-btn" data-aos="zoom-in" data-aos-duration="2000"><i class="fas fa-arrow-right"
          id="fa-icon-hotel"></i>&nbsp;Learn More</button></a>
      </div>
    </div>
  </section>