@extends('app')


@section('content-top')
	<div class="jumbotron">
		<div class="container text-center">
			<h1 class="text-center">Congratulations!!</h1>
			<p class="text-center">Your Form has been successfully filled out and submitted! 
			You can go back to the home page by clicking the button below!</p>
			<a href="/" class="btn btn-success btn-lg">Go Back Home</a>
		</div>
	</div>
@stop


@section('content-bottom')
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>	
				<div class="col-md-4">
					<h4 class="text-center">Review Your Submission</h4>
					<ul class="list-unstyled">
						<li><strong><u>Name:</u></strong>            {{ $response->name }}</li>
						<li><strong><u>Email:</u></strong>           {{ $response->email }}</li>
						<li><strong><u>Phone:</u></strong>           {{ $response->phone }}</li>
						<li><strong><u>Comments:</u></strong>        {{ $response->comments }}</li>
						<li><strong><u>Reason:</u></strong>          {{ $response->reason }}</li>
						<li><strong><u>How to contact:</u></strong>  {{ $response->respond }}</li>
						<li><strong><u>Submission Date:</u></strong> {{ $response->date }}</li>
					</ul>
						
				</div>
			</div>
			<hr>
			<div class="row text-center">
				<div class="col-md-3"></div>
				<div class="col-md-3 text-center border-solid">
					<h4>Fill out another form</h4>
					<p>If you made a mistake or just want to 
					say something else feel free to click the link below and fill out another form
					on the page it takes you to</p>
					<a href="/form" class="btn btn-info btn-lg">Form</a>
				</div>
				<div class="col-md-3 text-center">
					<h4>View All Forms</h4>
					<p>If you would like to view what everyone else has submitted then
					you can click this link below and it will take you to that page.</p>
					<a href="/responses" class="btn btn-info btn-lg">Responses</a>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
@stop