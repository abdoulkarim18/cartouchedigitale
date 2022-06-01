@extends('layouts.app')

@section('title', 'GESTION DES RESEAUX')
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
					<img class="img-fluid" src="{{ asset('assets/images/gestion-reso.jpg') }}" alt="Gestion">
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 blog-lr mt-4">
				<div class="portfolio-content portfolio-details-box">
					<div class="prots-contentg">
						<p>
							Chez Aly Cartouche Digitale, notre stratégie en matière de réseaux sociaux consiste à créer avec précision et à publier un contenu attrayant pour votre entreprise, qui renforcera la notoriété de la marque, laquelle se développera à son tour en nouveaux canaux de vente.
						</p>
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
