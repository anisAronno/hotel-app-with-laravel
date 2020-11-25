<section class="extra-services-section text-center m-5 ">
    <!-- <img src="{{asset('client/images')}}/icon-02.svg" alt="" class="icon-logo mt-5" data-aos="fade-up" data-aos-duration="500"
      data-aos-easing="ease-in-out">
    <p class="mt-3" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">SERVICES</p> -->
    <h1 class="mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">Extra Services</h1>
    <div class="ex-service mt-5 row" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
      @php
           $i=0;
      @endphp

      @foreach ($aboutESPageDatas as $aboutESPageData)
        @php
            $i++
        @endphp
      <div class="col-md-3 px-5 mt-5"
      style="background-image: url({{ asset('client/images') }}/shape.png); background-repeat: no-repeat; background-position: center top;">
      <h3 class="mt-3">
         @php
             echo $i;
         @endphp
      </h3>
      <h4 class="mt-3">{{$aboutESPageData->title}}</h4>
      <p class="mt-3 text-muted"  style="word-wrap: break-word;">
          <?php if ($aboutESPageData): ?>
          {!! nl2br(e($aboutESPageData->description)) !!}
          <?php endif; ?>
         
      
      </p>
  </div>
@endforeach
     
      
  </div>
    </div>
  </section>