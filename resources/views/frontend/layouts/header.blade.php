<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Mentor Pro</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'index' ? 'active':''}}">Home</a>
            <a href="{{ route('courses') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'courses' ? 'active':''}}">Courses</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register' ? 'active':''}}" data-bs-toggle="dropdown">Authentication</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                    <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{Route::currentRouteName() == 'contact' ? 'active':''}}">Contact</a>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>