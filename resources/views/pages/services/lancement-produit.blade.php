@extends('layouts.app')

@section('title', 'LANCEMENT DE PRODUITS')
@section('content')

<!-- breadcumb-area -->
<div class="breadcumb-area">
</div>


    <!--====== PORTFOLIO PART START ======-->
<div class="witr_single_portfolio_a">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="single_portfolio_previwe2">
					<img src="{{ asset($one_service->file) }}" alt="Image">
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 blog-lr">
				<div class="portfolio-content portfolio-details-box">
					<div class="prots-contentg">
						<h2>Qui dit nouveauté dit inauguration et lancement...</h2>
						<p>{!!$one_service->description!!}</p>
					</div>
				</div>

					<div class="comments-area">
						<div class="comment-respond ">
							<div class="commment_title">
								<h3 class="beitor_btn"><a href="{{route('contactez-nous')}}" class="text-white"> Demander un devis</a> </h3>
							</div>
						</div>
					</div>

			</div>
		</div>
	</div>
</div>

@endsection
