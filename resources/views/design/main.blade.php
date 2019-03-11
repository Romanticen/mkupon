<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Mkupon') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <!-- styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/docs.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="/css/flexslider.css" rel="stylesheet">
    <link href="/css/refineslide.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">
    <link href="/color/default.css" rel="stylesheet">

</head>

<body>

@include('inc.navbar')

<div style="padding-top: 150px;">
    @yield('content')
</div>


<!-- Scripts -->
<script src="/js/jquery.js"></script>
<script src="/js/modernizr.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/google-code-prettify/prettify.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/portfolio/jquery.quicksand.js"></script>
<script src="/js/portfolio/setting.js"></script>
<script src="/js/hover/jquery-hover-effect.js"></script>
<script src="/js/jquery.flexslider.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/cbpAnimatedHeader.min.js"></script>
<script src="/js/jquery.refineslide.js"></script>
<script src="/js/jquery.ui.totop.js"></script>

<!-- Template Custom Javascript File -->
<script src="/js/custom.js"></script>


</body>
</html>
