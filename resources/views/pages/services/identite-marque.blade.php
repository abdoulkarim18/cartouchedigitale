@extends('layouts.app')

@section('content')
    <!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Création d'identité de marque</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="{{ route('index') }}">Accueil</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Création d'identité de marque</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- beitor_pricing_area -->
<div class="beitor_pricing_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h2>Quelques identité de marque</h2>
						<h3>Notre plan</h3>
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
							<a class="btn" href="contact.html">Demander un devis</a>
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
							<a class="btn" href="contact.html">Demander un devis</a>
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
							<a class="btn" href="contact.html">Demander un devis</a>
						</div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection

