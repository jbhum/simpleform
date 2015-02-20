<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>	Simple Form </title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<style type="text/css"></style>
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="/form">Simple Form</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/form">Home</a>
					</li>
					<li>
						<a href="/form">Away</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="jumbotron">
		<div class="container">
			<h1>Super Awesome Form</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit placeat sapiente in animi aliquam, facere sint vel, sequi perferendis! Earum officia in aspernatur, corporis nostrum suscipit impedit sequi soluta saepe.</p>
		</div>
	</div>


	<div class="container">
	<div class="container">
		<form>
			<div class="form-group">
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
						<div class="col-md-6">
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
						<div class="col-md-6">
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
			</div>
			<button type="submit" class="btn btn-success btn-block">Submit!</button>
		</form>
	</div>
	</div>

	<hr>

	<footer>
	<p>&copy; Joshua Humpherys 2015</p>
	</footer>


	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html> -->

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
		<form>
			<div class="form-group">
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
						<div class="col-md-6">
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
						<div class="col-md-6">
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
			</div>
			<button type="submit" class="btn btn-success btn-block">Submit!</button>
		</form>
	</div>
	</div>
@stop

