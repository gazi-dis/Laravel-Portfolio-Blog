<section class="ftco-section" id="blog-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Blog</h1>
                <h2 class="mb-4">Our Blog</h2>
                <p>{{ config('settings.blog-info') }}</p>
            </div>
        </div>
        <div class="row d-flex">
            @isset($posts[0])
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry ">
                    <a href="{{ route('post.single', ['slug' => $posts[0]->slug ]) }}" class="block-20">
                        <img style="width: 350px;height: 237px;" src="{{ $posts[0]->featured }}" alt="">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <h3 class="heading"><a
                                href="{{ route('post.single', ['slug' => $posts[0]->slug ]) }}">{{ $posts[0]->title }}</a>
                        </h3>
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">{{ $posts[0]->created_at->toFormattedDateString() }}</span>
                                <a href="#about-section" class="mr-2">Admin</a>
                                <!--<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>-->
                            </p>
                        </div>
                        <p>{!! substr($posts[0]->body, 0, 200); !!} ...</p>
                    </div>
                </div>
            </div>
            @endisset
            @isset($posts[1])
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="{{ route('post.single', ['slug' => $posts[1]->slug ]) }}" class="block-20">
                        <img style="width: 350px;height: 237px;" src="{{ $posts[1]->featured }}" alt="">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <h3 class="heading"><a
                                href="{{ route('post.single', ['slug' => $posts[1]->slug ]) }}">{{ $posts[1]->title }}</a>
                        </h3>
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">{{ $posts[0]->created_at->toFormattedDateString() }}</span>
                                <a href="#about-section" class="mr-2">Admin</a>
                                <!--<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>-->
                            </p>
                        </div>
                        <p>{!! substr($posts[1]->body, 0, 200); !!} ...</p>
                    </div>
                </div>
            </div>
            @endisset
            @isset($posts[2])
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="{{ route('post.single', ['slug' => $posts[2]->slug ]) }}" class="block-20">
                        <img style="width: 350px;height: 237px;" src="{{ $posts[2]->featured }}" alt="">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <h3 class="heading"><a
                                href="{{ route('post.single', ['slug' => $posts[2]->slug ]) }}">{{ $posts[2]->title }}</a>
                        </h3>
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">{{ $posts[2]->created_at->toFormattedDateString() }}</span>
                                <a href="#about-section" class="mr-2">Admin</a>
                                <!--<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>-->
                            </p>
                        </div>
                        <p>{!! substr($posts[2]->body, 0, 200); !!} ...</p>
                    </div>
                </div>
            </div>
            @endisset
        </div>
    </div>
</section>