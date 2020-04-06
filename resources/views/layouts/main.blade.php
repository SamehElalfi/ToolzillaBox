{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
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
	
	<meta http-equiv="expires" content="sat, 02 jun 2020 00:00:00 GMT"/>
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
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159229387-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-159229387-1');
	</script>

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