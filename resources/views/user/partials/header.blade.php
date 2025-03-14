<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ asset('public/img/logo.png') }}"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item @if($page == 'index') active @endif"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item @if($page == 'about') active @endif"><a class="nav-link" href="{{ url('about-us') }}">About</a></li>
                        <li class="nav-item @if($page == 'services') active @endif"><a class="nav-link" href="{{ url('services') }}">Services</a></li>
                        <li class="nav-item @if($page == 'portfolio') active @endif"><a class="nav-link" href="{{ url('portfolio') }}">Portfolio</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                <li class="nav-item"><a class="nav-link" href="portfolio-details.html">Portfolio
                                        Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item @if($page == 'contact') active @endif"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>