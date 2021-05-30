<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.head')

<body>

    <!--page start-->
    <div class="page">
        @include('layouts.partials.navbar')

        @yield('content')

        @include('layouts.partials.footer')

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->
    @include('layouts.partials.scripts')

</body>

</html>