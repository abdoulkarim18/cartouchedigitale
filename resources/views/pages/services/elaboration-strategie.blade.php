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
					<img src="{{ asset($one_service->file) }}" alt="Image">
				</div>
				<div class="container comments-area col-lg-8 col-md-12 col-sm-12 mt-4">
					<div class="comment-respond ">
						<div class="commment_title" style="margin-left: 40px;">
							<h3 class="beitor_btn"><a href="{{route('contactez-nous')}}" class="text-white"> Demander un devis</a> </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 blog-lr">
				<div class="portfolio-content portfolio-details-box">
					<div class="prots-contentg">
                        <p>{!!$one_service->description!!}
                            • Réseaux sociaux et gestion de communauté. <br>
                            • Communication. <br>
                            • Création et développement de sites Internet. <br>
                            • Création et gestion de boutiques E-commerce. <br>
                            • Brand content (Blog, storytelling) <br>
                            • Conception et rédaction de newsletter (Chaîne d’acquisition des leads). <br>
                            • SEA/SEM, acquisition de trafic (Publicité). <br>
                            • SEO, référencement naturel sur les moteurs de recherche. <br>
                            • CRM, automatisation des processus Marketing, Vente & Communication. <br>
                            • Applications mobiles.
                        </p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection
