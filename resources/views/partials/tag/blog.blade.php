<section class="ftco-section" id="blog-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 class="big big-2">Blog</h1>
          <h2 class="mb-4">Tag: {{ $tag->tag }}</h2>
        </div>
      </div>
      <div class="row d-flex">
        @foreach($tag->posts as $post)
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <a href="{{ route('post.single', ['slug' => $post->slug ]) }}" class="block-20">
              <img style="width: 350px;height: 237px;" src="{{ $post->featured }}" alt="">
            </a>
            <div class="text mt-3 float-right d-block">
              <h3 class="heading"><a href="{{ route('post.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a>
              </h3>
              <div class="d-flex align-items-center mb-3 meta">
                <p class="mb-0">
                  <span class="mr-2">{{ $post->created_at->toFormattedDateString() }}</span>
                  <a href="#about-section" class="mr-2">Admin</a>
                  <!--<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>-->
                </p>
              </div>
              <p>{!! substr($post->body, 0, 200); !!} ...</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>