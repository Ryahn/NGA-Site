<!--begin::Breadcrumb-->
<!--begin::Page Title-->
<h5 class="text-dark font-weight-bold my-1 mr-5">
    {{ $pageData['title'] }} </h5>
<!--end::Page Title-->
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
    <li class="breadcrumb-item">
        <a href="{{route('home')}}" class="text-muted">
            Dashboard </a>
    </li>
    @for($i = 2; $i <= count(Request::segments()); $i++)
    <li class="breadcrumb-item">
             <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}" class="text-muted">
                {{ucfirst(Request::segment($i))}}
             </a>
          </li>
       @endfor
</ul>
<!--end::Breadcrumb-->

