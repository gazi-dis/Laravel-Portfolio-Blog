<div class="hero-wrap js-fullheight">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
      <div class="col-lg-10 ftco-animate d-flex align-items-center">
        <div class="text text-center">
          <h1 class="mb-3 bread">{{ $post->title }}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                  class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{ url('/blog') }}">Blog <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>{{ $post->title }} <i
                class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </div>
</div>