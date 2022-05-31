@extends('layouts.app')

@section('content')
    <!-- breadcumb-area -->
<!-- breadcumb-area -->
<div class="breadcumb-area">
</div>



<!-- beitor_pricing_area -->
<div class="beitor_pricing_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<p>{!!$one_service->description!!}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row pricing_top">
			<!-- beitor_pricing_01 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="pricing_area all_pricing_color  ">
                    <div class="pricing-part ">
						<div class="witr_pricing_icon">
							<i class="fas fa-address-card"></i>
						</div>
						<h4>Charte Graphique</h4>

						<div class="witr_btnp_color">
							<a class="btn" href="{{route('contactez-nous')}}">Demander un devis</a>
						</div>
                    </div>
                </div>
			</div>
			<!-- beitor_pricing_02 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="pricing_area all_pricing_color  ">
                    <div class="pricing-part ">
						<div class="witr_pricing_icon">
							<i class="fas fa-coins"></i>
						</div>
						<sub>Populaire </sub>
						<h4>Logos </h4>

						<div class="witr_btnp_color">
							<a class="btn" href="{{route('contactez-nous')}}">Demander un devis</a>
						</div>
                    </div>
                </div>
			</div>
			<!-- beitor_pricing_03 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="pricing_area all_pricing_color  ">
                    <div class="pricing-part ">
						<div class="witr_pricing_icon">
							<i class="fas fa-file-signature"></i>
						</div>
						<h4>Signature</h4>

						<div class="witr_btnp_color">
							<a class="btn" href="{{route('contactez-nous')}}">Demander un devis</a>
						</div>
                    </div>
                </div>
			</div>
			<!-- beitor_pricing_04 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="pricing_area all_pricing_color  ">
                    <div class="pricing-part ">
						<div class="witr_pricing_icon">
							<i class="fas fa-sitemap"></i>
						</div>
						<h4>Carte de visite</h4>

						<div class="witr_btnp_color">
							<a class="btn" href="{{route('contactez-nous')}}">Demander un devis</a>
						</div>
                    </div>
                </div>
			</div>
			<!-- beitor_pricing_05 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="pricing_area all_pricing_color  ">
                    <div class="pricing-part ">
						<div class="witr_pricing_icon">
							<i class="fas fa-signal"></i>
						</div>
						<h4>Dépliants</h4>

						<div class="witr_btnp_color">
							<a class="btn" href="{{route('contactez-nous')}}">Demander un devis</a>
						</div>
                    </div>
                </div>
			</div>
			<!-- beitor_pricing_06 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="pricing_area all_pricing_color  ">
                    <div class="pricing-part ">
						<div class="witr_pricing_icon">
							<i class="fas fa-chart-bar"></i>
						</div>
						<h4>Bannières</h4>

						<div class="witr_btnp_color">
							<a class="btn" href="{{route('contactez-nous')}}">Demander un devis</a>
						</div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection

