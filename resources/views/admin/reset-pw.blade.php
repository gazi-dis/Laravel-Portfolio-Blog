<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Şifre Sıfırlama</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('src/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/toastr.min.css') }}">
    <style>
        #loader {
            transition: all 0.3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000;
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden;
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
            animation: sk-scaleout 1.0s infinite ease-in-out;
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1.0);
                opacity: 0;
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            100% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="app">
    <div id='loader'>
        <div class="spinner"></div>
    </div>

    <script>
        window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
    });
    </script>
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv"
            style='background-image: url("/assets/static/images/bg.jpg")'>
            <div class="pos-a centerXY">
                <div class="bgc-white bdrs-50p pos-r" style='width: 120px; height: 120px;'>
                    <img class="pos-a centerXY" width="80" src="{{ asset('src/favicon.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
            <h4 class="fw-300 c-grey-900 mB-40">Parola Güncelleme Formu</h4>
            <form method="POST" action="{{ url('admin/reset-password') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label class="text-normal text-dark">Email Adresi</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="form-group">
                    <label class="text-normal text-dark">Yeni Parola</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label class="text-normal text-dark">Tekrar Yeni Parola</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Parolayı Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="{{ asset('src/js/jquery.min.js') }}"></script>
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
</html>