@include('partials.new-header')

@yield('styles')

</head>

<body class="boxed-view">

<section>
    <div class="container">
        <!-- left side start-->
           @include('partials.left-sidebar')
        <!-- left side end-->

        <!-- main content start-->
        <div class="main-content" >

        @include('partials.header-section')

            <!-- page heading start-->
            <div class="page-heading">
                {{--Page Tittle goes here--}}
            </div>
            <!-- page heading end-->

            <!--body wrapper start-->
            <div class="wrapper">
                {{--Body contents goes here--}}
                @yield('content')
            </div>
            <!--body wrapper end-->

            <!--footer section start-->
            <footer class="">
                {{--Footer contents goes here--}}
            </footer>
            <!--footer section end-->


        </div>
        <!-- main content end-->
    </div>
</section>
<script src="{{ asset('js/common.min.js') }}"></script>

<!--common scripts for all pages-->
<script src="{{ asset('js/all-pages-scripts.min.js') }}"></script>

@yield('scripts')
</body>
</html>

