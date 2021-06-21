<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-dark navbar-static">
    <div class="navbar-brand ml-2 ml-lg-0" style="padding: 0;">
        <a href="{{ route('welcome') }}"
           class="d-inline-block">
            <img src="{{ asset('images/logo.webp') }}" width="50px" height="50px"
                 style="min-height: 50px !important;"
                 title="Logo" alt="Logo">
        </a>
    </div>
    <div class="d-flex justify-content-end align-items-center ml-auto">
        <ul class="navbar-nav flex-row">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-lifebuoy"></i>
                    <span class="d-none d-lg-inline-block ml-2">Support</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('register') }}" class="navbar-nav-link">
                    <i class="icon-user-plus"></i>
                    <span class="d-none d-lg-inline-block ml-2">Sign Up</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('login') }}" class="navbar-nav-link">
                    <i class="icon-user-lock"></i>
                    <span class="d-none d-lg-inline-block ml-2">Sign In</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
