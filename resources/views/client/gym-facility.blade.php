@extends('client.layout.app')
@section('broadcramb')
@foreach ($facilitiesData as $facilitiesDat)
@if ($facilitiesDat)
    {{$facilitiesDat->page_title}}
@endif
@endforeach
@endsection
@section('content')
       <!-- Hero Section Begin -->
       @include('client.component.hero')
       <!-- Hero Section End -->

       <section class="gym-section mt-5 text-center">
        <h1 class="mt-5 text-break"> @foreach ($facilitiesData as $facilitiesDa)
            @if ($facilitiesDa)
                {!! nl2br(e($facilitiesDa->sub_title)) !!}
            @endif
        @endforeach</h1>
        
        <div class="gym-wrapper row ">
            <div class="gallery col-md-6 col-sm-12 mt-5 ">
                <div data-featherlight-gallery data-featherlight-filter="a" class="d-flex flex-wrap text-center p-5">

                    @foreach ($facilitiesDataImages as $imagesitem)
                        
                    <a href="{{$imagesitem->image}}" data-featherlight="image"><img class="img-fluid"
                        src="{{$imagesitem->image}}" width="150px" height="auto"></a>
                    
                    
                        @endforeach
                    </div>
            </div>
            <div class="gym-about col-md-6 col-sm-12 mt-5">
                <div class="gym-menu p-5">
                    <h1 class="text-break">
                        @foreach ($facilitiesData as $facilitiesDa)
                            @if ($facilitiesDa)
                                {!! nl2br(e($facilitiesDa->title)) !!}
                            @endif
                        @endforeach
                        
                    </h1>
                    <hr class="w-75 text-center mb-5">
                    <div class="menu-item text-left mb-5 col-sm-12 ">
                        <p class="text-break">
                            @foreach ($facilitiesData as $facilitiesDa)
                            @if ($facilitiesDa)
                                {!! nl2br(e($facilitiesDa->description)) !!}
                            @endif
                        @endforeach
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>

 @endsection
