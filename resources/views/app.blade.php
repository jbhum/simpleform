<!DOCTYPE html>
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
		        <a class="navbar-brand" href="/">Simple Form</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/">Home</a>
					</li>
					<li>
						<a href="/form">Form</a>
					</li>
					<li>
						<a href="/responses">Responses</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content-top')
	@yield('content-bottom')
	<div  class="container">
		<hr>

		<footer>
		<p>&copy; Joshua Humpherys 2015</p>
		</footer>
	</div>


	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
