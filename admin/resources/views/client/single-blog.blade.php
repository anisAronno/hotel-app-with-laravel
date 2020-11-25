@extends('client.layout.app')
@section('broadcramb','Blog')
@section('content')
       <!-- Hero Section Begin -->
       @include('client.component.hero')
       <!-- Hero Section End -->


       <section class="blog-section px-4 pl-3">
            <div class="row">
                <div class="col-md-8 blog-post py-5">
                    <div class="blog-content pt-5">
                        <p>on<span><a href="a">    {{date('j F, Y', strtotime($Blogdetails->created_at))}}</a> || </span><span>Posted by <a href="#">
                                    admin</a></span> <span>In <a href="">{{$Blogdetails->categories}}</a></span>
                        </p>
                        <hr>
                        <img class="img-fluid" src="{{$Blogdetails->image}}" alt="Blog">


                        <p class="pt-3"> {!! nl2br(e($Blogdetails->description)) !!}</p>

                       
                    </div>


                  
                </div>




                <div class="col-md-4 py-5 blog-sidebar">

                    

                    <div class="category-list mt-3">
                        <h3>Categories</h3>

                        <div class="category-item">
                            <ul>
                               @foreach ($BlogDatas as $BlogData)
                                   
                               <li> <i class="far fa-folder-open"></i><a href="#">{!! nl2br(e($BlogData->categories)) !!}</a></li>
                               @endforeach
                               

                            </ul>
                        </div>

                    </div>


                   
                </div>
            </div>


        </section>


 @endsection
