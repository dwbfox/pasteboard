<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    @if (isset($page_title))
        <title>{{{ $page_title }}} - {{ Config::get('app.site_name') }}</title>
    @else
        <title>{{ Config::get('app.site_name')  }}</title>
    @endif
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/highlightjs/styles/idea.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/syntaxhighlighter/styles/shCore.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/tagmanager/tagmanager.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <script src="{{ URL::asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
</head>
<body>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="page-wrapper">
    @include('layouts.toolbar')
    <div class="content-wrapper">
        <div class="content col-lg-9 col-md-9 col-sm-12">
        @yield('content')
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
        @include('layouts.sidebar')
        </div>
    </div>
    <footer>
    <p>{{ Config::get('app.site_name') }} - Text hosting as a service </p>
    <p>Copyright &copy; {{ date('Y') }}. All Rights Reserved.</p>
    </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('vendor/highlightjs/highlight.pack.js') }}"></script>
<script src="{{ URL::asset('vendor/sticky/jquery.sticky.js') }}"></script>
<script src="{{ URL::asset('js/plugins.js') }}"></script>

<!-- ShareThis -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "dcbb5314-0882-462c-82bf-972f3db7244c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<!-- Tag -->
<script src="{{ URL::asset('vendor/tagmanager/tagmanager.js') }}"></script>

<!-- Syntax Highlighter -->
<script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>
