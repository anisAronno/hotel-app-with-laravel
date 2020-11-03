 <!-- Slider Section Start -->
 <section class="slider">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      @foreach ($sliders as $slider)
          
      
      <div class="carousel-item @if ($loop->first)
          active
      @endif">
        <img src="{{$slider->image}}" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h5 class="animate__animated animate__fadeInDownBig --animate-duration:500ms; ">{{$slider->title}}
          </h5>
          <h2 class="animate__animated animate__zoomIn  --animate-duration: 800ms;">{{$slider->sub_title}}</h2>
        <a href="/{{$slider->button}}">
            <input type="submit"  class="slider-button animate__animated animate__lightSpeedInRight --animate-duration:2000ms;" value="View Room"> 
            </a>
        </div>
      </div>
  @endforeach
  
  

    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>