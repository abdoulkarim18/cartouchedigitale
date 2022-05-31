@extends('layouts.app')

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
					<img class="img-fluid" src="{{ asset('assets/images/formation-coaching.jpg') }}" alt="Formation&coaching">
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 blog-lr">
				<div class="portfolio-content portfolio-details-box">
					<div class="prots-contentg">
						<p>Vous souhaitez faire progresser et augmenter votre performance professionnelle ? <br> Nos experts vous transmettent leurs connaissances et techniques pour améliorer vos compétences. Nous concevons des programmes de formations sur-mesure en fonction de vos besoins.
						</p>
					</div>
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
