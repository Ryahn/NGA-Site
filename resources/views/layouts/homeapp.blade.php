<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description"
        content="We are military structured organization. We are mainly veterns from the military but welcome anyone.">
    <meta name="keywords"
        content="gaming, game, warships, community, wows, world of warships, navy, vetern, vetern friendly">
    <meta name="author" content="Ryahn">
    <link rel="icon" type="image/png" href="assets/images/favicon.png') }}>
    <meta name=" viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- START: Styles -->
    @include('partials.home.head')
</head>

<body>
    <!-- Preloader -->
    <div class="mpl-preloader">
        <div class="mpl-preloader-content">
            <div class="mpl-preloader-title display-1 h1">NGA | Navy Gaming America</div>
            <div class="mpl-preloader-progress">
                <div></div>
            </div>
        </div>
    </div>
    <div class="mpl-preloader-bg"></div>
    <!-- /Preloader -->
    <!-- Navbar -->
    @include('partials.home.navbar')
    <!-- /Navbar -->
    <!-- Navbar Mobile -->
    @include('partials.home.mobile')
    <!-- /Navbar Mobile -->
    <!-- START: Content -->
    <div class="content-wrap">
    @yield('content')
    </div>
    <!-- END: Content -->
    <!-- START: Scripts -->
    @include('partials.home.scripts')
    @yield('scripts')
    <!-- END: Scripts -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</body>
</html>
