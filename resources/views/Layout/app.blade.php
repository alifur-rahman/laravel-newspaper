<?php 
  use App\Models\site_settings_model;

  $siteSettingData  =site_settings_model::where('id','=',1)->get(); // first index all data off site Setting table

  $website_favicon = $siteSettingData[0]['favicon_icon']; // website favicon
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <!-- General CSS Files -->

  <meta name="description" content="@yield('description')" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="keywords" content="@yield('keywords')" />
  <link rel="icon" href="{{asset(''.$website_favicon) }} " type="image/png" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" />
  <!-- google fonts  -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@400;500;700&display=swap"
    rel="stylesheet">
  <!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css" /> -->
  <link rel="stylesheet" href="{{asset('css/jquery.toast.min.css')}}" />
  <link rel='stylesheet' href='https://code.jquery.com/ui/1.11.4/themes/start/jquery-ui.css'>
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/fontawesome-stars-o.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('css/responsive-style.css')}}" />
  <link rel="stylesheet" href="{{asset('css/theme-color-1.css')}}" id="changeColorScheme" />
  <link rel="stylesheet" href="{{asset('ePaper/css/epaper.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}" />


</head>

<body class="boxed" data-bg-img="{{asset('img/bg-pattern.png')}} /">

  @include('Layout.header')
  @yield('content')
  @include('Layout.footer')


  <script src="{{asset('resources/js/app.js')}} "></script>
  <script src="{{asset('js/jquery-3.2.1.min.js')}} "></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
    integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="{{asset('js/bootstrap.min.js')}} "></script>
  <script src="{{asset('js/jquery.sticky.min.js')}} "></script>
  <script src="{{asset('js/jquery.hoverIntent.min.js ')}} "></script>
  <script src="{{asset('js/jquery.marquee.min.js')}} "></script>
  <script src="{{asset('js/jquery.validate.min.js')}} "></script>
  <script src="{{asset('js/isotope.min.js')}} "></script>
  <script src="{{asset('js/resizesensor.min.js')}} "></script>
  <script src="{{asset('js/theia-sticky-sidebar.min.js')}} "></script>
  <script src="{{asset('js/jquery.zoom.min.js')}} "></script>
  <script src="{{asset('js/jquery.barrating.min.js')}} "></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}} "></script>
  <script src="{{asset('js/owl.carousel.min.js')}} "></script>
  <script src="{{asset('js/jquery.countdown.min.js')}} "></script>
  <script src="{{asset('js/epaper.js')}} "></script>
  <script src="{{asset('js/jquery.bongabdo.js')}} "></script>
  <script src="{{asset('js/retina.min.js')}} "></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>
  <script src="{{asset('js/jquery.toast.min.js')}} "></script>
  <script src="{{asset('admin_assets/js/axios.min.js')}} "></script>
  {{--
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script> --}}

  <script src="{{asset('js/main.js')}} "></script>
  <script src="{{asset('js/custom.js')}} "></script>
  <!-- bangla date get  -->
  @yield('script')

</body>

</html>