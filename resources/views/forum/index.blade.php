@extends('layouts.homeapp')
@section('content')
    <section class="mpl-banner mpl-banner-top mpl-banner-parallax mpl-banner-small">
        <div class="mpl-image" data-speed="0.8">
            <img src="assets/images/dark/bg-banner-1.jpg" alt="" class="jarallax-img">
        </div>
        <div class="mpl-banner-content mpl-box-lg">
            <div class="container">
                <h1 class="display-1 mb-0">Forums</h1>
            </div>
        </div>
    </section>
    <div class="mpl-box-md">
        <div class="container">
            <div class="row hgap-lg vgap-lg">
                <div class="col-lg mpl-content">
                    <form action="search.html" class="mb-60">
                        <div class="row align-items-center hgap-xs vgap-xs">
                            <div class="col-12 col-md-auto mr-auto">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Forums</li>
                                    </ol>
                                </nav>
                                <div class="mb-40 d-block d-md-none"></div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-md">Create Topic</button>
                            </div>
                        </div>
                    </form>
                    <!-- Forums List -->
                    <ul class="mpl-forum" data-sr="forum" data-sr-duration="1000" data-sr-distance="20">
                        <li class="mpl-forum-header" data-sr-item="forum">
                            <ul>
                                <li class="cell-icon"></li>
                                <li class="cell-info">Forum</li>
                                <li class="cell-topic-count">Topics</li>
                                <li class="cell-reply-count">Posts</li>
                                <li class="cell-freshness">Freshness</li>
                            </ul>
                        </li>
                        <li class="mpl-forum-body">
                            <ul data-sr-item="forum">
                                <li class="cell-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                    </svg></li>
                                <li class="cell-info">
                                    <a href="forums-topics.html" class="title h4">Games</a>
                                    <div class="description">Games for different consoles</div>
                                    <ul class="forums-list">
                                        <li><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                            </svg> <a href="#">Xbox</a></li>
                                        <li><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                            </svg> <a href="#">PlayStation</a></li>
                                        <li><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                            </svg> <a href="#">PC</a></li>
                                    </ul>
                                </li>
                                <li class="cell-topic-count">7</li>
                                <li class="cell-reply-count">21</li>
                                <li class="cell-freshness">
                                    <a href="#">1 year, 4 months ago</a>
                                    <span>Last comment: <a href="#">John Doe</a></span>
                                </li>
                            </ul>
                            <ul data-sr-item="forum">
                                <li class="cell-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                    </svg></li>
                                <li class="cell-info">
                                    <a href="forums-topics.html" class="title h4">Clothing</a>
                                    <div class="description">Clothing (Category)</div>
                                    <ul class="forums-list">
                                        <li><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                            </svg> <a href="#">Men’s</a></li>
                                        <li><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                            </svg> <a href="#">Women’s</a></li>
                                    </ul>
                                </li>
                                <li class="cell-topic-count">0</li>
                                <li class="cell-reply-count">0</li>
                                <li class="cell-freshness"> No Topics </li>
                            </ul>
                            <ul data-sr-item="forum">
                                <li class="cell-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                    </svg></li>
                                <li class="cell-info">
                                    <a href="forums-topics.html" class="title h4">Mobile Apps</a>
                                    <div class="description">Mobile Apps Forum</div>
                                </li>
                                <li class="cell-topic-count">0</li>
                                <li class="cell-reply-count">0</li>
                                <li class="cell-freshness"> No Topics </li>
                            </ul>
                            <ul data-sr-item="forum">
                                <li class="cell-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                    </svg></li>
                                <li class="cell-info">
                                    <a href="forums-topics.html" class="title h4">Mobile Games</a>
                                    <div class="description">Mobile games forum</div>
                                </li>
                                <li class="cell-topic-count">1</li>
                                <li class="cell-reply-count">1</li>
                                <li class="cell-freshness">
                                    <a href="#">6 months, 1 week ago</a>
                                    <span>Last comment: <a href="#">John Doe</a></span>
                                </li>
                            </ul>
                            <ul data-sr-item="forum">
                                <li class="cell-icon"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z" />
                                    </svg></li>
                                <li class="cell-info">
                                    <a href="forums-topics.html" class="title h4">Devide Market</a>
                                    <div class="description">Buy and sell old devides</div>
                                </li>
                                <li class="cell-topic-count">0</li>
                                <li class="cell-reply-count">0</li>
                                <li class="cell-freshness"> No Topics </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-auto-lg mpl-sidebar" data-sr=widget data-sr-duration=1200 data-sr-distance=20>
                    <div class="mpl-widget mpl-widget-categories">
                        <h4 class="mpl-widget-title" data-sr-item="widget">Categories</h4>
                        <ul class="list-unstyled" data-sr-item="widget">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Audio</a></li>
                            <li><a href="#">Photo</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">Controllers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
