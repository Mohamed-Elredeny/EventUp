<header id="header-wrap">

    <nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <div class="theme-header clearfix">

                {{-- <a href="index.html" class="navbar-brand"><img src="../assets/site/img/logo.png" alt=""></a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/allHalls">
                                Halls
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/eventSchedules">
                                Events Schedules
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/allRests">
                                Rests Places
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/allOrganizers">
                                Organizers
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/contactUs">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aboutUs">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Sign In
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/signIn">User</a></li>
                                <li><a class="dropdown-item" href="/signInOrganizer">Organizer</a></li>
                                <li><a class="dropdown-item" href="/signInAdmin">Admin</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                sign Up
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/signUp">user</a></li>
                                <li><a class="dropdown-item" href="/signUpOrganizer">Organizer</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                My Name
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                <li><a class="dropdown-item" href="/myRequest">My Requests</a></li>
                                <li><a class="dropdown-item" href="/favorateHalls">My Favorate Halls</a></li>
                                <li><a class="dropdown-item" href="/favorateResets">My Favorate Resets</a></li>
                                <li><a class="dropdown-item" href="/followingOrganizer">My Following Organizer</a></li>
                                <li><a class="dropdown-item" href="/updateProfile">Update My Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu" data-logo="../assets/site/img/logo.png"></div>
    </nav>
    
</header>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-inner text-center">
                    <h1 class="page-title">
                        @yield('title')
                    </h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>@yield('title')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>