<li class="menu-item  menu-item-submenu menu-item-open" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span {{ $attributes->merge(['class' => 'menu-icon'])->filter(fn ($value, $key) => $key != 'name') }}></span>
        <span class="menu-text">{{ $name }}</span><i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu"><i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                <span class="menu-link">
                    <span class="menu-text">{{ $name }}</span>
                </span>
            </li>
           {{ $slot }}
        </ul>
    </div>
</li>
