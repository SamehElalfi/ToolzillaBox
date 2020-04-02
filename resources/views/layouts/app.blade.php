<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
	@hasSection('title')
		<title>@yield('title')</title>
	@else
		<title>ToolzillaBox</title>
	@endif
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">

	<!-- Fix chrome language detection -->
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="Content-Language" content="en" />

	<!-- Favicons -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png?v=1"> -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png?v=1">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png?v=1">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <meta name="msapplication-config" content="browserconfig.xml"/>
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg?v=1" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Styles -->
	<link href="/dist/css/style.css?v=518" rel="stylesheet">
	<link href="/dist/css/custom.css?v=518" rel="stylesheet">

	<noscript>
		<link href="/dist/css/no-script.css?v=518" rel="stylesheet">
	</noscript>

	@yield('style')
</head>
<body class="">

	<div class="menu__overlay"></div>

	<div class="site">

		@include('layouts.nav')

		@yield('content')
		
		@isset($no_footer)
			@if (!$no_footer)
				@include('layouts.footer')
			@endif
		@else
			@include('layouts.footer')
		@endisset

	</div>

	<!-- Scripts -->
	<script src="/dist/js/jquery-3.4.1.min.js?v=518"></script>
	<script src="/dist/js/vendor.js?v=518"></script>
	<script src="/dist/js/main.js?v=518"></script>
	<script src="/dist/js/lazyload.min.js?v=518"></script>
	<script>
		$(function(){
			lazyload();
			$('.full-width-slider__nav button, .full-width-slider__nav li').on('click', function(){
				lazyload();
			});
		});
	</script>
	@yield('script')
</body>
</html>
