<ol class="breadcrumb mb-0">
    <li class="breadcrumb-item">
        <i class="fa fa-home"></i>
        <a href="{{ route('dashboard') }}">HOME</a>
    </li>

    @for ($i = 2; $i <= count(Request::segments()); $i++)
        <li class="breadcrumb-item">
            <a href="{{ URL::to(implode('/', array_slice(Request::segments(), 0, $i, true))) }}">
                {{ strtoupper(Request::segment($i)) }}
            </a>
        </li>
    @endfor
</ul>
{{-- <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Veltrix</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Extra Pages</a></li>
                                        <li class="breadcrumb-item active">Blank</li>
                                    </ol> --}}