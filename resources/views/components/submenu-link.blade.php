@php
    $route = explode('|', $routes);
    $lnames = explode(',', $route[1]);
    $links = explode(',', $route[0]);
    if (count($links) != count($lnames)) throw new Exception("Links and Names must be the same length");
    $store = [];
    $i = 0;
    foreach ($links as $link) {
        $store[] = [
            'url' => $link,
            'name' => $lnames[$i]
        ];
        $i++;
    }

    $current = Route::currentRouteName();

    $users = [
        'users.index',
        'users.deletedUsers'
    ];
@endphp

<li class="menu-item menu-item-submenu {{ (in_array($current, $users)) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <i class="menu-bullet menu-bullet-line"><span></span></i>
        <span class="menu-text">{{ $name }}</span>
        <span class="menu-label">
            {{ $slot }}
        </span><i class="menu-arrow"></i></a>
    <div class="menu-submenu"><i class="menu-arrow"></i>
        <ul class="menu-subnav">
            @foreach($store as $url)
            <li class="menu-item {{ ($current == $url['url']) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route($url['url']) }}" class="menu-link">
                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                    <span class="menu-text">{{ $url['name'] }}</span>
                </a>
            </li>
            @endforeach
            {{-- <li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/list-datatable.html"
                    class="menu-link "><i class="menu-bullet menu-bullet-dot"></i><span class="menu-text">List -
                        Datatable</span></a></li>
            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/list-columns-1.html"
                    class="menu-link "><i class="menu-bullet menu-bullet-dot"></i><span class="menu-text">List - Columns
                        1</span></a></li>
            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/list-columns-2.html"
                    class="menu-link "><i class="menu-bullet menu-bullet-dot"></i><span class="menu-text">List - Columns
                        2</span></a></li>
            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/add-user.html" class="menu-link "><i
                        class="menu-bullet menu-bullet-dot"></i><span class="menu-text">Add User</span></a></li>
            <li class="menu-item " aria-haspopup="true"><a href="custom/apps/user/edit-user.html" class="menu-link "><i
                        class="menu-bullet menu-bullet-dot"></i><span class="menu-text">Edit User</span></a></li> --}}
        </ul>
    </div>
</li>
