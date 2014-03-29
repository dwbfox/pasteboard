<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
<link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/syntaxhighlighter/styles/shCore.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/syntaxhighlighter/styles/shCoreRDark.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

    <script src="{{ URL::asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('layouts.toolbar')
    <div class="content col-sm-9">
    @yield('content')
    </div>
    <div class="col-sm-3">
    @include('layouts.sidebar')
    </div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/vendor/highlight.pack.js') }}"></script>
<script src="{{ URL::asset('js/plugins.js') }}"></script>

<!-- ShareThis -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "dcbb5314-0882-462c-82bf-972f3db7244c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>


<!-- Syntax Highlighter -->
<link rel="stylesheet" href="http://yandex.st/highlightjs/8.0/styles/default.min.css">
<script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>
