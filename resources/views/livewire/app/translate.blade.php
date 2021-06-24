<div>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                @if ($lang == 'en')
                    <img src="{{ asset('limitless/global/images/lang/gb.png') }}"
                         title="English"
                         class="img-flag mr-2"
                         alt="English">
                    English
                    @elseif ($lang == 'fr')
                    <img src="{{ asset('limitless/global/images/lang/fr.png') }}"
                         title="Français"
                         class="img-flag mr-2"
                         alt="Français">
                    Français
                @endif
            </a>
            <div class="dropdown-menu">
                <a href="#"
                   wire:click.prevent="change('en','{{ $uri }}')"
                   wire:key="1"
                   class="dropdown-item {{ ($lang === 'en') ? 'active' : '' }}">
                    <img src="{{ asset('limitless/global/images/lang/gb.png') }}"
                         title="English"
                         class="img-flag"
                         alt="English">
                    English
                </a>
                <a href="#"
                   wire:click.prevent="change('fr','{{ $uri }}')"
                   wire:key="2"
                   class="dropdown-item {{ ($lang === 'fr') ? 'active' : '' }}">
                    <img src="{{ asset('limitless/global/images/lang/fr.png') }}"
                         title="Français"
                         class="img-flag"
                         alt="Français"> Français
                </a>
            </div>
        </li>
    </ul>
</div>
