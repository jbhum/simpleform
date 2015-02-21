@extends('app')


@section('content-top')
	<div class="jumbotron">
		<div class="container">
			<h1>Super Awesome Form</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit placeat sapiente in animi aliquam, facere sint vel, sequi perferendis! Earum officia in aspernatur, corporis nostrum suscipit impedit sequi soluta saepe.</p>
		</div>
	</div>
@stop

@section('content-bottom')
	<div class="container">
	<div class="container">
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<form method="POST" action="http://jbhum.cloudapp.net/" accept-charset="UTF-8">
			<div class="form-group">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<label for="user_name">Name</label>
				<input type="text" class="form-control" id="user_name" name="user_name" placeholder="John Doe">
				<label for="user_email">Email</label>
				<input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter email" required>
				<label for="user_phone">Phone Number</label>
				<input type="tel" class="form-control" id="user_phone" name="user_phone" placeholder="(123) 456-7891" required>
				<label for="user_comments">Comments</label>
				<textarea class="form-control" name="user_comments" id="user_comments"  rows="4"></textarea>
				<hr>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<label for="user_reason">Reason for Contact</label>
							<div  class="radio">
								<label>
									<input type="radio" name="user_reason" id="user_reason1" value="Problem with order">
									Problem with order
								</label>
							</div>
							<div  class="radio">
								<label>
									<input type="radio" name="user_reason" id="user_reason2" value="Sales inquiry">
									Sales inquiry
								</label>
							</div>
							<div  class="radio">
								<label>
									<input type="radio" name="user_reason" id="user_reason3" value="File a complaint">
									File a complaint	
									</label>
							</div>
							<div  class="radio">
								<label>
									<input type="radio" name="user_reason" id="user_reason4" value="Review Product">
									Review Product
								</label>
							</div>
						</div>
						<div class="col-md-4">
							<label for="user_contact">How would you like us to contact you?</label>
							<div  class="radio">
								<label>
									<input type="radio" name="user_contact" id="user_contact1" value="phone">
									Phone
								</label>
							</div>
							<div  class="radio">
								<label>
									<input type="radio" name="user_contact" id="user_contact2" value="email">
									Email
								</label>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="user_time" value="{{ Carbon\Carbon::now(new DateTimeZone('America/Denver')) }}">
			</div>
			<button type="submit" class="btn btn-success btn-block">Submit!</button>
		</form>
		</div>
		<div class="col-md-2"></div>
		</div>
	</div>
	</div>
@stop

