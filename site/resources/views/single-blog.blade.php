@extends('layout.app')
@section('broadcramb','Blog')
@section('content')
       <!-- Hero Section Begin -->
       @include('component.hero')
       <!-- Hero Section End -->

       
       <section class="blog-section px-4 pl-3">
            <div class="row">
                <div class="col-md-8 blog-post py-5">
                    <div class="blog-content pt-5">
                        <p>on<span><a href="a"> March 19, 2020</a> || </span><span>Posted by <a href="#">
                                    admin</a></span> <span>In <a href="">Apartment</a> , <a href="#">Vacation</a></span>
                        </p>
                        <hr>
                        <img class="img-fluid" src="{{asset('client/images')}}/blognew-1-1000x565.jpg" alt="Blog">
                       
                       
                        <p class="pt-3">When you host a party or family reunion, the special celebrations let you
                            strengthen bonds with those you hold most dear. It’s also the chance to share what we’re
                            looking forward to—along with what we’ve been through—with people we count on to care. At
                            Hotel WP, we’ve experienced more than 50 years of hosting family celebrations like
                            birthdays, confirmations, graduations, engagement parties, anniversaries, vow renewals,
                            reunions, and more.</p>
                        <p class="pt-3">When you host a party or family reunion, the special celebrations let you
                            strengthen bonds with those you hold most dear. It’s also the chance to share what we’re
                            looking forward to—along with what we’ve been through—with people we count on to care. At
                            Hotel WP, we’ve experienced more than 50 years of hosting family celebrations like
                            birthdays, confirmations, graduations, engagement parties, anniversaries, vow renewals,
                            reunions, and more.</p>
                        <p class="pt-3">When you host a party or family reunion, the special celebrations let you
                            strengthen bonds with those you hold most dear. It’s also the chance to share what we’re
                            looking forward to—along with what we’ve been through—with people we count on to care. At
                            Hotel WP, we’ve experienced more than 50 years of hosting family celebrations like
                            birthdays, confirmations, graduations, engagement parties, anniversaries, vow renewals,
                            reunions, and more.</p>
                            
                            <figure>
                                <img src="{{asset('client/images')}}/detail-2.jpg" alt="" class="img-fluid my-3">
                                <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                              </figure>
                        <p class="pt-3">When you host a party or family reunion, the special celebrations let you
                            strengthen bonds with those you hold most dear. It’s also the chance to share what we’re
                            looking forward to—along with what we’ve been through—with people we count on to care. At
                            Hotel WP, we’ve experienced more than 50 years of hosting family celebrations like
                            birthdays, confirmations, graduations, engagement parties, anniversaries, vow renewals,
                            reunions, and more.</p>
                        <p class="pt-3">When you host a party or family reunion, the special celebrations let you
                            strengthen bonds with those you hold most dear. It’s also the chance to share what we’re
                            looking forward to—along with what we’ve been through—with people we count on to care. At
                            Hotel WP, we’ve experienced more than 50 years of hosting family celebrations like
                            birthdays, confirmations, graduations, engagement parties, anniversaries, vow renewals,
                            reunions, and more.</p>
                    </div>
                   
                   
                    <div class="tag-item mt-5">
                        <i class="fas fa-tags fa-2x"></i>
                        <a href="#">accommodation</a>
                        <a href="#">reservation</a>
                        <a href="#">Resort</a>
                        <a href="#">reservation</a>
                        <a href="#">Swimming</a>
                    </div>
                    <div class="next-prev text-center">
                        <a href="#">Prev</a>
                        <a href="#">Next</a>
                    </div>
                </div>




                <div class="col-md-4 py-5 blog-sidebar">
            
                    <div class="recent-post mt-5">
                        <h3>Archives</h3>

                        <div class="recent-post-item">
                            <div class="ml-3">
                                <div class="archive-item">
                                    <i class="far fa-folder-open"></i>
                                    <a href="#" class="text-decoration-none text-dark">
                                       March 2020
                                    </a> 
                                </div>
                                <div class="archive-item">
                                    <i class="far fa-folder-open"></i>
                                    <a href="#" class="text-decoration-none text-dark">
                                       March 2020
                                    </a> 
                                </div>
                                <div class="archive-item">
                                    <i class="far fa-folder-open"></i>
                                    <a href="#" class="text-decoration-none text-dark">
                                       March 2020
                                    </a> 
                                </div>
                               
                            </div>
                        </div>
                     
                     


                    </div>


                    <div class="category-list mt-3">
                        <h3>Categories</h3>

                        <div class="category-item">
                            <ul>
                                <li>
                                    <i class="far fa-folder-open"></i>
                                    <a href="#">Apartment (5)</a>
                                </li>
                                <li> <i class="far fa-folder-open"></i><a href="#">Bed and breakfast (3)</a></li>
                                <li> <i class="far fa-folder-open"></i><a href="">Holiday (3)</a></li>
                                <li> <i class="far fa-folder-open"></i><a href="">Vacation (3)</a></li>

                            </ul>
                        </div>

                    </div>


                    <div class="recent-comment mt-3">
                        <h3>Recent Comment</h3>

                        <div class="recent-comment-item ml-3">
                            <a class="d-block" href="#">Log in</a>
                            <a class="d-block" href="#">Entries feed</a>
                            <a class="d-block" href="#">Comments feed</a>
                            <a class="d-block" href="#">WordPress.org</a>

                        </div>

                    </div>
                </div>
            </div>


        </section>

   
 @endsection