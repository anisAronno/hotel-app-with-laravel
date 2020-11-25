@extends('client.layout.app')
@section('broadcramb', 'Blog')
@section('content')


    <!-- Hero Section Begin -->
    @include('client.component.hero')
    <!-- Hero Section End -->




    <section class="blog-section px-4 pl-3">
        <div class="row">
            <div class="col-md-8 blog-post py-5">
                @foreach ($BlogDatas as $BlogData)
                    <div class="blog-content pt-5">
                    <img class="img-fluid" src="@if ($BlogData)
                    {{$BlogData->image}}
                    @endif" alt="Blog">
                        <a href="#">
                            <h2 class="py-3 text-break">@if ($BlogData)
                                {!! nl2br(e($BlogData->title)) !!}
                                @endif</h2>
                        </a>
                        <p>on<span><a href="a"> @if ($BlogData)
                            {{date('j F, Y', strtotime($BlogData->created_at))}}
                            @endif</a> || </span><span>Posted by <a href="#">
                                    admin</a></span> <span>In <a href="">@if ($BlogData)
                                        {!! nl2br(e($BlogData->categories)) !!}
                                        @endif</a></span>
                        </p>
                        <p class="pt-3 text-break">@if ($BlogData)
                            {!! nl2br(e (Str::limit($BlogData->description, 250, '...'))) !!}
                            @endif</p>
                        <a href="{{ route('Blog', ['blogId'=>$BlogData->id]) }}"> <button class="blog-button">READ MORE</button></a>
                    </div>
                @endforeach




                <div class="pagination text-center">
                    {{$BlogDatas->links()}}
                </div>
            </div>




            <div class="col-md-4 py-5 blog-sidebar">
               
                <div class="recent-post mt-3">
                    <h3>Recent Posts</h3>
                    @foreach ($BlogDatas as $BlogData)
                    <div class="recent-post-item d-flex">
                        <div>
                            <img src="@if ($BlogData)
                            {{$BlogData->image}}
                            @endif" alt="" width="80px" height="80px">
                        </div>
                        <div class="ml-3">
                            <a href="#" class="text-decoration-none text-dark">
                                <p>@if ($BlogData)
                                    {!! nl2br(e($BlogData->title)) !!}
                                    @endif</p>
                            </a>
                           
                        </div>
                    </div>
                    @endforeach
                   
                    

                </div>


               




            </div>
        </div>

    </section>

@endsection
