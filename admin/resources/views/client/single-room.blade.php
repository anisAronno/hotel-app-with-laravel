@extends('client.layout.app')
@section('broadcramb','Single Room')
@section('content')
       <!-- Hero Section Begin -->
       @include('client.component.hero')
       <!-- Hero Section End -->
           <!-- Hero Section End -->
           <div class="room-config row bg-light px-5">
            <div class="room-heading  py-4 col-md-8 col-sm-12">
                <div class="room-config-item p-4">
                    <p><i class="fa fa-user mr-2" aria-hidden="true"></i>Adults</p>
                <p>{{$roomdetails->adult}}</p>
                </div>
                <div class="room-config-item p-4">
                    <p><i class="fas fa-child mr-2 "></i>Children</p>
                    <p>{{$roomdetails->children}}</p>
                </div>
                <div class="room-config-item p-4">
                    <p><i class="fas fa-compress mr-2 "></i>Area </p>
                    <p>{{$roomdetails->length}}</p>
                </div>
                <div class="room-config-item p-4">
                    <p><i class="fas fa-procedures mr-2 "></i>Beds</p>
                    <p>{{$roomdetails->bed}}</p>
                </div>
                <div class="room-config-item p-4">
                    <p><i class="far fa-eye mr-2 "></i>View</p>
                    <p>{{$roomdetails->view}}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 cart-section text-center">
                <p>Price</p>
                <p><span class="rate pb-5">&#2547; {{$roomdetails->price}}</span>/night</p>

            </div>

        </div>



        <div class="room-view row py-5 ">
            <div class="col-md-8 pl-3 mt-3 mt-xl-5 ">
                <div class="container review-slider">


                    @foreach ($roomsImages as $roomsImagesItem)
                        
                    <div class="mySlides">
                    <img src="{{$roomsImagesItem->images}}" style="width:100%">
                    </div>
                    
                    @endforeach
                  





                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>



                    <div class="row mt-3">
                        @php
                        $i=0;    
                        @endphp
                    @foreach ($roomsImages as $roomsImagesItem)
                    @php
                    $i++;    
                    @endphp
                        <div class="column">
                            <img class="demo cursor" src="{{$roomsImagesItem->images}}" style="width:100% ; height:100px;"
                                onclick="currentSlide({{$i}})" alt="The Woods">
                        </div>
                    @endforeach

                    </div>
                </div>

                <hr class="my-5">

                <div class="single-room-details">
                    <h4 class="single-room-details-heading">Room Amenities</h4>
                    <div class="row">
                        <div class="single-room-details-item col-md-4 col-sm-12">
                            <p> <i class="fas fa-fan mr-2"></i> Air conditioning</p>
                        </div>
                        <div class="single-room-details-item col-md-4 col-sm-12">
                            <p> <i class="fas fa-sink mr-2"></i>Ensuite bathroom</p>
                        </div>
                        <div class="single-room-details-item col-md-4 col-sm-12">
                            <p> <i class="fas fa-tv mr-2"></i>Flat-screen TV</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="single-room-details-item col-md-4 col-sm-12">
                            <p> <i class="fas  fa-volume-mute mr-2"></i>Soundproofing</p>
                        </div>
                        <div class="single-room-details-item col-md-4 col-sm-12">
                            <p> <i class="fas fa-wifi  mr-2"></i>Free WiFi</p>
                        </div>
                        <div class="single-room-details-item col-md-4 col-sm-12">
                            <p> <i class="fas fa-parking  mr-2"></i>Parking (extra fee)</p>
                        </div>
                    </div>
                </div>


                <div class="toogle-tab mx-auto ml-5">
                    <ul class="nav nav-tabs mt-5 text-center ">
                        <li class="active"><a class="text-decoration-none text-light" href="#bathroom">Bathroom
                                Facilities</a></li>
                        <li><a class="text-decoration-none text-light" href="#room">Room facilities</a></li>

                    </ul>

                    <div class="tab-content">
                        <div id="bathroom" class="tab-pane show fade in active">
                            <div class="left-content float-left mt-3 mr-5">

                                @for ($i = 0; $i < count($roomsfacilityroom); $i+=2)
                                    
                                    <p><i class="fas fa-check"></i>&nbsp;{{$roomsfacilityroom[$i]->title}}</p>

                                @endfor
                                
                            </div>
                            <div class="right-content float-left mt-3">
                              
                                @for ($i = 1; $i < count($roomsfacilityroom); $i+=2)
                                    
                                    <p><i class="fas fa-check"></i>&nbsp;{{$roomsfacilityroom[$i]->title}}</p>

                                @endfor
                            </div>
                        </div>
                        <div id="room" class="tab-pane fade">
                            <div class="left-content float-left mt-3 mr-5">
                                @for ($i = 0; $i < count($roomsfacilitybathroom); $i+=2)
                                    
                                <p><i class="fas fa-check"></i>&nbsp;{{$roomsfacilitybathroom[$i]->title}}</p>

                                @endfor
                            </div>
                            <div class="right-content float-left mt-3">
                                @for ($i = 1; $i < count($roomsfacilitybathroom); $i+=2)
                                    
                                <p><i class="fas fa-check"></i>&nbsp;{{$roomsfacilitybathroom[$i]->title}}</p>

                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

            </div>




            <div class="col-md-4 ">
                <div class="reservation mt-3">
                    <h3>Your Reservation</h3>

                    <div class="reservation-check ml-3">

                        <form action="{{ route('bookiongSubmit') }}" id="bookingSubmitform" method="POST">
                            @csrf
                                <div class="single-page-reservation">
                                    <div class=" m-auto text-center">

                                        <div class= "d-block form-group">
                                            <input  autocomplete="off" id="arrivedDate" name="arrival_date" type="text" class="form-control datepicker-arrived"
                                                placeholder="&#61447; &nbsp; Arrival Date">
                                        </div>
                                        <div class="d-block form-group">
                                            <input autocomplete="off" id="leaveDate" name="departure_date" type="text" class="form-control datepicker-leave"
                                                placeholder="&#61447; &nbsp;Departure Date">
                                        </div>
                                        <div class="d-block form-group">
                                            <input autocomplete="off" id="customerMobile" name="customer_mobile" type="text" class="form-control" placeholder="&#9990; &nbsp; Mobile Number">
                                        </div>
                                        <div class="d-block form-group">
                                            <select name="adult_person" id="adultPerson" class="custom-select">
                                                <option value="" selected disabled>Adults</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="d-block form-group">
                                            <select name="children_person" id="childrenPerson" class="custom-select">
                                                <option value="" selected disabled>Children</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="d-block form-group">
                                                <button id="bookingSubmitBtn"  type="submit" class="btn btn-sm btn-dark btn-block form-submit py-2">Book Now </button>
                                        </div>
                                    </div>
                                </div>
                            </form>



                    </div>

                </div>
            </div>


        </div>















        <section class="room-section text-center mt-5">
            <h1 data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">Others Room</h1>
            <hr class="w-25">
            <!-- <div class="room d-flex owl-carousel my-5 " data-aos="fade-up" data-aos-duration="1000"
                data-aos-easing="ease-in-out">

                <div class="room-item" style="background-image: url('{{asset('client/images')}}/33.jpg'); ">
                    <div class="room-item-content text-left pl-4">
                        <a href="" class="text-decoration-none">
                            <h3>Premium Room 2</h3>

                        </a>
                        <p><span>25m<sup>2</sup></span><span class="ml-2"><a href="#"
                                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a
                                    href="#" class="text-decoration-none font-weight-bold">Lake view</a></span></p>
                        <p class="font-weight-bold">Price</p>
                        <p>
                            <span class="room-item-price">$94.6 <span>/</span></span>
                            <span class="font-weight-bold">Night</span>
                            <span class="room-review-icon">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                                <a href="#" class="text-decoration-none font-weight-bold">See Detail</a></span>
                        </p>
                    </div>
                </div>

                <div class="room-item" style="background-image: url('{{asset('client/images')}}/33.jpg'); ">
                    <div class="room-item-content text-left pl-4">
                        <a href="" class="text-decoration-none">
                            <h3>Premium Room 2</h3>
                        </a>
                        <p><span>25m<sup>2</sup></span><span class="ml-2"><a href="#"
                                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a
                                    href="#" class="text-decoration-none font-weight-bold">Lake view</a></span></p>
                        <p class="font-weight-bold">Price</p>
                        <p>
                            <span class="room-item-price">$94.6 <span>/</span></span>
                            <span class="font-weight-bold">Night</span>
                            <span class="room-review-icon">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                                <a href="#" class="text-decoration-none font-weight-bold">See Detail</a></span>
                        </p>
                    </div>
                </div>
                <div class="room-item" style="background-image: url('{{asset('client/images')}}/33.jpg'); ">
                    <div class="room-item-content text-left pl-4">
                        <a href="" class="text-decoration-none">
                            <h3>Premium Room 2</h3>
                        </a>
                        <p><span>25m<sup>2</sup></span><span class="ml-2"><a href="#"
                                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a
                                    href="#" class="text-decoration-none font-weight-bold">Lake view</a></span></p>
                        <p class="font-weight-bold">Price</p>
                        <p>
                            <span class="room-item-price">$94.6 <span>/</span></span>
                            <span class="font-weight-bold">Night</span>
                            <span class="room-review-icon">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                                <a href="#" class="text-decoration-none font-weight-bold">See Detail</a></span>
                        </p>
                    </div>
                </div>
                <div class="room-item" style="background-image: url('{{asset('client/images')}}/33.jpg'); ">
                    <div class="room-item-content text-left pl-4">
                        <a href="" class="text-decoration-none">
                            <h3>Premium Room 2</h3>
                        </a>
                        <p><span>25m<sup>2</sup></span><span class="ml-2"><a href="#"
                                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a
                                    href="#" class="text-decoration-none font-weight-bold">Lake view</a></span></p>
                        <p class="font-weight-bold">Price</p>
                        <p>
                            <span class="room-item-price">$94.6 <span>/</span></span>
                            <span class="font-weight-bold">Night</span>
                            <span class="room-review-icon">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                                <a href="#" class="text-decoration-none font-weight-bold">See Detail</a></span>
                        </p>
                    </div>
                </div>
                <div class="room-item" style="background-image: url('{{asset('client/images')}}/33.jpg'); ">
                    <div class="room-item-content text-left pl-4">
                        <a href="" class="text-decoration-none">
                            <h3>Premium Room 2</h3>
                        </a>
                        <p><span>25m<sup>2</sup></span><span class="ml-2"><a href="#"
                                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a
                                    href="#" class="text-decoration-none font-weight-bold">Lake view</a></span></p>
                        <p class="font-weight-bold">Price</p>
                        <p>
                            <span class="room-item-price">$94.6 <span>/</span></span>
                            <span class="font-weight-bold">Night</span>
                            <span class="room-review-icon">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                                <a href="#" class="text-decoration-none font-weight-bold">See Detail</a></span>
                        </p>
                    </div>
                </div>
                <div class="room-item" style="background-image: url('{{asset('client/images')}}/33.jpg'); ">
                    <div class="room-item-content text-left pl-4">
                        <a href="" class="text-decoration-none">
                            <h3>Premium Room 2</h3>
                        </a>
                        <p><span>25m<sup>2</sup></span><span class="ml-2"><a href="#"
                                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a
                                    href="#" class="text-decoration-none font-weight-bold">Lake view</a></span></p>
                        <p class="font-weight-bold">Price</p>
                        <p>
                            <span class="room-item-price">$94.6 <span>/</span></span>
                            <span class="font-weight-bold">Night</span>
                            <span class="room-review-icon">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                                <a href="#" class="text-decoration-none font-weight-bold">See Detail</a></span>
                        </p>
                    </div>
                </div>
                <div class="room-item" style="background-image: url('{{asset('client/images')}}/33.jpg'); ">
                    <div class="room-item-content text-left pl-4">
                        <a href="" class="text-decoration-none">
                            <h3>Premium Room 2</h3>
                        </a>
                        <p><span>25m<sup>2</sup></span><span class="ml-2"><a href="#"
                                    class="text-decoration-none font-weight-bold">Balcony</a></span></span>, <span> <a
                                    href="#" class="text-decoration-none font-weight-bold">Lake view</a></span></p>
                        <p class="font-weight-bold">Price</p>
                        <p>
                            <span class="room-item-price">$94.6 <span>/</span></span>
                            <span class="font-weight-bold">Night</span>
                            <span class="room-review-icon">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="room-review-more"><i class="fas fa-arrow-right mr-2" id="fa-icon-hotel"></i>
                                <a href="#" class="text-decoration-none font-weight-bold">See Detail</a></span>
                        </p>
                    </div>
                </div>



            </div> -->



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
                  <span class="room-item-price">1,270&#2547; </span>
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
                  <span class="room-item-price">1,694&#2547;</span>
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
                  <span class="room-item-price"> 1,524&#2547;  </span>
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
                  <span class="room-item-price"> 3,811 &#2547; </span>
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
                  <span class="room-item-price">2,032&#2547; </span>
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







 @endsection

