<section class="blog-section text-center mt-5">
    <p>OUR BLOG</p>
    <h1>Articles & News</h1>
    <div class="blog-div d-flex flex-wrap">
      @foreach ($BlogDatas as $BlogData)
        <div class="blog-item img-fluid" style="background-image: url({{$BlogData->image}});">
          <div class="content ">
            <h3> @if ($BlogData)
              {!! nl2br(e($BlogData->title)) !!}
              @endif</h3>
            <p><i class="fas fa-calendar-alt"></i>&nbsp;  {{date('j F, Y', strtotime($BlogData->created_at))}}</p>
            <p>@if ($BlogData)
              {!! nl2br(e (Str::limit($BlogData->description, 130, '...'))) !!}
              @endif
            </p>
            <hr>
            <a href="{{ route('Blog', ['blogId'=>$BlogData->id]) }}"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;READ MORE</a>
          </div>
        </div>
      @endforeach
      

    </div>
  </section>
