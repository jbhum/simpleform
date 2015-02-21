@extends('app')

@section('content-top')
	<div class="jumbotron text-center">
		<h1>Are you sure you want to reset?</h1>
		<h4>There is no turning back!</h4>
	</div>
@stop

@section('content-bottom')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form method="POST" action="http://jbhum.cloudapp.net/reset/confirm" accept-charset="UTF-8">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">						
					<button type="submit" class="btn btn-danger btn-block btn-lg">Delete Everything</button>
				</form>
			</div>
			<div class="col-md-6">
				<a href="/home" class="btn btn-success btn-lg btn-block">Go Back Home</a>
			</div>
		</div>
	</div>
@stop