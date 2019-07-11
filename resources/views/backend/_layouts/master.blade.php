<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta name="description" content="Test">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@ddeshar">
    <meta property="twitter:creator" content="@ddeshar">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Wame On Code">
    <meta property="og:title" content="WOC - Wame On Code">
    <meta property="og:url" content="http://ddeshar.com.np/">
    <meta property="og:image" content="http://ddeshar.com.np/assets/images/newa.png">
    <meta property="og:description" content="Test">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/card.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <style>
      /* kanit-regular - thai */
      @font-face {
        font-family: 'Kanit';
        font-style: normal;
        font-weight: 400;
        src: url('{{ asset('backend/fonts/kanit-v3-thai-regular.eot') }}'); /* IE9 Compat Modes */
        src: local('Kanit Regular'), local('Kanit-Regular'),
            url('{{ asset('backend/fonts/kanit-v3-thai-regular.eot?#iefix') }}') format('embedded-opentype'), /* IE6-IE8 */
            url('{{ asset('backend/fonts/kanit-v3-thai-regular.woff2') }}') format('woff2'), /* Super Modern Browsers */
            url('{{ asset('backend/fonts/kanit-v3-thai-regular.woff') }}') format('woff'), /* Modern Browsers */
            url('{{ asset('backend/fonts/kanit-v3-thai-regular.ttf') }}') format('truetype'), /* Safari, Android, iOS */
            url('{{ asset('backend/fonts/kanit-v3-thai-regular.svg#Kanit') }}') format('svg'); /* Legacy iOS */
      }

      .backHeader{
        font-size: 1.2rem;
        font-family: Kanit;
        text-align: center;
        padding: 5px;
        margin-bottom: 0;
      }
      .nav-link {
        font-family: Kanit;
      }
      h1, h2, h3, h4, h5, h6, label, button, .nav-link, .btn, th,span {
          font-family: 'Kanit' !important;
      }

    </style>

    <!-- Font-icon css-->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('backend/font-awesome-4.7.0/css/font-awesome.min.css') }}"> -->
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet"> <!--load all styles -->
    @yield('header_styles')
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
      @include('backend._layouts._partial._header')

    <!-- Sidebar menu-->
      @include('backend._layouts._partial._sideMenu')

    <main class="app-content">
      @include('backend._layouts._partial._breadcrumb')
      @yield('content')

    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
    @stack('scripts')
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    @yield('footer_scripts')
  </body>
</html>