<!doctype html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body>
        {{-- navbar --}}
        @include('partials.navbar')
        {{-- navbar end --}}

        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        @include('partials.script')
    </body>
</html>