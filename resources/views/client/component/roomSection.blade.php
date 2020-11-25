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

       @foreach ($data as $item)
                
            
        <div class="room-item" style="background-image: url('{{$item->images}}'); ">
                <div class="room-item-content text-center pl-4">
                <a href=""  >
                <h3> {{$item->title}}</h3>
                </a>
            <p><span>{{$item->length}}m<sup>2</sup></span><span class="ml-2"><a href="#"
                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a href="#"
                        class="text-decoration-none font-weight-bold">Lake view , Price</a></span></p>
                        
                        <p>
                            <span class="room-item-price"> &#2547; {{$item->price}}  </span>
                        </p>
                    </div>
                </div>
                
    @endforeach

      



    </div>
  </section>


