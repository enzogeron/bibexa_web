@extends('home.layout')

@push('styles')
	{!! Html::style('css/gallery.css') !!}
@endpush

@section('content')
	
	<div class="container">
  		<div class="row">
  			<div class="col-lg-12">
  			
	        	<div align="center">
		            <button class="btn btn-default filter-button" data-filter="all">Todas</button>
		            <button class="btn btn-default filter-button" data-filter="bibexa">La Biblioteca</button>
	        	</div>

	        	<br/>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter bibexa">
	                <img src="{{ url('img/personal/david1.jpg') }}" class="img-responsive">
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter bibexa">
	                <img src="{{ url('img/personal/david2.jpg') }}" class="img-responsive">
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter bibexa">
	                <img src="{{ url('img/personal/david3.jpg') }}" class="img-responsive">
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter bibexa">
	                <img src="{{ url('img/personal/david4.jpg') }}" class="img-responsive">
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter bibexa">
	                <img src="{{ url('img/personal/david5.jpg') }}" class="img-responsive">
	            </div>

	  		</div>
        </div>
    </div>

@endsection

@push('scripts')

	<script type="text/javascript">
		$(document).ready(function() {

			$(".filter-button").click(function() {
				var value = $(this).attr('data-filter');

				if(value == "all") {
            		//$('.filter').removeClass('hidden');
            		$('.filter').show('1000');
        		} else {
					//$('.filter[filter-item="'+value+'"]').removeClass('hidden');
					//$(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
					$(".filter").not('.'+value).hide('3000');
					$('.filter').filter('.'+value).show('3000');
				}
			});
			if ($(".filter-button").removeClass("active")) {
				$(this).removeClass("active");
			}
			$(this).addClass("active");
		});
	</script>

@endpush