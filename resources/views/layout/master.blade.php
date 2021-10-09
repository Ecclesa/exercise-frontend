@include('layout.header')

<div class="container text-left mt-3 p-3 bg-white">
    @yield('content1')
</div>

<div class="container text-left mt-0 p-4 bg-white">
    @yield('content')
</div>

@include('layout.footer')
