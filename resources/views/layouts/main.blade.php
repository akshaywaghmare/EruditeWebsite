<!DOCTYPE html>
<html lang="en">
<head>
 <title>@yield('page_title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Creative Multipurpose Bootstrap Template">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('public/favicon.ico')}}">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CPlayfair+Display:400,400i,700,700i%7CRoboto:400,400i,500,700" rel="stylesheet">
  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{asset('public/css/main.css')}}">
   <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
</head>

<body>

    @include('partials.header')
    @yield('content')
    @include('partials.footer')

    <script src="{{asset('public/js/main.js')}}"></script>
</body>
</html>
