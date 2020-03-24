<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <h2 class="mb-3 text-center">{{ $post->title }}</h2>
        {!! $post->body !!}
        <p>
          <img src="{{ $post->featured }}" alt="" class="img-fluid">
        </p>
        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            @foreach($post->tags as $tag)
            <a href="{{ route('tag.single',['id'=>$tag->id]) }}" class="text-dark">{{$tag->tag}}</a>
            @endforeach
          </div>
        </div>

        @if (config('settings.blog-author'))
        <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img width="256" src="@if ($user->avatar=='user.png')
                {{  asset('storage/avatars/user.png') }}
                @else
                    {{  asset('storage/avatars/'.$user->avatar) }}
                @endif" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>{{$user->name}}</h3>
            <p>{{ config('settings.bio-info') }}</p>
          </div>
        </div>
        @endif

        <div class="row mt-5">
          <div class="col-md-6 d-flex justify-content-center">
            @if($prev)
            <a href="{{ route('post.single', ['slug' => $prev->slug ]) }}">
              <div style="border-radius: 50px;line-height:3px" class="btn btn-primary">
                <p class="mt-2">Previous Post</p>
                <p>{{ substr($prev->title, 0, 20) }} ...</p>
              </div>
            </a>
            @endif
          </div>
          <div class="col-md-6 d-flex justify-content-center">
            @if($next)
            <a href="{{ route('post.single', ['slug' => $next->slug ]) }}" class="btn-prev-wrap">
              <div style="border-radius: 50px;line-height:3px" class="btn btn-primary">
                <p class="mt-2">Next Post</p>
                <p>{{ substr($next->title, 0, 20) }} ...</p>
              </div>
            </a>
            @endif
          </div>
        </div>

        @if (config('settings.bool-comment'))
        <div class="pt-5 mt-5">
          <h3 class="mb-5"><a href="{{  Request::url() }}#disqus_thread"></a></h3>
          @if (config('settings.bool-comment'))
          @include('partials.single.comment')
          @endif
        </div>
        @endif

      </div> <!-- .col-md-8 -->
      <div class="col-lg-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon icon-search"></span>
              <input type="text" class="form-control" placeholder="Search...">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Categories</h3>
          <ul class="categories">
            @foreach ($categories as $category)
            <li><a href="{{ route('category.single',['id'=>$category->id]) }}">{{ $category->name}}</a></li>
            @endforeach
          </ul>
        </div>

        <!--<div class="sidebar-box ftco-animate">
            <h3 class="heading-sidebar">Recent Blog</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div> -->

        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Tag Cloud</h3>
          <div class="tagcloud">
            @foreach($post->tags as $tag)
            <a href="{{ route('tag.single',['id'=>$tag->id]) }}" class="text-dark">{{$tag->tag}}</a>
            @endforeach
          </div>
        </div>

      </div>

    </div>
  </div>
</section> <!-- .section -->