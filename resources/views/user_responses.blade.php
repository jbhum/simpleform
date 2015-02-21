@extends('app')


@section('content-top')
		<div class="container">
			@if (count($responses))
				<h1 class="text-center"><strong><u>USER RESPONSES</u></strong></h1>
				<hr>
				<table class="table table-hover">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Comments</th>
						<th>Reason</th>
						<th>Respond by</th>
						<th>Date</th>
					</tr>
					@foreach ($responses as $response)
						<tr>
							<td>{{ $response->name }}</td>
							<td>{{ $response->email }}</td>
							<td>{{ $response->phone }}</td>
							<td>{{ $response->comments }}</td>
							<td>{{ $response->reason }}</td>
							<td>{{ $response->respond }}</td>
							<td>{{ $response->date}}</td>
						</tr>
					@endforeach
				</table>
			@else
				<div class="jumbotron">
					<h1>Nothing to see!!</h1>
					<p>	There don't appear to have been any user responses. Come back later!</p>
				</div>
			@endif
		</div>
@stop