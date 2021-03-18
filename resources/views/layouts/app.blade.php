<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>{{ __('Unitec') }}</title>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images') }}/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('images') }}/logo2.jpg">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('guest_assets') }}/css/main.css" />


</head>

<body class="is-preload">

@yield('nav')
<div id="wrapper">
    @yield('content')
    @yield('sidebar')
</div>

<df-messenger
    chat-icon="https://img.icons8.com/cotton/64/000000/customer-support.png"
    intent="WELCOME"
    chat-title="UNITEC MVP"
    agent-id="e94c6fb1-9b67-4660-8916-a2216cd28fd7"
    language-code="en"
></df-messenger>

<!-- Scripts -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('guest_assets') }}/js/jquery.min.js"></script>
<script src="{{ asset('guest_assets') }}/js/browser.min.js"></script>
<script src="{{ asset('guest_assets') }}/js/breakpoints.min.js"></script>
<script src="{{ asset('guest_assets') }}/js/util.js"></script>
<script src="{{ asset('guest_assets') }}/js/main.js"></script>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>

</body>

</html>
