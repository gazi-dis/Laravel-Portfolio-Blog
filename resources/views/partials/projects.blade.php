<section class="ftco-section ftco-project" id="projects-section">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Projects</h1>
                <h2 class="mb-4">Our Projects</h2>
                <p>{{ config('settings.projects-info') }}</p>
            </div>
        </div>
        <div class="row no-gutters d-flex justify-content-center">
            @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('storage/images/projects/'.$project->media) }});">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">{{ $project->content }}</a></h3>
                        <span>{{ $project->title }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>