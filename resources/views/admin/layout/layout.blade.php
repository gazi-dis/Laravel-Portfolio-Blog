<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('src/favicon.png') }}"/>
    <link rel="stylesheet" href="{{  mix('/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('src/admin/flaticon/font/flaticon.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
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
    <!-- @TOC -->
    <!-- =================================================== -->
    <!--
  + @Page Loader
  + @App Content
      - #Left Sidebar
          > $Sidebar Header
          > $Sidebar Menu

      - #Main
          > $Topbar
          > $App Screen Content
-->

    <!-- @Page Loader -->
    <!-- =================================================== -->
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

    <!-- @App Content -->
    <!-- =================================================== -->
    <div>
        <!-- #Left Sidebar ==================== -->
        @include('admin.layout.sideBar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('admin.layout.topBar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    @yield('mainContent')
                </div>
            </main>

            <!-- ### $App Screen Footer ### -->
            @include('admin.layout.footer')
        </div>
    </div>
    <script src="{{ mix('/js/admin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script src="{{ asset('src/js/toastr.min.js') }}"></script>
    <script>
        $(document).ready(function() {
        $('#content-editor').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true 
        });
    });
    </script>
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