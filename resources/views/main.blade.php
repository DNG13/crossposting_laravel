<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
        @yield('stylesheet')
    </head>
    <body>
        @include('partials._nav')
        @include('partials._messages')
        <div class="container">
            @yield('content')
        </div>
        @include('partials._footer')
        @include('partials._js')
        @yield('script')
    </body>
</html>