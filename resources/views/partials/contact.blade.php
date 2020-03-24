<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h1 class="big big-2">Contact</h1>
        <h2 class="mb-4">Contact Me</h2>
        <p>{{ config('settings.contact-info') }}</p>
      </div>
    </div>

    <div class="row d-flex contact-info mb-5">
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box text-center p-4 shadow">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon-map-signs"></span>
          </div>
          <div>
            <h3 class="mb-4">Address</h3>
            <p>{{ config('settings.adress') }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box text-center p-4 shadow">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon-phone2"></span>
          </div>
          <div>
            <h3 class="mb-4">Contact Number</h3>
            <p><a href="tel://{{ config('settings.phone') }}">{{ config('settings.phone') }}</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box text-center p-4 shadow">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon-paper-plane"></span>
          </div>
          <div>
            <h3 class="mb-4">Email Address</h3>
            <p><a href="mailto:{{ config('settings.email') }}">{{ config('settings.email') }}</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="align-self-stretch box text-center p-4 shadow">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon-globe"></span>
          </div>
          <div>
            <h3 class="mb-4">Website</h3>
            <p><a href="#" target="_blank">{{ config('settings.personal-link') }}</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row no-gutters block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="{{ url('send-mail') }}" enctype="multipart/form-data" method="POST" class="bg-light p-4 p-md-5 contact-form">
          @csrf
          <div class="form-group">
            <input type="text" name="isim" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" name="mail" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" name="konu" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="icerik" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>

      <div class="col-md-6 d-flex">
        <div class="img"
          style="background-image: url({{ asset('storage/images/about/'.config('settings.bio-image')) }});"></div>
      </div>
    </div>
  </div>
</section>