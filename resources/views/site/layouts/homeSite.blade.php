<!DOCTYPE html>
<html lang="en">
    <head>
       @include('site.includes.head')
    </head>
    <body>

        {{-- @include('site.includes.header') --}}

        @yield('content')

        @include('site.includes.footer')

        <a href="#" class="back-to-top">
            <i class="lni-chevron-up"></i>
        </a>

        <div id="preloader">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div>
            
        @include('site.includes.script')

    </body>
</html>