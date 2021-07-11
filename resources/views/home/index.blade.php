@extends('layouts.homeapp')
@section('content')
    <div class="mpl-navbar-mobile-overlay"></div>
    <div>
        <!-- START: Landing -->
       @include('home.section.landing')
        <!-- END: Landing -->
        <!-- Start: About -->
        @include('home.section.about')
        <!-- END: About -->
        <!-- Start: Games -->
        @include('home.section.games')
        <!-- END: Games -->
        <!-- Start: Forum -->
        @include('home.section.forum')
        <!-- END: Forum -->
        <!-- Start: Footer -->
        @include('home.section.footer')
        <!-- END: Footer -->
    </div>
@endsection
