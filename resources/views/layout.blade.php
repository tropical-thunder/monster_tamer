<!DOCTYPE html>
<html>
	<head>
		<title>モンスターテイマー</title>
		<meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta name='csrf-token' content='{{ csrf_token() }}'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css')}}">
	</head>
	<body>
		<div class="container">
		 @yield('content')
		 @include('text_action_view')
		</div>
	</body>
</html>


