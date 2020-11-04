@extends('client.layout.app')
@section('broadcramb','Rooms')
@section('content')


    <!-- Hero Section Begin -->
    @include('client.component.hero')
    <!-- Hero Section End -->





    <section class="room-section-page text-center m-5 row">
        <div class="room-item-1 col-md-4 col-sm-12 col-lg-4 my-3">
            <div class="text-left room-item-content"
                style="background-image: url('{{asset('client/images')}}/room-8-500x575.jpg'); ">
                <div class=" room-item-content-detail">
                    <a href="/single-room-0" class="text-decoration-none">
                        <h3>Deluxe Single Room</h3>
                    </a>
                    <p><span><i class="fas fa-compress"></i>&nbsp; &nbsp; 10m<sup>2</sup></span><span
                            class="ml-2"><a href="#" class="text-decoration-none font-weight-bold"><i
                                    class="far fa-folder-open"></i>Balcony</a></span></span>, <span> <a href="#"
                                class="text-decoration-none font-weight-bold">Lake view, Price</a></span></p>

                    <p>
                        <span class="room-item-price">1,270&#2547; </span>


                    </p>
                </div>
            </div>
        </div>
        <div class="room-item-1 col-md-4 col-sm-12 col-lg-4 my-3">
            <div class="text-left room-item-content"
                style="background-image: url('{{asset('client/images')}}/double;\'sdfds.jpg'); ">
                <div class=" room-item-content-detail">
                    <a href="/single-room-1" class="text-decoration-none">
                        <h3>Deluxe Double Room</h3>
                    </a>
                    <p><span><i class="fas fa-compress"></i>&nbsp; &nbsp; 15m<sup>2</sup></span><span
                            class="ml-2"><a href="#" class="text-decoration-none font-weight-bold"><i
                                    class="far fa-folder-open"></i>Balcony</a></span></span>, <span> <a href="#"
                                class="text-decoration-none font-weight-bold">Lake view, Price</a></span></p>

                    <p>
                        <span class="room-item-price">1,694&#2547; </span>

                    </p>
                </div>
            </div>
        </div>
        <div class="room-item-1 col-md-4 col-sm-12 col-lg-4 my-3">
            <div class="text-left room-item-content"
                style="background-image: url('{{asset('client/images')}}/double;\'sdfds.jpg'); ">
                <div class=" room-item-content-detail">
                    <a href="/single-room-2" class="text-decoration-none">
                        <h3>Deluxe Twin Room</h3>
                    </a>
                    <p><span><i class="fas fa-compress"></i>&nbsp; &nbsp; 18m<sup>2</sup></span><span
                            class="ml-2"><a href="#" class="text-decoration-none font-weight-bold"><i
                                    class="far fa-folder-open"></i>Balcony</a></span></span>, <span> <a href="#"
                                class="text-decoration-none font-weight-bold">Lake view,  Price</a></span></p>

                    <p>
                        <span class="room-item-price">1,524&#2547; </span>

                    </p>
                </div>
            </div>
        </div>
        <div class="room-item-1 col-md-4 col-sm-12 col-lg-4 my-3">
            <div class="text-left room-item-content"
                style="background-image: url('{{asset('client/images')}}/double;\'sdfds.jpg'); ">
                <div class=" room-item-content-detail">
                    <a href="single-room-3" class="text-decoration-none">
                        <h3>Executive Suite</h3>
                    </a>
                    <p><span><i class="fas fa-compress"></i>&nbsp; &nbsp; 19m<sup>2</sup></span><span
                            class="ml-2"><a href="#" class="text-decoration-none font-weight-bold"><i
                                    class="far fa-folder-open"></i>Balcony</a></span></span>, <span> <a href="#"
                                class="text-decoration-none font-weight-bold">Lake view, Price</a></span></p>

                    <p>
                                                    <span class="room-item-price">3,811&#2547; </span>


                    </p>
                </div>
            </div>
        </div>
        <div class="room-item-1 col-md-4 col-sm-12 col-lg-4 my-3">
            <div class="text-left room-item-content"
                style="background-image: url('{{asset('client/images')}}/single-room.png'); ">
                <div class=" room-item-content-detail">
                    <a href="single-room-4" class="text-decoration-none">
                        <h3>Family Room</h3>
                    </a>
                    <p><span><i class="fas fa-compress"></i>&nbsp; &nbsp; 20m<sup>2</sup></span><span
                            class="ml-2"><a href="#" class="text-decoration-none font-weight-bold"><i
                                    class="far fa-folder-open"></i>Balcony</a></span></span>, <span> <a href="#"
                                class="text-decoration-none font-weight-bold">Lake view,  Price</a></span></p>
                    <p>
                                                    <span class="room-item-price">2,032&#2547; </span>

                    </p>
                </div>
            </div>
        </div>

        </div>
        <div class="pagination mx-auto">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">Next</a>
        </div>

    </section>

        @endsection
