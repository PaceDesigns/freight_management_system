<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Blank Page</title>

  <link href="{{ asset('css/all-styles.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/gritter.min.css') }}" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/responsive-hack.min.js') }}"></script>
<![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    @include('partials.sidebar')
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        @include('partials.header')
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            {{--Page Tittle goes here--}}
            @yield('title')
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            {{--Body contents goes here--}}
            @yield('content')
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="sticky-footer">
            2014 &copy; AdminEx by ThemeBucket
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ asset('js/common.min.js') }}"></script>

<script src="{{ asset('js/gritter.min.js') }}"></script>

<!--common scripts for all pages-->
<script src="{{ asset('js/all-pages-scripts.min.js') }}"></script>

@yield('script')

</body>
</html>
