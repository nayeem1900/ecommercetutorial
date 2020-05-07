<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'ecommerce')</title>
  @include('layouts.partial.style')
</head>
<body>
<div class="wrapper ">
   {{-- Navigation--}}

@include('layouts.partial.nav')
   <!--- END NAV BAR-->

    <!--- Start Sidebar+ Content-->

@yield('content')
    <!--- End Sidebar+ Content-->

       @include('layouts.partial.footer')

</div>




@include('layouts.partial.script')

</body>
</html>
