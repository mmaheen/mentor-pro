    <header class="main_menu {{Route::currentRouteName() == 'index' ? 'home_menu' : 'single_page_menu'}} ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <h1 class="{{ Route:: currentRouteName() !='index' ? 'text-white' : '' }}">
                                Mentor Pro
                            </h1>
                            </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item {{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="nav-item {{ Route::currentRouteName() == 'courses' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('courses') }}">Courses</a>
                                </li>
                                <li class="nav-item {{ Route::currentRouteName() == 'blogs' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Authentication
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                    </div>
                                </li>
                                <li class="nav-item {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">Get a Quote</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>