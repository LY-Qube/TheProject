<div>
    <!-- User menu -->
    <div class="sidebar-section sidebar-user my-1">
        <div class="sidebar-section-body">
            <div class="media">
                <a href="#" class="mr-3">
                    <img src="{{ asset($user->profile_image) }}"
                         class="rounded-circle"
                         title="{{ $user->full_name }}"
                         alt="{{ $user->full_name }}">
                </a>

                <div class="media-body">
                    <div class="font-weight-semibold">{{ $user->full_name }}</div>
                    <div class="font-size-sm line-height-sm opacity-50">
                        {{  $user->job_position }}
                    </div>
                </div>

                <div class="ml-3 align-self-center">
                    <button type="button"
                            class="btn btn-outline-light-100 text-white border-transparent btn-icon
                                rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="icon-transmission"></i>
                    </button>

                    <button type="button"
                            class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill
                                btn-sm sidebar-mobile-main-toggle d-lg-none">
                        <i class="icon-cross2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="sidebar-section">
        <ul class="nav nav-sidebar" data-nav-type="accordion">
            <!-- Main -->
            <li class="nav-item-header">
                <div class="text-uppercase font-size-xs line-height-xs">{{ __('template/auth.main') }}</div>
                <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ ($active === 'dashboard') ? 'active' : '' }} ">
                    <i class="icon-home4"></i>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            @can('viewAny',\App\Models\AccessKey::class)
                <li class="nav-item">
                    <a href="{{ route('access-key') }}"
                       class="nav-link {{ ($active === 'access-key') ? 'active' : '' }} ">
                        <i class="icon-key"></i>
                        <span>
                        {{ __('access-key/access-key.Access Keys') }}
                    </span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>
    <!-- /main navigation -->
</div>
