  <nav class="mpl-navbar-top mpl-navbar">
        <div class="mpl-navbar-mobile-overlay"></div>
        <div class="container mpl-navbar-container">
            <a href="#" class="mpl-navbar-toggle"></a>
            <div class="mpl-navbar-brand">
                <a href="/">
                    <img src="{{ asset('assets/images/logos/nga-emblem.png') }}" alt="">
                </a>
            </div>
            <div class="mpl-navbar-content">
                <ul class="mpl-navbar-nav">
                    <li class="mpl-dropdown">
                        <a href="/" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> Home </span>
                        </a>

                    </li>
                    <li class="mpl-dropdown">
                        <a href="#" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> Matches </span>
                        </a>

                    </li>
                    {{-- <li class="mpl-dropdown">
                        <a href="#" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> About </span>
                        </a>
                        <div class="mpl-dropdown-menu">
                                <ul class="mpl-navbar-nav">
                                    <li>
                                        <a href="u{{ route('about-us') }}l" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Community/Us </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about-leadership') }}" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Leadership
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </li> --}}
                    <li class="mpl-dropdown">
                        <a href="{{ route('apply') }}" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> Join Us </span>
                        </a>
                    </li>
                    <li class="mpl-dropdown">
                        <a href="{{ route('forum') }}" class="mpl-nav-link" role="button">
                            <span class="mpl-nav-link-name"> Forum </span>
                        </a>
                    </li>
                </ul>
                {{-- @if(settings()->get('live'))
                <ul class="mpl-navbar-nav mpl-navbar-right">
                    @guest
                        <li class="mpl-dropdown">
                            <a href="{{ route('login') }}" class="mpl-nav-link" role="button">
                                <span class="mpl-nav-link-name"> Login</span>
                                </span>
                            </a>
                        </li>
                    @else
                        <li class="mpl-dropdown">
                            <a href="user-activity.html" class="mpl-nav-link" role="button">
                                <span class="mpl-nav-link-name"> Ryahn</span>
                                </span>
                            </a>
                            <div class="mpl-dropdown-menu">
                                <ul class="mpl-navbar-nav">
                                    <li>
                                        <a href="user-activity.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Dashbaord </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Applications <span
                                                    class="badge badge-brand">8</span></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-messages.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name"> Admin
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" class="mpl-nav-link"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span class="mpl-nav-link-name"> Log Out </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endguest
                </ul>
                @endif --}}
            </div>
        </div>
    </nav>