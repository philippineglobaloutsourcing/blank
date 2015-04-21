@extends('app')

@section('content')
<div class="container-home">
	<div class="content">
		<div class="logo"><a href="http://philippineglobaloutsourcing.com"><img src="/assets/img/philippines-outsourcing-logo.png" alt="Philippines Outsourcing logo" /></a></div>
		<div class="title">Philippine Global Outsourcing</div>
		<div class="quote">{{ Inspiring::quote() }}</div>
	</div>
</div>
@endsection
