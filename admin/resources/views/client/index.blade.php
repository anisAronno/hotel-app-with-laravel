@extends('client.layout.app')

@section('content')



    <!-- Hero Section Begin -->
    @include('client.component.slider')
    <!-- Hero Section End -->

    <!-- Booking Section Start -->
    @include('client.template-part.booking')

    <section class="welcome  mt-5">
        <div class="row">
          <div class="col-md-6 d-none d-sm-none d-md-block ">
            <div class="row">
              <div class="col-md-6">
                <img class="img-fluid" data-aos="fade-right" data-aos-duration="1000" src="{{asset('client/images')}}/hotel(1).jpg"
                  alt="" data-aos="fade-right">
              </div>
              <div class="col-md-6">
                <div class="img-top">
                  <img class="img-fluid" data-aos="fade-right" data-aos-duration="1500" src="{{asset('client/images')}}/hotel645564654.jpg"
                    alt="" data-aos="fade-right">
                </div>
                <div class="img-bottom mt-4">
                  <img class="img-fluid" data-aos="fade-left" data-aos-duration="2000" src="{{asset('client/images')}}/hotel65.jpg"
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
              Upgrade Your Experience</p>
            <p class="welcome-content text-justify" data-aos="fade-up" data-aos-duration="1000">Enjoy sweeping water views when you
              reserve a Hudson River View Suite. Spread out
              in
              an Executive or Luxury Suite with over 700 square feet of lavish living areas with integrated technology.
              Live
              the New York lifestyle in the Conrad Suite, featuring an office and separate living and dining areas.</p>
            <button class="welcome-btn" data-aos="zoom-in" data-aos-duration="2000"><i class="fas fa-arrow-right"
                id="fa-icon-hotel"></i>&nbsp;Learn More</button>
          </div>
        </div>
      </section>

      <section class="text-center mt-5 featured-section mt-5">
      <!--  <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mt-5" data-aos="fade-up" data-aos-duration="500"
          data-aos-easing="ease-in-out">
        <p class="font-weight-bold" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">EXCLUSIVE
          OFFERS</p>  -->
        <h1 class="font-weight-bold" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out"> Featured
          Specials</h1>
        <div class="col-md-12 mt-3">
          <div class="row wc-main-div  mx-auto">
            <div class="col-md-4 col-sm-12 col-xl-3 fs-div  mx-auto" data-aos="fade-up" data-aos-duration="1000"
              data-aos-easing="ease-in-out">
              <div class="fo-div">
                <i class="fas fa-user-lock font-icon text-center"></i>
              </div>
              <p class="wc-content">Safety & security            </p>
              <p class="mt-4 text-justify" >This systems in hospitality industry and their prevention</p>
              <!-- <a href="#" class="wc-button"><i class="fas fa-arrow-right" id="fa-icon-hotel"></i>&nbsp;Learn More</a> -->
            </div>
            <div class="col-md-4 col-sm-12 col-xl-3 fs-div  mx-auto" data-aos="fade-up" data-aos-duration="1500"
              data-aos-easing="ease-in-out">
              <div class="fo-div">
                <i class="fas fa-business-time font-icon"></i>
              </div>
              <p class="wc-content">Business Facilities </p>
              <p class="mt-4 text-justify">This is perhaps the biggest must-have for any hotel hoping to draw business travellers.</p>
              <!-- <a href="#" class="wc-button"><i class="fas fa-arrow-right" id="fa-icon-hotel"></i>&nbsp;Learn More</a> -->
            </div>
            <div class="col-md-4 col-sm-12 col-xl-3 fs-div  mx-auto" data-aos="fade-up" data-aos-duration="2000"
              data-aos-easing="ease-in-out">
              <div class="fo-div">
                <i class="fas fa-car-alt font-icon"></i>
              </div>
              <p class="wc-content">Transportation </p>
              <p class="mt-4 text-justify">The tourists to the actual site where tourism services are performed</p>

              <!-- <a href="#" class="wc-button"><i class="fas fa-arrow-right" id="fa-icon-hotel"></i>&nbsp;Learn More</a> -->
            </div>
          </div>
        </div>

      </section>

      <section class="room-section text-center mt-5">
        <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo" data-aos="fade-up" data-aos-duration="500"
          data-aos-easing="ease-in-out">
        <p data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">DISCOVER</p> -->
        <h1 data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">Rooms & Suites</h1>
        <a href="#" class="d-block mt-4 text-decoration-none text-dark font-weight-bold small" data-aos="fade-up"
          data-aos-duration="1000" data-aos-easing="ease-in-out"><i class="fas fa-arrow-right" id="fa-icon-hotel">
          </i>&nbsp;VIEW ALL ROOMS&nbsp; <i class="fas fa-arrow-left" id="fa-icon-hotel"></i></a>

        <div class="room d-flex owl-carousel my-5 " data-aos="fade-up" data-aos-duration="1000"
          data-aos-easing="ease-in-out">

          <div class="room-item" style="background-image: url('{{asset('client/images')}}/room-8-500x575.jpg'); ">
            <div class="room-item-content text-center pl-4">
              <a href=""  >
               <h3> Single Room</h3>
              </a>
              <p><span>10m<sup>2</sup></span><span class="ml-2"><a href="#"
                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a href="#"
                    class="text-decoration-none font-weight-bold">Lake view , Price</a></span></p>
              <!-- <p class="font-weight-bold">Price</p> -->
              <p>
                <span class="room-item-price">&#2547; 1,270 </span>
                <!-- <span class="font-weight-bold">Night</span>
                <span class="room-review-icon">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span> -->
                <!-- <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                  <a href="deluxe-single-room.html" class="text-decoration-none font-weight-bold">See Detail</a></span> -->
              </p>
            </div>
          </div>

          <div class="room-item" style="background-image: url('{{asset('client/images')}}/236452137.png'); ">
            <div class="room-item-content text-center pl-4">
              <a href="" class="text-decoration-none">
                <h3>Double Room</h3>
              </a>
              <p><span>15m<sup>2</sup></span><span class="ml-2"><a href="#"
                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a href="#"
                    class="text-decoration-none font-weight-bold">Lake view, Price</a></span></p>
              <!-- <p class="font-weight-bold">Price</p> -->
              <p>
                <span class="room-item-price">&#2547; 1,694</span>
                <!-- <span class="font-weight-bold">Night</span>
                <span class="room-review-icon">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                  <a href="deluxe-double-room.html" class="text-decoration-none font-weight-bold">See Detail</a></span> -->
              </p>
            </div>
          </div>
          <div class="room-item" style="background-image: url('{{asset('client/images')}}/family-room.png'); ">
            <div class="room-item-content text-center pl-4">
              <a href="" class="text-decoration-none">
                <h3> Twin Room</h3>
              </a>
              <p><span>18m<sup>2</sup></span><span class="ml-2"><a href="#"
                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a href="#"
                    class="text-decoration-none font-weight-bold">Lake view, Price</a></span></p>
              <!-- <p class="font-weight-bold">Price</p> -->
              <p>
                <span class="room-item-price"> &#2547; 1,524  </span>
                <!-- <span class="font-weight-bold">Night</span>
                <span class="room-review-icon">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                  <a href="deluxe-twin-room.html" class="text-decoration-none font-weight-bold">See Detail</a></span> -->
              </p>
            </div>
          </div>
          <div class="room-item" style="background-image: url('{{asset('client/images')}}/e-room.jpg'); ">
            <div class="room-item-content text-center pl-4">
              <a href="" class="text-decoration-none">
                <h3>Executive Suite</h3>
              </a>
              <p><span>19m<sup>2</sup></span><span class="ml-2"><a href="#"
                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a href="#"
                    class="text-decoration-none font-weight-bold">Lake view,  Price</a></span></p>
              <!-- <p class="font-weight-bold">Price</p> -->
              <p>
                <span class="room-item-price">&#2547; 3,811  </span>
                <!-- <span class="font-weight-bold">Night</span> -->
                <!-- <span class="room-review-icon">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                  <a href="executive-suite.html" class="text-decoration-none font-weight-bold">See Detail</a></span> -->
              </p>
            </div>
          </div>
          <div class="room-item" style="background-image: url('{{asset('client/images')}}/family.png'); ">
            <div class="room-item-content text-center pl-4">
              <a href="" class="text-decoration-none">
                <h3>Family Room</h3>
              </a>
              <p><span>20m<sup>2</sup></span><span class="ml-2"><a href="#"
                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a href="#"
                    class="text-decoration-none font-weight-bold">Lake view,  Price</a></span></p>
              <!-- <p class="font-weight-bold">Price</p> -->
              <p>
                <span class="room-item-price">&#2547; 2,032 </span>
                <!-- <span class="font-weight-bold">Night</span>
                <span class="room-review-icon">
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star checked"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </span>
                <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                  <a href="family-room.html" class="text-decoration-none font-weight-bold">See Detail</a></span> -->
              </p>
            </div>
          </div>



        </div>
      </section>



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
                <h4>Exclusive Rooftop Pool</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, perspiciatis!</p>
              </div>
              <div class="text-center d-block d-sm-block mx-auto">
                <i class="fas fa-hotel font-icon"></i>
                <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mx-auto"> -->
              </div>
              <div class="mr-sm-3 d-block d-sm-block d-md-none text-center">
                <h4>Exclusive Rooftop Pool</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, perspiciatis!</p>
              </div>
            </div>
            <div class="d-md-flex mt-5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
              <div class="mr-5 d-none d-md-block d-sm-none text-right">
                <h4>Exclusive Rooftop Pool</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, perspiciatis!</p>
              </div>
              <div class="text-center d-block d-sm-block mx-auto">
                <i class="fas fa-utensils font-icon"></i>
                <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mx-auto"> -->
              </div>
              <div class="mr-sm-3 d-block d-sm-block d-md-none text-center">
                <h4>Exclusive Rooftop Pool</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, perspiciatis!</p>
              </div>
            </div>
          </div>


          <div class="col-md-4 d-none d-sm-none d-md-block">
            <img src="{{asset('client/images')}}/h1_img-oo1rep2nubef1jkb751ld3qjatqijhakqswk5b9jza.png" alt="">
          </div>




          <div class="col-md-4">
            <div class="d-md-flex text-md-left text-sm-center mt-5" data-aos="fade-up" data-aos-duration="500"
              data-aos-easing="ease-in-out">
              <div class="">
                <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mx-auto"> -->
                <i class="fas fa-glass-martini-alt font-icon"></i>
              </div>
              <div class="ml-sm-3">
                <h4>Exclusive Rooftop Pool</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, perspiciatis!</p>
              </div>

            </div>
            <div class="d-md-flex text-md-left text-sm-center mt-5" data-aos="fade-up" data-aos-duration="500"
              data-aos-easing="ease-in-out">
              <div class="">
                <i class="fas fa-bed font-icon"></i>
                <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mx-auto"> -->
              </div>
              <div class="ml-sm-3">
                <h4>Exclusive Rooftop Pool</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, perspiciatis!</p>
              </div>

            </div>
          </div>

        </div>
      </section>


      <section class="review-section mt-5">
        <div class="text-center">
          <a href="https://www.booking.com/hotel/bd/bluebird-ltd.html">
          <img src="{{asset('client/images')}}/booking .com logodesgin.png" alt="" >
  </a>
          <span class="review-devidor">Foxuries Resort & Hotel Booking</span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <span>46 (Reviews)</span>
        </div>
      </section>


      <section class="extra-services-section text-center m-5 ">
        <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mt-5" data-aos="fade-up" data-aos-duration="500"
          data-aos-easing="ease-in-out">
        <p class="mt-3" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">SERVICES</p> -->
        <h1 class="mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">Extra Services</h1>
        <div class="ex-service mt-5 row" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
          <div class="col-md-3 px-5"
            style="background-image: url({{asset('client/images')}}/shape.png); background-repeat: no-repeat; background-position: center top;">
            <h3 class="mt-3">1.</h3>
            <h4 class="mt-3">Pick Up & Drop​</h4>
            <p class="mt-3 text-muted">We’ll pick up from airport while you comfy on your ride.</p>
          </div>
          <div class="col-md-3 px-5"
            style="background-image: url({{asset('client/images')}}/shape.png); background-repeat: no-repeat; background-position: center top;">
            <h3 class="mt-3">2.</h3>
            <h4 class="mt-3">Parking Space​​</h4>
            <p class="mt-3 text-muted">Please consider your private parking or better yet.</p>
          </div>
          <div class="col-md-3 px-5"
            style="background-image: url({{asset('client/images')}}/shape.png); background-repeat: no-repeat; background-position: center top;">
            <h3 class="mt-3">3.</h3>
            <h4 class="mt-3">Welcome Drink​</h4>
            <p class="mt-3 text-muted">We have the fuel to start your day right.</p>
          </div>
          <div class="col-md-3 px-5"
            style="background-image: url({{asset('client/images')}}/shape.png); background-repeat: no-repeat; background-position: center top;">
            <h3 class="mt-3">4.</h3>
            <h4 class="mt-3">Hot & Cold Water​​</h4>
            <p class="mt-3 text-muted">Let us know if you need anything to be more comfortable</p>
          </div>
        </div>
      </section>


      <section class="testimonial-section text-center mt-5">
        <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mt-5" data-aos="fade-up" data-aos-duration="500"
          data-aos-easing="ease-in-out">
        <p class="mt-2" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">TESTIMONIALS</p> -->
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
              <img class="img-fluid" src="{{asset('client/images')}}/1.jpg" alt="">
              <div class="tf-bio-content">
                <h5>Chris Manson</h5>
                <p> May 20, 2019</p>
              </div>

            </div>
          </div> -->

          <div class="row mt-5 mx-3">
            <div class="testimonial-first-item col-md-4 m-0 p-3">
              <div class="tf-content">
                <p class="">We stayed here for a long weekend and was very impressed with the hotel , the staff were
                  excellent, very friendly and couldn’t do enough for us.</p>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>


              <div class="tf-bio mt-5 d-flex">
                <img class="img-fluid" src="{{asset('client/images')}}/1.jpg" alt="">
                <div class="tf-bio-content">
                  <h5>Mridul </h5>
                  <p> April 20, 2020</p>
                </div>

              </div>
            </div>
            <div class="testimonial-first-item col-md-4 m-0 p-3">
              <div class="tf-content">
                <p class="">We stayed here for a long weekend and was very impressed with the hotel , the staff were
                  excellent, very friendly and couldn’t do enough for us.</p>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>


              <div class="tf-bio mt-5 d-flex">
                <img class="img-fluid" src="{{asset('client/images')}}/1.jpg" alt="">
                <div class="tf-bio-content">
                  <h5>Anish</h5>
                  <p> September 20, 2020</p>
                </div>

              </div>
            </div>
            <div class="testimonial-first-item col-md-4 m-0 p-3">
              <div class="tf-content">
                <p class="">We stayed here for a long weekend and was very impressed with the hotel , the staff were
                  excellent, very friendly and couldn’t do enough for us.</p>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>


              <div class="tf-bio mt-5 d-flex">
                <img class="img-fluid" src="{{asset('client/images')}}/1.jpg" alt="">
                <div class="tf-bio-content">
                  <h5>Jion</h5>
                  <p> October 20, 2019</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="summer-section row mt-5 m-0 p-0">
        <div class="summer-content col-md-4 col-sm-12 col-lg-4 text-center text-md-left text-sm-center">
          <h4>Be Our Guest and Make Every Stay Memorable</h4>
          <a href="#"><i class="fas fa-arrow-right"></i>&nbsp;LEARN MORE</a>
        </div>
        <div class="summer-image col-md-8 col-sm-12 col-lg-8">
          <img src="{{asset('client/images')}}/h1_shape-people.png" alt="">
        </div>
      </section> -->

      <section class="blog-section text-center mt-5">
        <p>OUR BLOG</p>
        <h1>Articles & News</h1>
        <div class="blog-div d-flex flex-wrap">
          <div class="blog-item" style="background-image: url({{asset('client/images')}}/Terrace\ View\ Restaurant2.jpg);">
            <div class="content ">
              <h3>Host a Family Party</h3>
              <p><i class="fas fa-calendar-alt"></i>&nbsp; On December 09, 2020</p>
              <p>When you host a party or family reunion, the special celebrations let you strengthen bonds with…When you
                host
              </p>
              <hr>
              <a href="#"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;READ MORE</a>
            </div>
          </div>
          <div class="blog-item" style="background-image: url({{asset('client/images')}}/resturant.jpg);">
            <div class="content ">
              <h3>Host a BBQ Party</h3>
              <p><i class="fas fa-calendar-alt"></i>&nbsp; On March 19, 2020</p>
              <p>When you host a party or family reunion, the special celebrations let you strengthen bonds with…When you
                host
              </p>
              <hr>
              <a href="#"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;READ MORE</a>
            </div>
          </div>
          <div class="blog-item" style="background-image: url({{asset('client/images')}}/Terrace\ View\ Restaurant8.jpg);">
            <div class="content ">
              <h3>Host a Surprise Party</h3>
              <p><i class="fas fa-calendar-alt"></i>&nbsp; On April 25, 2020</p>
              <p>When you host a party or family reunion, the special celebrations let you strengthen bonds with…When you
                host
              </p>
              <hr>
              <a href="#"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;READ MORE</a>
            </div>
          </div>

        </div>
      </section>


@section('script')

@endsection

@endsection
