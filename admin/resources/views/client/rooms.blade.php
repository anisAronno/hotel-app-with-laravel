@extends('client.layout.app')
@section('broadcramb','Rooms')
@section('content')


<!-- Hero Section Begin -->
@include('client.component.hero')
<!-- Hero Section End -->





<section class="room-section-page text-center m-5 row">


    @foreach ($data as $item)
        
    <div class="room-item-1 col-md-4 col-sm-12 col-lg-4 my-3">
        <div class="text-left room-item-content"
                style="background-image: url('{{$item->images}}'); ">
            <div class=" room-item-content-detail">
                <a href="/single-room-0" class="text-decoration-none">
                    <h3>{{$item->title}}</h3>
                </a>
                <p><span><i class="fas fa-compress"></i>&nbsp; &nbsp; {{$item->length}}m<sup>2</sup></span><span class="ml-2"><a
                    href="#" class="text-decoration-none font-weight-bold"><i
                    class="far fa-folder-open"></i>Balcony</a></span></span>, <span> <a href="#"
                        class="text-decoration-none font-weight-bold">Lake view, Price</a></span></p>
                        
                        <p>
                        <span class="room-item-price">&#2547; {{$item->price}} </span>
                            
                            
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
</section>

@endsection