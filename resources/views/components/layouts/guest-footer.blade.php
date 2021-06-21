<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light border-bottom-0 border-top">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            {{ __('template/guest.footer') }}
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; 2021.
                            <a href="{{ route('coming') }}">E-working</a> {{ __('template/guest.created by') }}
                            <a href="#" target="_blank">TheCube</a>
						</span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
                <a href="{{ route('coming') }}" class="navbar-nav-link" target="_blank">
                    <i class="icon-lifebuoy mr-2"></i> {{ __('template/guest.support') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('coming') }}" class="navbar-nav-link" target="_blank">
                    <i class="icon-file-text2 mr-2"></i> {{ __('template/guest.docs') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('coming') }}" class="navbar-nav-link font-weight-semibold">
                    <span class="text-pink"><i class="icon-cart2 mr-2"></i> {{ __('template/guest.purchase') }}</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /footer -->
