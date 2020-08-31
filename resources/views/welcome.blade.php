<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="We are military structured organization. We are mainly veterns from the military but welcome anyone.">
    <meta name="keywords" content="gaming, game, warships, community, wows, world of warships, navy, vetern, vetern friendly">
    <meta name="author" content="Ryahn">
    <link rel="icon" type="image/png" href="assets/images/favicon.png') }}>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- START: Styles -->
    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/vgd1cli.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="assets/vendor/swiper/css/swiper.min.css" />
    <!-- Fancybox -->
    <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css" />
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="assets/vendor/slider-revolution/css/settings.css">
    <link rel="stylesheet" href="assets/vendor/slider-revolution/css/layers.css">
    <link rel="stylesheet" href="assets/vendor/slider-revolution/css/navigation.css">
    <!-- MonsterPlay -->
    <link rel="stylesheet" href="assets/css/monsterplay.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- END: Styles -->
    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <!-- Preloader -->
    <script src="assets/js/preloader.min.js"></script>
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
    <nav class="mpl-navbar-top mpl-navbar">
        <div class="mpl-navbar-mobile-overlay"></div>
        <div class="container mpl-navbar-container">
            <a href="#" class="mpl-navbar-toggle"></a>
            <div class="mpl-navbar-brand">
                <a href="index.html">
                    <img src="assets/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="mpl-navbar-content">
                <ul class="mpl-navbar-nav">
                    <li class="mpl-dropdown">
                        <a href="dark-index.html" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> Home </span>
                        </a>
                        <div class="mpl-dropdown-menu">
                            <ul class="mpl-navbar-nav">
                                <li>
                                    <a href="dark-index.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Main </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shooter-index.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Shooter </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="gamer-index.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Gamer </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="studio-index.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Studio </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mpl-dropdown">
                        <a href="blog-grid-sidebar-right.html" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> Matches </span>
                        </a>
                        <div class="mpl-dropdown-menu">
                            <ul class="mpl-navbar-nav">
                                <li class="mpl-dropdown">
                                    <a href="blog-grid-sidebar-right.html" class="mpl-nav-link" role="button">
                                        <span class="mpl-nav-link-name"> Grid </span>
                                    </a>
                                    <div class="mpl-dropdown-menu">
                                        <ul class="mpl-navbar-nav">
                                            <li>
                                                <a href="blog-grid-sidebar-right.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> Sidebar Right </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-grid-sidebar-left.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> Sidebar Left </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-grid-no-sidebar.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> No Sidebar </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mpl-dropdown">
                                    <a href="blog-list-sidebar-right.html" class="mpl-nav-link" role="button">
                                        <span class="mpl-nav-link-name"> List </span>
                                    </a>
                                    <div class="mpl-dropdown-menu">
                                        <ul class="mpl-navbar-nav">
                                            <li>
                                                <a href="blog-list-sidebar-right.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> Sidebar Right </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-list-sidebar-left.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> Sidebar Left </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mpl-dropdown">
                                    <a href="blog-post-gallery.html" class="mpl-nav-link" role="button">
                                        <span class="mpl-nav-link-name"> Single Post </span>
                                    </a>
                                    <div class="mpl-dropdown-menu">
                                        <ul class="mpl-navbar-nav">
                                            <li>
                                                <a href="blog-post-gallery.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> Gallery </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-post-carousel.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> Carousel </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-post-simple.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> Simple </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mpl-dropdown">
                        <a href="shop-sidebar-right.html" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> About </span>
                        </a>
                        <div class="mpl-dropdown-menu">
                            <ul class="mpl-navbar-nav">
                                <li class="mpl-dropdown">
                                    <a href="shop-sidebar-right.html" class="mpl-nav-link" role="button">
                                        <span class="mpl-nav-link-name"> Products List </span>
                                    </a>
                                    <div class="mpl-dropdown-menu">
                                        <ul class="mpl-navbar-nav">
                                            <li>
                                                <a href="shop-sidebar-right.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> Right Sidebar </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar-left.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> Left Sidebar </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-no-sidebar.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name"> No Sidebar </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="shop-product.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Single Product </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Cart </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="checkout.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Checkout </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mpl-dropdown">
                        <a href="esports-teams.html" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> Join Us </span>
                        </a>
                        <div class="mpl-dropdown-menu">
                            <div class="mpl-navbar-nav-mega">
                                <ul role="menu" class="mpl-navbar-nav">
                                    <li>
                                        <a href="esports-teams.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Teams </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-players.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Players </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-tournaments.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Tournaments </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-matches.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Matches </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-games.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Games </span>
                                        </a>
                                    </li>
                                </ul>
                                <ul role="menu" class="mpl-navbar-nav">
                                    <li>
                                        <a href="esports-single-team.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Single Team </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-single-player.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Single Player </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-single-tournament.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Single Tournament </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-single-match.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Single Match </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="mpl-dropdown">
                            <a href="component-buttons.html" class="mpl-nav-link" role="button">
                                <span class="mpl-nav-link-name"> Components </span>
                            </a>
                            <div class="mpl-dropdown-menu">
                                <div class="mpl-navbar-nav-mega">
                                    <ul role="menu" class="mpl-navbar-nav">
                                        <li>
                                            <a href="component-buttons.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Buttons </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-pagination.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Pagination </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-page-pagination.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Page Pagination </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-progress-bars.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Progress Bars </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-accordion.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Accordion </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-tabs.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Tabs </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-features.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Features </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul role="menu" class="mpl-navbar-nav">
                                        <li>
                                            <a href="component-reviews.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Reviews </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-pricing.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Pricing </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-tables.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Tables </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-badges.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Badges </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-alerts.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Alerts </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-breadcrumbs.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Breadcrumbs </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-countdown.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Countdown </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul role="menu" class="mpl-navbar-nav">
                                        <li>
                                            <a href="component-icon-box.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Icon Box </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-number-box.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Number Box </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-changelog.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Changelog </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-modal.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Modal </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-tooltips.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Tooltips </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="component-popovers.html" class="mpl-nav-link">
                                                <span class="mpl-nav-link-name"> Popovers </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="mpl-dropdown">
                            <a href="forums.html" class="mpl-nav-link" role="button">
                                <span class="mpl-nav-link-name"> Pages </span>
                            </a>
                            <div class="mpl-dropdown-menu">
                                <ul class="mpl-navbar-nav">
                                    <li class="mpl-dropdown">
                                        <a href="forums.html" class="mpl-nav-link" role="button">
                                            <span class="mpl-nav-link-name"> Forum </span>
                                        </a>
                                        <div class="mpl-dropdown-menu">
                                            <ul class="mpl-navbar-nav">
                                                <li>
                                                    <a href="forums.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name"> Forums </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="forums-topics.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name"> Topics </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="forums-single-topic.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name"> Single Topic </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="sign-in.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Sign In </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sign-up.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Sign Up </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Widgets </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="coming-soon.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Coming Soon </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Contact Us </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Search </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> 404 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blank.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Blank </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                </ul>
                <ul class="mpl-navbar-nav mpl-navbar-right">
                    <li class="mpl-dropdown">
                        <a href="user-activity.html" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> Ryahn<span class="badge badge-brand">8</span>
                            </span>
                        </a>
                        <div class="mpl-dropdown-menu">
                            <ul class="mpl-navbar-nav">
                                <li>
                                    <a href="user-activity.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Activity </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Profile </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user-messages.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Messages<span class="badge badge-brand">8</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user-settings.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Settings </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="sign-in.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name"> Log Out </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="mpl-nav-link" href="#" data-fancybox data-src="#popup-search" data-touch="false" data-small-btn="false" data-toolbar="false" data-close-existing="true" data-auto-focus="true">
                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" />
                            </svg>
                        </a>
                    </li>
                    <li class="mpl-dropdown mpl-dropdown-cart">
                        <a class="mpl-nav-link" role="button" href="#">
                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H5L7.68 14.39M7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6L7.68 14.39ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM21 21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21C19 20.4477 19.4477 20 20 20C20.5523 20 21 20.4477 21 21Z" />
                            </svg>
                        </a>
                        <div class="mpl-dropdown-menu">
                            <div class="row justify-content-between vgap">
                                <div class="col-12">
                                    <table class="table mpl-table-shop mpl-table-shop-sm mpl-table-responsive mb-0">
                                        <tbody>
                                            <tr class="mpl-table-product mpl-table-product-sm">
                                                <td class="mpl-table-image">
                                                    <a href="shop-product.html" class="mpl-table-product-image">
                                                        <span class="mpl-image">
                                                            <img src="assets/images/dark/product-260x200.jpg') }}" alt="">
                                                        </span>
                                                    </a>
                                                </td>
                                                <td class="mpl-table-name" data-title="Product">
                                                    <a href="shop-product.html" class="mpl-table-product-title h5">Gamepad MPL</a>
                                                    <span class="mpl-price"> $120.00 </span>
                                                </td>
                                                <td class="mpl-table-remove">
                                                    <a href="#" class="mpl-table-product-remove">
                                                        <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18 6L6 18M6 6L18 18" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="mpl-table-product mpl-table-product-sm">
                                                <td class="mpl-table-image">
                                                    <a href="shop-product.html" class="mpl-table-product-image">
                                                        <span class="mpl-image">
                                                            <img src="assets/images/dark/product-2-260x200.jpg') }}" alt="">
                                                        </span>
                                                    </a>
                                                </td>
                                                <td class="mpl-table-name" data-title="Product">
                                                    <a href="shop-product.html" class="mpl-table-product-title h5">Headphones MPL</a>
                                                    <span class="mpl-price"> $84.99 </span>
                                                </td>
                                                <td class="mpl-table-remove">
                                                    <a href="#" class="mpl-table-product-remove">
                                                        <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18 6L6 18M6 6L18 18" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-between h5 mb-0">
                                        <span>Subtotal:</span>
                                        <span>$204.99</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row hgap-xs vgap-xs">
                                        <div class="col">
                                            <a href="cart.html" class="btn btn-block btn-default">View cart</a>
                                        </div>
                                        <div class="col">
                                            <a href="checkout.html" class="btn btn-block btn-default">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="mpl-dropdown mpl-dropdown-user">
                        <a href="#" class="mpl-nav-link" role="button">
                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" />
                            </svg>
                        </a>
                        <div class="mpl-dropdown-menu">
                            <form class="mpl-navbar-login-form" action="#" method="post">
                                <div class="row hgap-sm vgap-sm align-items-center">
                                    <div class="col-12">
                                        <label for="nav_username">Username:</label><input class="form-control form-control-sm" type="text" id="nav_username" name="username" placeholder="Username"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12">
                                        <label for="nav_password">Password:</label><input class="form-control form-control-sm" type="text" id="nav_password" name="password" placeholder="Password"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="nav_rememberme" name="rememberme"><label class="custom-control-label" for="nav_rememberme">Remember Me</label></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="small">Lost Password</a>
                                    </div>
                                    <div class="col-12">
                                        <a href="sign-in.html" class="btn btn-block btn-default">Log in</a>
                                    </div>
                                    <div class="col-12 small"> Are you new? <a href="sign-up.html">Sign Up</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Navbar -->
    <!-- Navbar Mobile -->
    <nav class="mpl-navbar mpl-navbar-mobile">
        <div class="mpl-navbar-container">
            <div class="mpl-navbar-head">
                <a href="index.html" class="mpl-navbar-brand">
                    <img src="assets/images/logo.svg') }}" alt="">
                </a>
                <a href="#" class="mpl-navbar-toggle">
                    <span></span><span></span><span></span><span></span>
                </a>
            </div>
            <div class="mpl-navbar-body">
                <ul class="mpl-navbar-nav">
                    <li>
                        <a href="dark-index.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                            <span class="mpl-nav-link-name">Demos</span>
                        </a>
                        <div class="mpl-navbar-collapse collapse">
                            <ul class="mpl-navbar-nav">
                                <li>
                                    <a href="dark-index.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Main </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shooter-index.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Shooter </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="gamer-index.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Gamer </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="studio-index.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Studio </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="blog-grid-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                            <span class="mpl-nav-link-name">Blog</span>
                        </a>
                        <div class="mpl-navbar-collapse collapse">
                            <ul class="mpl-navbar-nav">
                                <li>
                                    <a href="blog-grid-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                        <span class="mpl-nav-link-name">Grid</span>
                                    </a>
                                    <div class="mpl-navbar-collapse collapse">
                                        <ul class="mpl-navbar-nav">
                                            <li>
                                                <a href="blog-grid-sidebar-right.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Sidebar Right </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-grid-sidebar-left.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Sidebar Left </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-grid-no-sidebar.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">No Sidebar </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-list-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                        <span class="mpl-nav-link-name">List</span>
                                    </a>
                                    <div class="mpl-navbar-collapse collapse">
                                        <ul class="mpl-navbar-nav">
                                            <li>
                                                <a href="blog-list-sidebar-right.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Sidebar Right </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-list-sidebar-left.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Sidebar Left </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-post-gallery.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                        <span class="mpl-nav-link-name">Single Post</span>
                                    </a>
                                    <div class="mpl-navbar-collapse collapse">
                                        <ul class="mpl-navbar-nav">
                                            <li>
                                                <a href="blog-post-gallery.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Gallery </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-post-carousel.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Carousel </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-post-simple.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Simple </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="shop-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                            <span class="mpl-nav-link-name">Shop</span>
                        </a>
                        <div class="mpl-navbar-collapse collapse">
                            <ul class="mpl-navbar-nav">
                                <li>
                                    <a href="shop-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                        <span class="mpl-nav-link-name">Products List</span>
                                    </a>
                                    <div class="mpl-navbar-collapse collapse">
                                        <ul class="mpl-navbar-nav">
                                            <li>
                                                <a href="shop-sidebar-right.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Right Sidebar </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar-left.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Left Sidebar </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-no-sidebar.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">No Sidebar </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="shop-product.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Single Product </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Cart </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="checkout.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Checkout </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="esports-teams.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                            <span class="mpl-nav-link-name">eSports</span>
                        </a>
                        <div class="mpl-navbar-collapse collapse">
                            <ul class="mpl-navbar-nav">
                                <li>
                                    <a href="esports-teams.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Teams </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="esports-players.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Players </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="esports-tournaments.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Tournaments </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="esports-matches.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Matches </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="esports-games.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Games </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="esports-single-team.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Single Team </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="esports-single-player.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Single Player </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="esports-single-tournament.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Single Tournament </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="esports-single-match.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Single Match </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="component-buttons.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                            <span class="mpl-nav-link-name">Components</span>
                        </a>
                        <div class="mpl-navbar-collapse collapse">
                            <ul class="mpl-navbar-nav">
                                <li>
                                    <a href="component-buttons.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Buttons </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-pagination.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Pagination </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-page-pagination.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Page Pagination </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-progress-bars.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Progress Bars </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-accordion.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Accordion </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-tabs.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Tabs </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-features.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Features </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-reviews.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Reviews </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-pricing.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Pricing </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-tables.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Tables </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-badges.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Badges </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-alerts.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Alerts </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-breadcrumbs.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Breadcrumbs </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-countdown.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Countdown </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-icon-box.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Icon Box </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-number-box.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Number Box </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-changelog.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Changelog </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-modal.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Modal </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-tooltips.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Tooltips </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="component-popovers.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Popovers </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="forums.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                            <span class="mpl-nav-link-name">Pages</span>
                        </a>
                        <div class="mpl-navbar-collapse collapse">
                            <ul class="mpl-navbar-nav">
                                <li>
                                    <a href="forums.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                        <span class="mpl-nav-link-name">Forum</span>
                                    </a>
                                    <div class="mpl-navbar-collapse collapse">
                                        <ul class="mpl-navbar-nav">
                                            <li>
                                                <a href="forums.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Forums </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="forums-topics.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Topics </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="forums-single-topic.html" class="mpl-nav-link">
                                                    <span class="mpl-nav-link-name">Single Topic </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="sign-in.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Sign In </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="sign-up.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Sign Up </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="widgets.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Widgets </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="coming-soon.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Coming Soon </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Contact Us </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Search </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">404 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blank.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Blank </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="user-activity.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                            <span class="mpl-nav-link-name">s1mple<span class="badge badge-brand">8</span></span>
                        </a>
                        <div class="mpl-navbar-collapse collapse">
                            <ul class="mpl-navbar-nav">
                                <li>
                                    <a href="user-activity.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Activity </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Profile </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user-messages.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Messages<span class="badge badge-brand">8</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user-settings.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Settings </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="sign-in.html" class="mpl-nav-link">
                                        <span class="mpl-nav-link-name">Log Out </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mpl-navbar-footer">
                <ul class="mpl-navbar-nav">
                    <li>
                        <a class="mpl-nav-link" href="#" data-fancybox data-src="#popup-search" data-touch="false" data-small-btn="false" data-toolbar="false" data-close-existing="true" data-auto-focus="true">
                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="mpl-nav-link" href="#" data-fancybox data-src="#popup-cart" data-touch="false" data-small-btn="false" data-toolbar="false" data-close-existing="true" data-auto-focus="false">
                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H5L7.68 14.39M7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6L7.68 14.39ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM21 21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21C19 20.4477 19.4477 20 20 20C20.5523 20 21 20.4477 21 21Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="mpl-nav-link" href="#" data-fancybox data-src="#popup-signin" data-touch="false" data-small-btn="false" data-toolbar="false" data-close-existing="true" data-auto-focus="true">
                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Navbar Mobile -->
    <div class="content-wrap">

        <div class="mpl-navbar-mobile-overlay"></div>
        <div>

            <section class="mpl-banner mpl-banner-top mpl-banner-parallax">
                <div class="mpl-image" data-speed="0.8">
                    <img src="assets/images/home/home_bg_1.jpg') }}" alt="" class="jarallax-img">
                </div>
                <div class="mpl-banner-content mpl-box-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9" data-sr="banner" data-sr-interval="200" data-sr-duration="1200" data-sr-distance="20">
                                <h1 class="display-1" data-sr-item="banner">NGA | Navy Gaming America</h1>
                                <p class="lead" data-sr-item="banner"> This needs to be updated</p>
                                <div class="row hgap-sm vgap-sm justify-content-center justify-content-sm-start">
                                    <div class="col-auto" data-sr-item="banner">
                                        <a class="btn btn-md btn-brand" href="#demo">Check Us Out</a>
                                    </div>
                                    <div class="col-auto" data-sr-item="banner">
                                        <a class="btn btn-md btn-default" href="https://1.envato.market/nk-portfolio" target="_blank">
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
            <div class="mpl-box-lg text-center" id="demo" data-sr="demos" data-sr-interval="200" data-sr-duration="1200" data-sr-distance="20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <h2 class="display-2" data-sr-item="demos">Pre-Packed <span class="text-brand">4</span> Demos</h2>
                            <p class="lead mb-60" data-sr-item="demos">Kick-start your next project with no effort using one of pre-packed demos</p>
                        </div>
                    </div>
                    <div class="row hgap-lg vgap-lg justify-content-center">
                        <div class="col-12 col-md-6" data-sr-item="demos">
                            <div class="mpl-demo-item">
                                <a class="mpl-demo-item-image" href="dark-index.html" target="_blank">
                                    <img src="assets/images/demo/demo-main.jpg') }}" alt="">
                                </a>
                                <a class="mpl-demo-item-title h3" href="dark-index.html" target="_blank">Main</a>
                                <span class="mpl-demo-item-description">Suitable for fantasy sites.<br>The monsters here are especially beautiful</span>
                                <a class="mpl-demo-item-btn btn btn-brand" href="dark-index.html" target="_blank">See Demo</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6" data-sr-item="demos">
                            <div class="mpl-demo-item">
                                <a class="mpl-demo-item-image" href="shooter-index.html" target="_blank">
                                    <img src="assets/images/demo/demo-shooter.jpg') }}" alt="">
                                </a>
                                <a class="mpl-demo-item-title h3" href="shooter-index.html" target="_blank">Shooter</a>
                                <span class="mpl-demo-item-description">As the title says, it is for shooter sites.<br>Always full ammo guarantee</span>
                                <a class="mpl-demo-item-btn btn btn-brand" href="shooter-index.html" target="_blank">See Demo</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6" data-sr-item="demos">
                            <div class="mpl-demo-item">
                                <a class="mpl-demo-item-image" href="studio-index.html" target="_blank">
                                    <img src="assets/images/demo/demo-studio.jpg') }}" alt="">
                                </a>
                                <a class="mpl-demo-item-title h3" href="studio-index.html" target="_blank">Studio</a>
                                <span class="mpl-demo-item-description">Murderous portfolio for gaming studios.<br>An entry point for your clients</span>
                                <a class="mpl-demo-item-btn btn btn-brand" href="studio-index.html" target="_blank">See Demo</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6" data-sr-item="demos">
                            <div class="mpl-demo-item">
                                <a class="mpl-demo-item-image" href="gamer-index.html" target="_blank">
                                    <img src="assets/images/demo/demo-gamer.jpg') }}" alt="">
                                </a>
                                <a class="mpl-demo-item-title h3" href="gamer-index.html" target="_blank">Gamer</a>
                                <span class="mpl-demo-item-description">Are you a streamer? This is awesome.<br>Let&apos;s play with MonsterPlay and personal website</span>
                                <a class="mpl-demo-item-btn btn btn-brand" href="gamer-index.html" target="_blank">See Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="mpl-box-lg bg-light text-center" data-sr="feature" data-sr-interval="140" data-sr-duration="1200" data-sr-distance="20">
                <div class="container">
                    <h2 class="display-2 mb-60" data-sr-item="feature">Main Features</h2>
                    <div class="row vgap justify-content-center">
                        <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                            <div class="mpl-feature">
                                <div class="mpl-feature-icon"><svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 21V3H12.4811C15.5327 3 17.5981 4.7962 17.5981 7.49049C17.5981 9.36389 16.239 11.1079 14.5217 11.4195V11.5194C16.9435 11.8311 18.5 13.5529 18.5 15.9475C18.5 19.1158 16.2508 21 12.458 21H5.5ZM7.72393 10.7587H11.2822C13.9138 10.7587 15.3471 9.69827 15.3471 7.74993C15.3471 5.96622 14.1365 4.9807 11.9733 4.9807H7.72393V10.7587ZM12.1223 19.0165C14.8034 19.0165 16.212 17.9185 16.212 15.8374C16.212 13.7562 14.7539 12.694 11.9126 12.694H7.72393V19.0182L12.1223 19.0165Z" />
                                    </svg></div>
                                <div class="mpl-feature-title h4">Bootstrap 4</div>
                                <div class="mpl-feature-text">The well-known framework is at the core of our template</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                            <div class="mpl-feature">
                                <div class="mpl-feature-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 21.9979C11.6489 21.9979 11.304 21.9055 11 21.73L4 17.73C3.69626 17.5546 3.44398 17.3025 3.26846 16.9988C3.09294 16.6952 3.00036 16.3507 3 16V7.99999C3.00036 7.64927 3.09294 7.3048 3.26846 7.00116C3.27454 6.99064 3.28071 6.9802 3.28696 6.96981M12 21.9979C12.3511 21.9979 12.696 21.9055 13 21.73L20 17.73C20.3037 17.5546 20.556 17.3025 20.7315 16.9988C20.9071 16.6952 20.9996 16.3507 21 16V7.99999C20.9996 7.64927 20.9071 7.3048 20.7315 7.00116C20.7255 6.99064 20.7193 6.98019 20.713 6.96981M12 21.9979V12.01M12 12.01L3.28696 6.96981M12 12.01L20.713 6.96981M3.28696 6.96981C3.28894 6.96653 3.29092 6.96326 3.29292 6.95999M3.28696 6.96981L3.29292 6.95999M20.713 6.96981C20.7111 6.96653 20.7091 6.96326 20.7071 6.95999M20.713 6.96981L20.7071 6.95999M3.29292 6.95999C3.46707 6.6747 3.7101 6.43737 4 6.26999L11 2.26999C11.304 2.09446 11.6489 2.00204 12 2.00204C12.3511 2.00204 12.696 2.09446 13 2.26999L20 6.26999C20.2899 6.43737 20.5329 6.6747 20.7071 6.95999" />
                                    </svg></div>
                                <div class="mpl-feature-title h4">20+ Components</div>
                                <div class="mpl-feature-text">A lot of components, which will help you quickly build pages</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                            <div class="mpl-feature">
                                <div class="mpl-feature-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" />
                                    </svg></div>
                                <div class="mpl-feature-title h4">Login Pages</div>
                                <div class="mpl-feature-text">Pages with sign in and sign up forms are waiting for your backend code</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                            <div class="mpl-feature">
                                <div class="mpl-feature-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 17H4C3.46957 17 2.96086 16.7893 2.58579 16.4142C2.21071 16.0391 2 15.5304 2 15V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H20C20.5304 3 21.0391 3.21071 21.4142 3.58579C21.7893 3.96086 22 4.46957 22 5V15C22 15.5304 21.7893 16.0391 21.4142 16.4142C21.0391 16.7893 20.5304 17 20 17H19M12 15L17 21H7L12 15Z" />
                                    </svg></div>
                                <div class="mpl-feature-title h4">eSports</div>
                                <div class="mpl-feature-text">Tournaments, Matches, Teams. Everything you need for esports website</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                            <div class="mpl-feature">
                                <div class="mpl-feature-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1H5L7.68 14.39M7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6L7.68 14.39ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM21 21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21C19 20.4477 19.4477 20 20 20C20.5523 20 21 20.4477 21 21Z" />
                                    </svg></div>
                                <div class="mpl-feature-title h4">Shop</div>
                                <div class="mpl-feature-text">Sale your merch or accessories with the MonsterPlay template</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-sr-item="feature">
                            <div class="mpl-feature">
                                <div class="mpl-feature-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13M16 3.13C16.8604 3.3503 17.623 3.8507 18.1676 4.55231C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89317 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88M13 7C13 9.20914 11.2091 11 9 11C6.79086 11 5 9.20914 5 7C5 4.79086 6.79086 3 9 3C11.2091 3 13 4.79086 13 7Z" />
                                    </svg></div>
                                <div class="mpl-feature-title h4">Social Network</div>
                                <div class="mpl-feature-text">Build your gaming social network, or forum for Clan members</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="mpl-box-md" data-sr="blog" data-sr-interval="200" data-sr-duration="1000" data-sr-distance="20">
                <div class="container">
                    <div class="row hgap-lg vgap-lg align-items-center">
                        <div class="col-12 col-lg-5 order-lg-12">
                            <h2 class="display-2" data-sr-item="blog">Blog Pages</h2>
                            <p class="lead" data-sr-item="blog">Write blog posts or news, use the review system for games, image galleries with popups, etc...</p>
                            <a href="blog-grid-sidebar-right.html" class="btn btn-md mt-20" data-sr-item="blog">View Blog</a>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="mpl-demo-blog" data-sr="blog-img" data-sr-delay="300" data-sr-interval="200" data-sr-duration="1000" data-sr-distance="20">
                                <div data-sr-item="blog-img">
                                    <span class="mpl-image mpl-demo-img">
                                        <img src="assets/images/demo/blog-1.jpg') }}" alt="">
                                    </span>
                                </div>
                                <div data-sr-item="blog-img">
                                    <span class="mpl-image mpl-demo-img">
                                        <img src="assets/images/demo/blog-2.jpg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mpl-box-md bg-light" data-sr="shop" data-sr-interval="200" data-sr-duration="1000" data-sr-distance="20">
                <div class="container">
                    <div class="row hgap-lg vgap-lg align-items-center">
                        <div class="col-lg-5">
                            <h2 class="display-2" data-sr-item="shop">E-Commerce</h2>
                            <p class="lead" data-sr-item="shop">Sale your merch or accessories, display it in masonry list, add product photos, manage product reviews, etc...</p>
                            <a href="shop-sidebar-right.html" class="btn btn-md mt-20" data-sr-item="shop">View Store</a>
                        </div>
                        <div class="col-lg-7">
                            <div class="mpl-demo-shop" data-sr="shop-img" data-sr-delay="300" data-sr-interval="200" data-sr-duration="1000" data-sr-distance="20">
                                <div data-sr-item="shop-img">
                                    <span class="mpl-image mpl-demo-img">
                                        <img src="assets/images/demo/shop-1.jpg') }}" alt="">
                                    </span>
                                </div>
                                <div data-sr-item="shop-img">
                                    <span class="mpl-image mpl-demo-img">
                                        <img src="assets/images/demo/shop-2.jpg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mpl-box-md" data-sr="esports" data-sr-interval="200" data-sr-duration="1000" data-sr-distance="20">
                <div class="container text-center">
                    <h2 class="display-2" data-sr-item="esports">eSports</h2>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8" data-sr-item="esports">
                            <p class="lead">Tournaments, Matches, Teams and Players.<br>Everything you need for esports website</p>
                        </div>
                    </div>
                    <a href="esports-teams.html" class="btn btn-md mt-20" data-sr-item="esports">View Teams</a>
                </div>
                <div class="mpl-demo-esports">
                    <div class="container">
                        <div data-sr data-sr-duration="1000" data-sr-delay="300" data-sr-origin="right" data-sr-distance="20">
                            <span class="mpl-image mpl-demo-img">
                                <img src="assets/images/demo/esports-1.jpg') }}" alt="">
                            </span>
                        </div>
                        <div data-sr data-sr-duration="1200">
                            <span class="mpl-image mpl-demo-img">
                                <img src="assets/images/demo/esports-2.jpg') }}" alt="">
                            </span>
                        </div>
                        <div data-sr data-sr-duration="1000" data-sr-delay="500" data-sr-origin="left" data-sr-distance="20">
                            <span class="mpl-image mpl-demo-img">
                                <img src="assets/images/demo/esports-3.jpg') }}" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mpl-box-md bg-light" data-sr="forum" data-sr-interval="200" data-sr-duration="1000" data-sr-distance="20">
                <div class="container">
                    <div class="row hgap-lg vgap-lg align-items-center">
                        <div class="col-lg-5">
                            <h2 class="display-2" data-sr-item="forum">Forum</h2>
                            <p class="lead" data-sr-item="forum">The home with discussions and flame for your lovely community members</p>
                            <a href="forums.html" class="btn btn-md mt-20" data-sr-item="forum">View Forum</a>
                        </div>
                        <div class="col-lg-7">
                            <div class="mpl-demo-forum" data-sr="forum-img" data-sr-delay="300" data-sr-interval="200" data-sr-duration="1000" data-sr-distance="20">
                                <div data-sr-item="forum-img">
                                    <span class="mpl-image mpl-demo-img">
                                        <img src="assets/images/demo/forum-1.jpg') }}" alt="">
                                    </span>
                                </div>
                                <div data-sr-item="forum-img">
                                    <span class="mpl-image mpl-demo-img">
                                        <img src="assets/images/demo/forum-2.jpg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mpl-banner big mpl-banner-parallax" data-sr="purchase" data-sr-interval="200" data-sr-duration="1000" data-sr-distance="20">
                <div class="mpl-image" data-speed="0.8">
                    <img class="jarallax-img" src="assets/images/dark/bg-banner-2.jpg') }}" alt="">
                </div>
                <div class="mpl-banner-content text-center container">
                    <h2 class="display-2" data-sr-item="purchase">Start your Journey with MonsterPlay</h2>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <p class="lead" data-sr-item="purchase"> We are sure that you will enjoy using our template not only in the design part but also in technical terms </p>
                            <a class="btn btn-md btn-brand" href="https://1.envato.market/nk-portfolio" target="_blank" data-sr-item="purchase">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="mpl-footer mpl-footer-parallax mpl-footer-social">
                <div class="mpl-image" data-speed="0.9" data-img-position="50% 0%">
                    <img src="assets/images/dark/bg-footer.jpg') }}" alt="" class="jarallax-img">
                </div>
                <div class="mpl-footer-wrapper">
                    <div class="mpl-footer-container container">
                        <div class="mpl-footer-content">
                            <div class="row vgap" data-sr="footer" data-sr-interval="120" data-sr-duration="1200" data-sr-distance="20">
                                <div class="col-6 col-sm-3" data-sr-item="footer">
                                    <a href="#" class="mpl-social">
                                        <span class="mpl-social-icon">
                                            <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.3922 11.4C15.3922 12.132 14.8585 12.732 14.1824 12.732C13.5182 12.732 12.9726 12.132 12.9726 11.4C12.9726 10.668 13.5063 10.068 14.1824 10.068C14.8585 10.068 15.3922 10.668 15.3922 11.4ZM9.85315 10.068C9.17707 10.068 8.64333 10.668 8.64333 11.4C8.64333 12.132 9.18893 12.732 9.85315 12.732C10.5292 12.732 11.063 12.132 11.063 11.4C11.0748 10.668 10.5292 10.068 9.85315 10.068ZM22.3784 2.472V24C19.3902 21.3284 20.3459 22.2128 16.8749 18.948L17.5035 21.168H4.05312C2.71282 21.168 1.62161 20.064 1.62161 18.696V2.472C1.62161 1.104 2.71282 0 4.05312 0H19.9469C21.2872 0 22.3784 1.104 22.3784 2.472ZM18.998 13.848C18.998 9.984 17.29 6.852 17.29 6.852C15.582 5.556 13.9571 5.592 13.9571 5.592L13.791 5.784C15.8074 6.408 16.7444 7.308 16.7444 7.308C13.9269 5.7457 10.6173 5.74542 7.88422 6.96C7.44536 7.164 7.18442 7.308 7.18442 7.308C7.18442 7.308 8.16889 6.36 10.3039 5.736L10.1853 5.592C10.1853 5.592 8.5603 5.556 6.85231 6.852C6.85231 6.852 5.14433 9.984 5.14433 13.848C5.14433 13.848 6.14065 15.588 8.76194 15.672C8.76194 15.672 9.20079 15.132 9.55662 14.676C8.05028 14.22 7.48095 13.26 7.48095 13.26C7.65543 13.3836 7.94316 13.5437 7.96725 13.56C9.96926 14.6943 12.813 15.0659 15.3685 13.98C15.7836 13.824 16.2462 13.596 16.7325 13.272C16.7325 13.272 16.1395 14.256 14.5857 14.7C14.9415 15.156 15.3685 15.672 15.3685 15.672C17.9898 15.588 18.998 13.848 18.998 13.848V13.848Z" />
                                            </svg>
                                        </span>
                                        <span class="mpl-social-name h5">Subscribe to<br>Discord</span>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-3" data-sr-item="footer">
                                    <a href="#" class="mpl-social">
                                        <span class="mpl-social-icon">
                                            <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.24527 0L0.648651 4.11964V20.9571H6.32433V24H9.51756L12.5304 20.9571H17.1452L23.3514 14.6893V0H2.24527ZM21.2243 13.6125L17.6757 17.1964H12L8.98712 20.2393V17.1964H4.19727V2.14821H21.2243V13.6125V13.6125ZM17.6757 6.26786V12.5304H15.5486V6.26786H17.6757ZM12 6.26786V12.5304H9.87295V6.26786H12Z" />
                                            </svg>
                                        </span>
                                        <span class="mpl-social-name h5">Watch on<br>Twitch</span>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-3" data-sr-item="footer">
                                    <a href="#" class="mpl-social">
                                        <span class="mpl-social-icon">
                                            <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.4985 6.29213C23.2225 5.26881 22.4092 4.46288 21.3766 4.18937C19.505 3.69238 12 3.69238 12 3.69238C12 3.69238 4.49503 3.69238 2.62336 4.18937C1.59077 4.46292 0.777523 5.26881 0.501503 6.29213C0 8.14695 0 12.0169 0 12.0169C0 12.0169 0 15.8868 0.501503 17.7416C0.777523 18.7649 1.59077 19.5373 2.62336 19.8108C4.49503 20.3078 12 20.3078 12 20.3078C12 20.3078 19.505 20.3078 21.3766 19.8108C22.4092 19.5373 23.2225 18.7649 23.4985 17.7416C24 15.8868 24 12.0169 24 12.0169C24 12.0169 24 8.14695 23.4985 6.29213V6.29213ZM9.54544 15.5305V8.50327L15.8181 12.017L9.54544 15.5305V15.5305Z" />
                                            </svg>
                                        </span>
                                        <span class="mpl-social-name h5">Watch on<br>Youtube</span>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-3" data-sr-item="footer">
                                    <a href="#" class="mpl-social">
                                        <span class="mpl-social-icon">
                                            <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.533 7.11175C21.5482 7.32494 21.5482 7.53817 21.5482 7.75136C21.5482 14.2539 16.599 21.7463 7.5533 21.7463C4.76648 21.7463 2.17767 20.9391 0 19.5382C0.395953 19.5838 0.776625 19.5991 1.18781 19.5991C3.48727 19.5991 5.60405 18.8224 7.29441 17.4976C5.13197 17.4519 3.31978 16.0356 2.69541 14.0864C3 14.132 3.30455 14.1625 3.62437 14.1625C4.06598 14.1625 4.50764 14.1016 4.91878 13.995C2.66498 13.5381 0.974578 11.5585 0.974578 9.16759V9.1067C1.62937 9.47219 2.39086 9.70061 3.19791 9.73103C1.87303 8.84777 1.00505 7.34017 1.00505 5.63458C1.00505 4.72089 1.24866 3.88333 1.67508 3.15236C4.09641 6.13712 7.73602 8.08633 11.8172 8.29956C11.7411 7.93408 11.6954 7.55341 11.6954 7.17269C11.6954 4.462 13.8883 2.25391 16.6141 2.25391C18.0304 2.25391 19.3095 2.84781 20.208 3.8072C21.3197 3.59402 22.3857 3.18283 23.3299 2.61939C22.9643 3.76155 22.1877 4.72094 21.1674 5.33003C22.1573 5.22348 23.1167 4.94931 23.9999 4.56864C23.33 5.54322 22.4924 6.4112 21.533 7.11175V7.11175Z" />
                                            </svg>
                                        </span>
                                        <span class="mpl-social-name h5">Follow on<br>Twitter</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="mpl-footer-copyright">
                <div class="container">
                    <p>2020 &copy; NGA. All rights reserved | &copy; Wargaming.net. All rights reserved<br>
                        This is application is a third-party tool under Wargaming Developers Partner Program.</p>
                </div>
            </div>
            <!-- /Footer -->
        </div>
    </div>
    <!-- Popup Search -->
    <div class="container mpl-fancybox-search mpl-fancybox-content" id="popup-search">
        <div class="mpl-fancybox-search-content">
            <input class="form-control mpl-fancybox-search-input" type="text" placeholder="Type to Search">
            <button class="mpl-fancybox-search-btn" type="button">
                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" />
                </svg>
            </button>
            <div class="mpl-fancybox-search-line"></div>
        </div>
    </div>
    <!-- Popup Sign In -->
    <div class="container mpl-fancybox-sign mpl-fancybox-content" id="popup-signin">
        <div class="mpl-fancybox-sign-content">
            <h2 class="h1">Sign In</h2>
            <form action="#">
                <div class="row hgap-xs vgap-sm align-items-center">
                    <div class="col-12">
                        <input class="form-control" type="text" id="signin_popup_login" name="signin_popup_login" placeholder="Login"><span class="form-control-bg"></span>
                    </div>
                    <div class="col-12">
                        <input class="form-control" type="password" id="signin_popup_password" name="signin_popup_password" placeholder="Password"><span class="form-control-bg"></span>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="signin_popup_rememberme" name="signin_popup_rememberme"><label class="custom-control-label" for="signin_popup_rememberme">Remember Me</label></div>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="small">Lost Password</a>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-md btn-block">Sign In</button>
                    </div>
                    <div class="col-12"> or </div>
                    <div class="col">
                        <a href="#" class="btn btn-md btn-block btn-facebook">
                            <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.625 12C23.625 5.57812 18.4219 0.375 12 0.375C5.57812 0.375 0.375 5.57812 0.375 12C0.375 17.8022 4.62609 22.6116 10.1836 23.4844V15.3605H7.23047V12H10.1836V9.43875C10.1836 6.52547 11.918 4.91625 14.5744 4.91625C15.8466 4.91625 17.1769 5.14313 17.1769 5.14313V8.0025H15.7106C14.2669 8.0025 13.8164 8.89875 13.8164 9.81797V12H17.0405L16.5248 15.3605H13.8164V23.4844C19.3739 22.6116 23.625 17.8022 23.625 12Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-md btn-block btn-twitter">
                            <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.533 7.11166C21.5482 7.32485 21.5482 7.53808 21.5482 7.75127C21.5482 14.2538 16.599 21.7462 7.5533 21.7462C4.76648 21.7462 2.17767 20.939 0 19.5381C0.395953 19.5837 0.776625 19.599 1.18781 19.599C3.48727 19.599 5.60405 18.8223 7.29441 17.4975C5.13197 17.4518 3.31978 16.0355 2.69541 14.0863C3 14.1319 3.30455 14.1624 3.62437 14.1624C4.06598 14.1624 4.50764 14.1015 4.91878 13.9949C2.66498 13.538 0.974578 11.5584 0.974578 9.1675V9.10661C1.62937 9.4721 2.39086 9.70052 3.19791 9.73094C1.87303 8.84767 1.00505 7.34008 1.00505 5.63449C1.00505 4.7208 1.24866 3.88324 1.67508 3.15227C4.09641 6.13703 7.73602 8.08624 11.8172 8.29947C11.7411 7.93399 11.6954 7.55331 11.6954 7.1726C11.6954 4.46191 13.8883 2.25381 16.6141 2.25381C18.0304 2.25381 19.3095 2.84772 20.208 3.80711C21.3197 3.59392 22.3857 3.18274 23.3299 2.6193C22.9643 3.76146 22.1877 4.72085 21.1674 5.32994C22.1573 5.22339 23.1167 4.94922 23.9999 4.56855C23.33 5.54313 22.4924 6.41111 21.533 7.11166V7.11166Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-md btn-block btn-google-plus">
                            <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23 12.2719C23 18.9047 18.433 23.625 11.6885 23.625C5.22213 23.625 0 18.4312 0 12C0 5.56875 5.22213 0.375 11.6885 0.375C14.8369 0.375 17.4857 1.52344 19.5264 3.41719L16.3451 6.45938C12.1834 2.46563 4.44447 5.46563 4.44447 12C4.44447 16.0547 7.70123 19.3406 11.6885 19.3406C16.3168 19.3406 18.0512 16.0406 18.3246 14.3297H11.6885V10.3312H22.8162C22.9246 10.9266 23 11.4984 23 12.2719Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-12"> Are you new? <a href="sign-up.html">Sign Up</a>
                    </div>
                </div>
            </form>
        </div>
        <button type="button" class="mpl-fancybox-close" data-fancybox-close>
            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18M6 6L18 18" />
            </svg>
        </button>
    </div>
    <!-- Popup Cart -->
    <div class="container mpl-fancybox-cart mpl-fancybox-content" id="popup-cart">
        <div class="mpl-fancybox-cart-content">
            <h2 class="h1 text-center">Cart</h2>
            <div class="row justify-content-between vgap">
                <div class="col-12">
                    <table class="table mpl-table-shop mpl-table-shop-sm mpl-table-responsive mb-0">
                        <tbody>
                            <tr class="mpl-table-product mpl-table-product-sm">
                                <td class="mpl-table-image">
                                    <a href="shop-product.html" class="mpl-table-product-image">
                                        <span class="mpl-image">
                                            <img src="assets/images/dark/product-260x200.jpg') }}" alt="">
                                        </span>
                                    </a>
                                </td>
                                <td class="mpl-table-name" data-title="Product">
                                    <a href="shop-product.html" class="mpl-table-product-title h5">Gamepad MPL</a>
                                    <span class="mpl-price"> $120.00 </span>
                                </td>
                                <td class="mpl-table-remove">
                                    <a href="#" class="mpl-table-product-remove">
                                        <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6L6 18M6 6L18 18" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="mpl-table-product mpl-table-product-sm">
                                <td class="mpl-table-image">
                                    <a href="shop-product.html" class="mpl-table-product-image">
                                        <span class="mpl-image">
                                            <img src="assets/images/dark/product-2-260x200.jpg') }}" alt="">
                                        </span>
                                    </a>
                                </td>
                                <td class="mpl-table-name" data-title="Product">
                                    <a href="shop-product.html" class="mpl-table-product-title h5">Headphones MPL</a>
                                    <span class="mpl-price"> $84.99 </span>
                                </td>
                                <td class="mpl-table-remove">
                                    <a href="#" class="mpl-table-product-remove">
                                        <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6L6 18M6 6L18 18" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-between h5 mb-0">
                        <span>Subtotal:</span>
                        <span>$70.00</span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row hgap-xs vgap-xs">
                        <div class="col">
                            <a href="cart.html" class="btn btn-block btn-default">View cart</a>
                        </div>
                        <div class="col">
                            <a href="checkout.html" class="btn btn-block btn-default">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="mpl-fancybox-close" data-fancybox-close>
            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18M6 6L18 18" />
            </svg>
        </button>
    </div>
    <!-- START: Scripts -->
    <!-- Object Fit Polyfill -->
    <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>
    <!-- Popper -->
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <!-- ScrollReveal -->
    <script src="assets/vendor/scrollreveal/dist/scrollreveal.min.js"></script>
    <!-- Animejs -->
    <script src="assets/vendor/animejs/lib/anime.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Jarallax -->
    <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
    <!-- Swiper -->
    <script src="assets/vendor/swiper/js/swiper.min.js"></script>
    <!-- Fancybox -->
    <script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
    <!-- jQuery Countdown -->
    <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
    <!-- Moment.js -->
    <script src="assets/vendor/moment/min/moment.min.js"></script>
    <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
    <!-- Revolution Slider -->
    <script src="assets/vendor/slider-revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/vendor/slider-revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- ImagesLoaded -->
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <!-- Ion Range Slider -->
    <script src="assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap TouchSpin -->
    <script src="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Bootstrap Validator -->
    <script src="assets/vendor/bootstrap-validator/dist/validator.min.js"></script>
    <script src="https://kit.fontawesome.com/75b4fe23b7.js" crossorigin="anonymous"></script>
    <!-- MonsterPlay -->
    <script src="assets/js/monsterplay.min.js"></script>
    <script src="assets/js/monsterplay-init.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- END: Scripts -->
</body>

</html>
