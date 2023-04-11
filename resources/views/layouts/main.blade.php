<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
        @include('layouts.navbar')

        @include('layouts.sidebar')

        @yield('content')

        @include('layouts.footer')

    </div>
  </div>

  @yield('script')
  @include('layouts.script')
</body>


</html>
