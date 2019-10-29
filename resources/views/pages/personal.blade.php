@extends('home.layout')

@push('styles')
	{!! Html::style('css/team-bibexa.css') !!}
@endpush

@section('content')
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<section class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">

					<div class="col-lg-12">
						<h4 class="text-info text-center"><strong>PERSONAL ADMINISTRATIVO DE LA BIBLIOTECA</strong></h4>
						<div class="row pt-md">

							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
								<div class="img-box">
									<img src="{{ url('img/david_perfil.jpg') }}" class="img-responsive">
									<ul class="text-center">
										<a href="https://www.facebook.com/davidsitoaguilera"><li><i class="fa fa-facebook"></i></li></a>
									</ul>
								</div>
								<h1>David Angel Aguilera</h1>
								<h2>Director</h2>
								<p>Siempre con los estudiantes.</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>


@stop