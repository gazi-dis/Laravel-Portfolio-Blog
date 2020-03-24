<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>{{ config('settings.footer-info') }}</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="{{ config('settings.twitter-link') }}" target="_blank"><span
                  class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="{{ config('settings.face-link') }}" target="_blank"><span
                  class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="{{ config('settings.ig-link') }}" target="_blank"><span
                  class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Links</h2>
          <ul class="list-unstyled">
            @if (config('settings.entry'))
            <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
            @endif
            @if (config('settings.about'))
            <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
            @endif
            @if (config('settings.services'))
            <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
            @endif
            @if (config('settings.projects'))
            <li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
            @endif
            @if (config('settings.blog'))
            <li><a href="{{ url('blog') }}"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
            @endif
            @if (config('settings.contact'))
            <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
            @endif
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Services</h2>
          <ul class="list-unstyled">
            @foreach ($contents as $content)
            <li><span class="icon-long-arrow-right mr-2"></span>{{ $content->title }}</li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">{{ config('settings.adress') }}</span>
              </li>
              <li><span class="icon icon-phone"></span><span
                    class="text">{{ config('settings.phone') }}</span></li>
              <li><span class="icon icon-envelope"></span><span
                    class="text">{{ config('settings.email') }}</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>


<script src="{{ asset('src/js/jquery.min.js') }}"></script>
<script src="{{ asset('src/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('src/js/popper.min.js') }}"></script>
<script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('src/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('src/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('src/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('src/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('src/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('src/js/aos.js') }}"></script>
<script src="{{ asset('src/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('src/js/scrollax.min.js') }}"></script>

<script src="{{ asset('src/js/main.js') }}"></script>
<script id="dsq-count-scr" src="https://localhost-9qtqmmplqb.disqus.com/count.js" async></script>
<script src="{{ asset('src/js/toastr.min.js') }}"></script>
<script>
  @if(Session::has('success'))
      toastr.options = {
          "progressBar": true,
          "showDuration": "800"
        }
      toastr.success("{{ Session::get('success') }}")
  @endif
  @if(Session::has('info'))
      toastr.options = {
          "progressBar": true,
          "showDuration": "800"
        }
      toastr.info("{{ Session::get('info') }}")
  @endif
  @if(Session::has('danger'))
    toastr.options = {
      "progressBar": true,
      "showDuration": "800"
    }
    toastr.error("{{ Session::get('danger') }}")
  @endif
</script>

</body>

</html>