@extends('client.layout.app')

@section('content')



    <!-- Hero Section Begin -->
    @include('client.component.slider')
    <!-- Hero Section End -->

    <!-- Booking Section Start -->
    @include('client.template-part.booking')

    @include('client.component.aboutSection')

    @include('client.component.specialFeatureSection')

    @include('client.component.roomSection')

    @include('client.component.exclusiveFeatureSection')

    @include('client.component.reviewSection')

    @include('client.component.extraServicesSection')

    @include('client.component.testimonial')


    @include('client.component.blogSection')



@endsection
