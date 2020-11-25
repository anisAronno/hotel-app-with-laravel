<section class="testimonial-section text-center mt-5">
    <img src="{{ asset('client/images') }}/icon-02.svg" alt="" class="icon-logo mt-5" data-aos="fade-up" data-aos-duration="500"
          data-aos-easing="ease-in-out">
        <p class="mt-2" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">TESTIMONIALS</p> 
    <h1 data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">What Customer Say</h1>
    <div class="testmonial-intro" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">

        <!-- <div class="testimonial-first-item">
            <div class="tf-content  tf-content-up">
              <p class="">We stayed here for a long weekend and was very impressed with the hotel , the staff were
                excellent, very friendly and couldn’t do enough for us. Rooms were very nice, clean and comfortable.
                Location was a few steps from Times Square, would definitely recommend and would stay here again. Thank
                you for a truly amazing stay! Your hospitality is quite outstanding. The sports centre is also very good
                with excellent quality tennis courts. Hope to be back soon excellent quality tennis courts. Hope to be
                back soon excellent quality tennis courts. Hope to be back soon.</p>
              <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
            </div>

            <div class="tf-bio mt-5 d-flex">
              <img class="img-fluid" src="{{ asset('client/images') }}/1.jpg" alt="">
              <div class="tf-bio-content">
                <h5>Chris Manson</h5>
                <p> May 20, 2019</p>
              </div>

            </div>
          </div> -->

        <div class="row mt-5 mx-3">
            @foreach ($HomeTestimonialDatas as $HomeTestimonialData)
            <div class="testimonial-first-item col-md-4 m-0 p-3">
                <div class="tf-content">
                    <p class="">
                        <?php if ($HomeTestimonialData): ?>
                            {!! nl2br(e($HomeTestimonialData->description)) !!}
                        <?php endif; ?>
                    </p>
                    {{-- <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div> --}}
                </div>


                <div class="tf-bio mt-5 d-flex">
                    <img class="img-fluid" src="<?php if ($HomeTestimonialData): ?>
                    {!! nl2br(e($HomeTestimonialData->image)) !!}
                <?php endif; ?>" alt="">
                    <div class="tf-bio-content">
                        <h5><?php if ($HomeTestimonialData): ?>
                            {!! nl2br(e($HomeTestimonialData->name)) !!}
                        <?php endif; ?> </h5>
                        <p><?php if ($HomeTestimonialData): ?>
                            {!! nl2br(e($HomeTestimonialData->date)) !!}
                        <?php endif; ?></p>
                    </div>

                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>
