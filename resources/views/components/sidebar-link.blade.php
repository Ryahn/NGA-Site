<li class="menu-item" aria-haspopup="true">
    <a href="{{ $route }}" class="menu-link">
    {{-- {{ dd($attributes) }} --}}
        <span {{ $attributes->merge(['class' => "menu-icon"])->filter(fn ($value, $key) => $key != 'route') }}></span>
        <span class="menu-text">{{ $slot }}</span>
    </a>
</li>
