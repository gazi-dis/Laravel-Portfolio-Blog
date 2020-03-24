<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center"
                        style="background-image:url({{ asset('storage/images/about/'.config('settings.bio-image')) }});">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">About</h1>
                        <h2 class="mb-4">About Me</h2>
                        <p>{{ config('settings.bio-info') }}</p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span>Name:</span> <span>{{ config('settings.name') }}
                                    {{ config('settings.surname') }}</span></li>
                            <li class="d-flex"><span>Date of birth:</span>
                                <span>{{ config('settings.birthday') }}</span></li>
                            <li class="d-flex"><span>Address:</span> <span>{{ config('settings.adress') }}</span></li>
                            <li class="d-flex"><span>Email:</span> <span>{{ config('settings.email') }}</span></li>
                            <li class="d-flex"><span>Phone: </span> <span>{{ config('settings.phone') }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p class="mb-4">
                            <span class="number" data-number="{{ config('settings.total-projects') }}">0</span>
                            <span>Project complete</span>
                        </p>
                        @if (config('settings.cv-bool'))
                        <p><a href="{{ asset('storage/documents/'.config('settings.cv-document')) }}" class="btn btn-primary py-3 px-3">Download CV</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>