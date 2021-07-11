@extends('layouts.homeapp')
@section('content')

    <div class="mpl-navbar-mobile-overlay"></div>
    <div>

        <section class="mpl-banner mpl-banner-top mpl-banner-parallax">
            <div id="emblem">
                <img src="{{ asset('assets/images/logos/nga-emblem.png') }}" alt="">
            </div>
            <div class="mpl-image" data-speed="0.8">
                <img src="assets/images/home/home_bg_1.jpg" alt="" class="jarallax-img">
            </div>
            <div class="mpl-banner-content mpl-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9" data-sr="banner" data-sr-interval="200" data-sr-duration="1200"
                            data-sr-distance="20">
                            <h1 class="display-1" data-sr-item="banner">NGA | Navy Gaming America</h1>
                            <p class="lead" data-sr-item="banner"> Kicking ass and having fun. Where everyone is
                                family but not over 90.</p>
                            <div class="row hgap-sm vgap-sm justify-content-center justify-content-sm-start">
                                <div class="col-auto" data-sr-item="banner">
                                    <a class="btn btn-md btn-brand" href="#demo">Check Us Out</a>
                                </div>
                                <div class="col-auto" data-sr-item="banner">
                                    <a class="btn btn-md btn-default" href="{{ route('apply') }}">
                                        <span class="name">Join Us</span>
                                        <i class="icon fad fa-sign-in-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mpl-box-lg text-center" id="demo" data-sr="demos" data-sr-interval="200" data-sr-duration="1200"
            data-sr-distance="20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <h2 class="display-2" data-sr-item="demos">What We <span class="text-brand">ARE</span> About
                        </h2>
                        <p class="lead mb-60" data-sr-item="demos"
                            style="visibility: visible;width: 650px;margin-left: -80px;">We are a crazy group who
                            are not just strangers but are family.<br>
                            We respect one another and joke around. All players are 18+ and TeamSpeak with mic and
                            speakers or headset.<br>
                            We all active around our busy schedules, being: military (active/veteran/retired), truck
                            driver, taxi driver, etc.</p>
                    </div>
                </div>
                <div class="row hgap-lg vgap-lg justify-content-center">
                    <div class="col-12 col-md-6" data-sr-item="demos">
                        <div class="mpl-demo-item">
                            <a class="mpl-demo-item-image" href="#">
                                <img src="assets/images/demo/demo-main.jpg" alt="">
                            </a>
                            <a class="mpl-demo-item-title h3" href="#">Training</a>
                            <span class="mpl-demo-item-description">
                                <ul style="list-style:none; margin-left: -40px;">
                                    <li>Introductory</li>
                                    <li>Intermediate</li>
                                    <li>Advanced</li>
                                    <li>Improvement Monitoring</li>
                                </ul>
                            </span>
                            <a class="mpl-demo-item-btn btn btn-brand" href="{{ route('apply') }}">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" data-sr-item="demos">
                        <div class="mpl-demo-item">
                            <a class="mpl-demo-item-image" href="#">
                                <img src="assets/images/demo/demo-shooter.jpg" alt="">
                            </a>
                            <a class="mpl-demo-item-title h3" href="#">Clan Battles</a>
                            <span class="mpl-demo-item-description">
                                <div class="row">
                                    <div class="col-md-3">NGA<br><span id="league"><img
                                                src="{{ asset('assets/images/league/storm1.png') }}" alt="Storm I"></span>
                                    </div>
                                    <div class="col-md-3">NGA-A<br><span id="league"><img
                                                src="{{ asset('assets/images/league/storm1.png') }}" alt="Storm I"></span>
                                    </div>
                                    <div class="col-md-3">NGA-B<br><span id="league"><img
                                                src="{{ asset('assets/images/league/gale1.png') }}" alt="Storm I"></span>
                                    </div>
                                    <div class="col-md-3">NGA-D<br><span id="league"><img
                                                src="{{ asset('assets/images/league/storm3.png') }}" alt="Storm I"></span>
                                    </div>
                                </div>
                            </span>
                            <a class="mpl-demo-item-btn btn btn-brand" href="{{ route('apply') }}">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" data-sr-item="demos">
                        <div class="mpl-demo-item">
                            <a class="mpl-demo-item-image" href="#">
                                <img src="assets/images/demo/demo-studio.jpg" alt="">
                            </a>
                            <a class="mpl-demo-item-title h3" href="#">Competitive, Semi-Competitve &amp; Casual
                                Clans</a>
                            <span class="mpl-demo-item-description">
                                <ul style="list-style:none; margin-left: -40px;">
                                    <li><span style="color: lime;">+</span>25% to Free XP</li>
                                    <li><span style="color: deeppink;">-</span>15% to Research Costs</li>
                                    <li><span style="color: deeppink;">-</span>12% to Repair Costs</li>
                                    <li><span style="color: lime;">+</span>10% to Commander XP</li>
                                    <li><span style="color: lime;">+</span>10% More Coal</li>
                                    <li><span style="color: lime;">+</span>10% More Steel</li>
                                    <li><span style="color: lime;">+</span>5% to XP For All Ships</li>
                                </ul>
                            </span>
                            <a class="mpl-demo-item-btn btn btn-brand" href="{{ route('apply') }}">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" data-sr-item="demos">
                        <div class="mpl-demo-item">
                            <a class="mpl-demo-item-image" href="#">
                                <img src="assets/images/demo/demo-gamer.jpg" alt="">
                            </a>
                            <a class="mpl-demo-item-title h3" href="#">Website</a>
                            <span class="mpl-demo-item-description">Get your PR, ship stats, etc. <span
                                    class="badge badge-warning">Current Work In Progress</span></span>
                            <a class="mpl-demo-item-btn btn btn-brand" href="{{ route('apply') }}">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="mpl-box-lg bg-light text-center" data-sr="feature" data-sr-interval="140" data-sr-duration="1200"
            data-sr-distance="20">
            <div class="container">
                <h2 class="display-2 mb-60" data-sr-item="feature">Supported Games</h2>
                <div class="row vgap justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                        <div class="mpl-feature supported_wow">
                            <div class="mpl-feature-icon">
                                <div class="icon supported_logo">
                                    <img src="{{ asset('/assets/images/logos/wow-logo.png') }}" alt="">
                                </div>
                            </div>
                            <div class="mpl-feature-title h4">World of Warships</div>
                            <div class="mpl-feature-text">Grumpy Pirates? Check</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                        <div class="mpl-feature supported_wot">
                            <div class="mpl-feature-icon">
                                <div class="icon supported_logo wot">
                                    <img src="{{ asset('/assets/images/logos/wot-logo.png') }}" alt="">
                                </div>
                            </div>
                            <div class="mpl-feature-title h4">World of Tanks</div>
                            <div class="mpl-feature-text">Too many dudes in confined spaces? Check</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                        <div class="mpl-feature supported_wt">
                            <div class="mpl-feature-icon">
                                <div class="icon supported_logo">
                                    <img src="{{ asset('/assets/images/logos/wt-logo.png') }}" alt="">
                                </div>
                            </div>
                            <div class="mpl-feature-title h4">War Thunder</div>
                            <div class="mpl-feature-text">Paper planes and tonka tanks? Check</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                        <div class="mpl-feature supported_aw">
                            <div class="mpl-feature-icon">
                                <div class="icon supported_logo">
                                    <img src="{{ asset('/assets/images/logos/aw-logo.png') }}" alt="">
                                </div>
                            </div>
                            <div class="mpl-feature-title h4">Armored Warfare</div>
                            <div class="mpl-feature-text">*thinking*</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mpl-box-md bg-light" data-sr="forum" data-sr-interval="200" data-sr-duration="1000"
            data-sr-distance="20">
            <div class="container">
                <div class="row hgap-lg vgap-lg align-items-center">
                    <div class="col-lg-5">
                        <h2 class="display-2" data-sr-item="forum">Forum</h2>
                        <p class="lead" data-sr-item="forum">The home with discussions and flame for your lovely
                            community members</p>
                        <a href="{{ route('forum') }}" class="btn btn-md mt-20" data-sr-item="forum">View
                            Forum</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="mpl-demo-forum" data-sr="forum-img" data-sr-delay="300" data-sr-interval="200"
                            data-sr-duration="1000" data-sr-distance="20">
                            <div data-sr-item="forum-img">
                                <span class="mpl-image mpl-demo-img">
                                    <img src="{{ asset('assets/images/bg/forum2.png') }}" alt="">
                                </span>
                            </div>
                            <div data-sr-item="forum-img">
                                <span class="mpl-image mpl-demo-img">
                                    <img src="{{ asset('assets/images/bg/forum1.png') }}" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mpl-banner big mpl-banner-parallax" data-sr="purchase" data-sr-interval="200" data-sr-duration="1000"
            data-sr-distance="20">
            <div id="emblembt">
                <img src="{{ asset('assets/images/logos/nga-emblem.png') }}" alt="">
            </div>
            <div class="mpl-image" data-speed="0.8">
                <img class="jarallax-img" src="assets/images/dark/bg-banner-2.jpg" alt="">
            </div>
            <div class="mpl-banner-content text-center container">
                <h2 class="display-2" data-sr-item="purchase">Start your Journey with NGA</h2>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <p class="lead" data-sr-item="purchase"> We are sure that you will enjoy our community. </p>
                        <a class="btn btn-md btn-brand" href="{{ route('apply') }}" data-sr-item="purchase">Apply
                            Now</a>
                    </div>
                </div>
                <div class="row justify-content-center social-bottom">
                    <div class="col-12 col-lg-8">
                        <div class="mpl-footer-wrapper">
                            <div class="mpl-footer-container container">
                                <div class="mpl-footer-content">
                                    <div class="row vgap" data-sr="footer" data-sr-interval="120" data-sr-duration="1200"
                                        data-sr-distance="20">
                                        <div class="col-6 col-sm-3" data-sr-item="footer">
                                            <a href="#" class="mpl-social">
                                                <span class="mpl-social-icon">
                                                    <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.3922 11.4C15.3922 12.132 14.8585 12.732 14.1824 12.732C13.5182 12.732 12.9726 12.132 12.9726 11.4C12.9726 10.668 13.5063 10.068 14.1824 10.068C14.8585 10.068 15.3922 10.668 15.3922 11.4ZM9.85315 10.068C9.17707 10.068 8.64333 10.668 8.64333 11.4C8.64333 12.132 9.18893 12.732 9.85315 12.732C10.5292 12.732 11.063 12.132 11.063 11.4C11.0748 10.668 10.5292 10.068 9.85315 10.068ZM22.3784 2.472V24C19.3902 21.3284 20.3459 22.2128 16.8749 18.948L17.5035 21.168H4.05312C2.71282 21.168 1.62161 20.064 1.62161 18.696V2.472C1.62161 1.104 2.71282 0 4.05312 0H19.9469C21.2872 0 22.3784 1.104 22.3784 2.472ZM18.998 13.848C18.998 9.984 17.29 6.852 17.29 6.852C15.582 5.556 13.9571 5.592 13.9571 5.592L13.791 5.784C15.8074 6.408 16.7444 7.308 16.7444 7.308C13.9269 5.7457 10.6173 5.74542 7.88422 6.96C7.44536 7.164 7.18442 7.308 7.18442 7.308C7.18442 7.308 8.16889 6.36 10.3039 5.736L10.1853 5.592C10.1853 5.592 8.5603 5.556 6.85231 6.852C6.85231 6.852 5.14433 9.984 5.14433 13.848C5.14433 13.848 6.14065 15.588 8.76194 15.672C8.76194 15.672 9.20079 15.132 9.55662 14.676C8.05028 14.22 7.48095 13.26 7.48095 13.26C7.65543 13.3836 7.94316 13.5437 7.96725 13.56C9.96926 14.6943 12.813 15.0659 15.3685 13.98C15.7836 13.824 16.2462 13.596 16.7325 13.272C16.7325 13.272 16.1395 14.256 14.5857 14.7C14.9415 15.156 15.3685 15.672 15.3685 15.672C17.9898 15.588 18.998 13.848 18.998 13.848V13.848Z" />
                                                    </svg>
                                                </span>
                                                <span class="mpl-social-name h5">Subscribe to<br>Discord</span>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3" data-sr-item="footer">
                                            <a href="#" class="mpl-social">
                                                <span class="mpl-social-icon">
                                                    <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.24527 0L0.648651 4.11964V20.9571H6.32433V24H9.51756L12.5304 20.9571H17.1452L23.3514 14.6893V0H2.24527ZM21.2243 13.6125L17.6757 17.1964H12L8.98712 20.2393V17.1964H4.19727V2.14821H21.2243V13.6125V13.6125ZM17.6757 6.26786V12.5304H15.5486V6.26786H17.6757ZM12 6.26786V12.5304H9.87295V6.26786H12Z" />
                                                    </svg>
                                                </span>
                                                <span class="mpl-social-name h5">Watch on<br>Twitch</span>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3" data-sr-item="footer">
                                            <a href="#" class="mpl-social">
                                                <span class="mpl-social-icon">
                                                    <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M23.4985 6.29213C23.2225 5.26881 22.4092 4.46288 21.3766 4.18937C19.505 3.69238 12 3.69238 12 3.69238C12 3.69238 4.49503 3.69238 2.62336 4.18937C1.59077 4.46292 0.777523 5.26881 0.501503 6.29213C0 8.14695 0 12.0169 0 12.0169C0 12.0169 0 15.8868 0.501503 17.7416C0.777523 18.7649 1.59077 19.5373 2.62336 19.8108C4.49503 20.3078 12 20.3078 12 20.3078C12 20.3078 19.505 20.3078 21.3766 19.8108C22.4092 19.5373 23.2225 18.7649 23.4985 17.7416C24 15.8868 24 12.0169 24 12.0169C24 12.0169 24 8.14695 23.4985 6.29213V6.29213ZM9.54544 15.5305V8.50327L15.8181 12.017L9.54544 15.5305V15.5305Z" />
                                                    </svg>
                                                </span>
                                                <span class="mpl-social-name h5">Watch on<br>Youtube</span>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3" data-sr-item="footer">
                                            <a href="#" class="mpl-social">
                                                <span class="mpl-social-icon">
                                                    <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M21.533 7.11175C21.5482 7.32494 21.5482 7.53817 21.5482 7.75136C21.5482 14.2539 16.599 21.7463 7.5533 21.7463C4.76648 21.7463 2.17767 20.9391 0 19.5382C0.395953 19.5838 0.776625 19.5991 1.18781 19.5991C3.48727 19.5991 5.60405 18.8224 7.29441 17.4976C5.13197 17.4519 3.31978 16.0356 2.69541 14.0864C3 14.132 3.30455 14.1625 3.62437 14.1625C4.06598 14.1625 4.50764 14.1016 4.91878 13.995C2.66498 13.5381 0.974578 11.5585 0.974578 9.16759V9.1067C1.62937 9.47219 2.39086 9.70061 3.19791 9.73103C1.87303 8.84777 1.00505 7.34017 1.00505 5.63458C1.00505 4.72089 1.24866 3.88333 1.67508 3.15236C4.09641 6.13712 7.73602 8.08633 11.8172 8.29956C11.7411 7.93408 11.6954 7.55341 11.6954 7.17269C11.6954 4.462 13.8883 2.25391 16.6141 2.25391C18.0304 2.25391 19.3095 2.84781 20.208 3.8072C21.3197 3.59402 22.3857 3.18283 23.3299 2.61939C22.9643 3.76155 22.1877 4.72094 21.1674 5.33003C22.1573 5.22348 23.1167 4.94931 23.9999 4.56864C23.33 5.54322 22.4924 6.4112 21.533 7.11175V7.11175Z" />
                                                    </svg>
                                                </span>
                                                <span class="mpl-social-name h5">Follow on<br>Twitter</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Footer -->
        <div class="mpl-footer-copyright">
            <div class="container">
                <p>2020 &copy; NGA. All rights reserved | &copy; Wargaming.net. All rights reserved<br>
                    This is application is a third-party tool under Wargaming Developers Partner Program.</p>
            </div>
        </div>
        <!-- /Footer -->
    </div>
@endsection
