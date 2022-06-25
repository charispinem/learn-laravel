<!doctype html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body>
        {{-- navbar --}}
        @include('partials.navbar')
        {{-- navbar end --}}

        {{-- container content --}}
        <div class="container mt-4">
                    @yield('content')
        </div>
        {{-- container content end --}}

        <!-- Optional JavaScript -->
        @include('partials.script')
    </body>
</html>