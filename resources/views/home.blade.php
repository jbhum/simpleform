@extends('app')


@section('content-top')
	<div class="jumbotron">
		<div class="container text-center">
			<h1 class="text-center">Super Awesome Example Page</h1>
			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit placeat sapiente in animi aliquam, facere sint vel, sequi perferendis! Earum officia in aspernatur, corporis nostrum suscipit impedit sequi soluta saepe.</p>
			<a href="/form" class="btn btn-success btn-lg">Fill out My Super Awesome Form!!!</a>
		</div>
	</div>
@stop

@section('content-bottom')
	<div class="container">
		<div class="row">
				<div class="col-md-2"></div>
			<div class="col-md-2 text-center">
				<!-- <div class="container"> -->
				<img src="http://3.bp.blogspot.com/-JU9nBDHKpC4/T_p9yMNpezI/AAAAAAAAEdE/Ie6k9MjOAKk/s1600/funny+dogs+wallpaper_2.jpg" alt="Golden Retriever" class="img-rounded img-responsive">
					<h1 class="text-center">Form</h1>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maxime maiores placeat! Nesciunt perferendis totam ullam, ipsum tempora vitae ipsam accusamus molestiae eligendi aliquid id praesentium repudiandae, aperiam eum repellendus.</p>
					<a href="/form" class="btn btn-primary btn-lg btn-block">Fill out Form</a>
					<hr>
				<!-- </div> -->
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2 text-center">
			<img src="http://www.imagenesygraficos.com/fondos-escritorio/data/media/50/english-bulldog-068.jpg" alt="Golden Retriever" class="img-rounded img-responsive">
			
				<!-- <div class="container"> -->
					<h2 class="text-center">All Responses</h2>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fugit qui iusto, accusamus sed veniam dolorem. Nobis doloribus commodi unde deleniti expedita, corporis temporibus, iste accusamus nostrum, pariatur saepe sunt.</p>
					<a href="/responses" class="btn btn-primary btn-lg btn-block">Responses</a>
					<hr>
				<!-- </div> -->
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2 text-center">
				<img src="http://www.funnypica.com/wp-content/uploads/2012/01/Funny-Dogs-Funny-Dog-Picture-19-FunnyPica.com_-1024x842.jpg" alt="Golden Retriever" class="img-rounded img-responsive">
				
				<!-- <div class="container"> -->
					<h1 class="text-center">Reset Database</h1>
					<p class="text-center">Be Really careful! Only press this button if you are sure that you want
					to reset the database. This cannot be undone.
					Once you do this any information you have entered will be gone and you will never be able to 
					access it again.</p>
					<a href="/reset" class="btn btn-danger btn-lg btn-block">No Turning Back</a>
					<hr>
				<!-- </div> -->
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>

@stop