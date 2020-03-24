<section class="ftco-section" id="services-section">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Services</h1>
                <h2 class="mb-4">Services</h2>
                <p>{{ config('settings.services-info') }}</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($contents as $content)
            <div class="col-md-4 text-center d-flex ftco-animate">
                <a href="#" class="services-1 shadow">
                    <span class="icon">
                        <i class="{{ $content->media }}"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">{{ $content->title }}</h3>
                        <p>{{ $content->content }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>