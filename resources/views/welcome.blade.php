<html>
<head>
<title>PGO Starter Site</title>
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<style>
	body {margin: 0;padding: 0;width: 100%;height: 100%;color: #B0BEC5;display: table;font-weight: 100;font-family: 'Lato';}
	.container {text-align: center;display: table-cell;vertical-align: middle;}
	.content {text-align: center;display: inline-block;}
	.title {font-size: 76px;margin-bottom: 40px;}
	.quote {font-size: 24px;}
	footer {position: fixed; bottom: 0px; width: 100%; height: 30px; background:#efefef; padding:10px; text-align: center; color:#bdc3c7;}
	footer a{text-decoration: none; color: #bdc3c7;}
	footer a:hover{text-decoration: none; color: #29567f;}
	.logo {padding:0 0 50px 0; opacity: .2; -webkit-transition: all 2s; transition: all 2s;}
	.logo:hover {padding:0 0 50px 0; opacity: 1; -webkit-transition: all 2s; transition: all 2s;}
</style>
<link rel="shortcut icon" href="/favico.png">
</head>
<body>
<footer style=""><?=Inspiring::footer();?> 
@if (Auth::guest())
<a href="{{ url('/auth/login') }}">Login</a>
@else
{{ Auth::user()->name }} <span class="caret"></span> <a href="{{ url('/auth/logout') }}">Logout</a>
@endif
</footer>
<div class="container">
	<div class="content">
		<div class="logo"><a href="http://philippineglobaloutsourcing.com"><img src="/assets/img/philippines-outsourcing-logo.png" alt="Philippines Outsourcing logo" /></a></div>
		<div class="title">PGO Starter Site </div>
		<div class="quote">{{ Inspiring::quote() }}</div>
	</div>
</div>
</body>
</html>
