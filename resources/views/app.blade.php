<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
	<meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">
	<meta name="author" content="AbsoluteAdmin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">

	<!-- Admin Forms CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="external-page external-alt sb-l-c sb-r-c">

<!-- Start: Main -->
<div id="main" class="animated fadeIn">

	<!-- Start: Content-Wrapper -->
	<section id="content_wrapper">


	@yield('content')
	</section>
</div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
