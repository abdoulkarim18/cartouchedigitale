@extends('layouts.app')

@section('content')
    <!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>À propos de nous</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="{{ route('index') }}">Accueil</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>À propos de nous</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="beitor_about_area">
	<div class="container">
		<div class="row about">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="single_image_area">
					<div class="single_image  ">
						<img src="assets/images/about.png" alt="">
						<div class="witr_tx_ovei_title"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12"></div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="thumb_btn">
							<h1><a href="#">+5 ANS D'EXPÉRIENCES</a></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="witr_section_lf">
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-left">
							<h2>À propos de nous</h2>
							<h3>Le meilleur choix pour votre</h3>
							<h1>Entreprise prospère.</h1>
							<p>"Aly Cartouche Digitale, c’est plus de 5 ans d’expérience dans le secteur des TIC mis au service de nos clients. </p>

							<p>Nos clients proviennent de diverses secteurs d’activités à savoir : <strong>banque, assurance, industrie, organisation Etatique, PME/PMI, etc…</strong></p>

							<p>Composé d’une équipe jeune, dynamique et motivée, Aly Cartouche Digitale partage avec ses clients, ses valeurs de <strong>Travail Bien Fait, d’Engagement et d’Esprit d’Equipe.</strong></p>

							<p>Notre expertise diverse et variée réside sur nos savoir-faire techniques perpétuellement adaptés aux technologies modernes ainsi qu’à la mise à disposition de services pour tous vos projets.</p>

							<p>Chez Aly Cartouche Digitale, nous mettons le client au centre de nos préoccupations et faisant de leurs besoins notre priorité.</p>
						</div>
					</div>
					<div class="row about_service">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="em-service2 sleft all_color_service">
								<div class="em_service_content ">
									<div class="em_single_service_text  ">
										<div class="service_top_image"></div>
										<div class="text_box">
											<div class="service_top_text all_icon_color">
												<div class="em-service-icon">
													<img src="assets/images/ab-icon-1.png" alt="">
												</div>
											</div>
											<div class="em-service-inner">
												<div class="em-service-title">
													<h3>Notre Objectif </h3>
												</div>
												<div class="em-service-desc">
													<p>Nos espères vous accompagne dans votre processus de transformation digitale </p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="em-service2 sleft all_color_service">
								<div class="em_service_content ">
									<div class="em_single_service_text  ">
										<div class="service_top_image"></div>
										<div class="text_box">
											<div class="service_top_text all_icon_color">
												<div class="em-service-icon">
													<img src="assets/images/ab-icon-2.png" alt="">
												</div>
											</div>
											<div class="em-service-inner">
												<div class="em-service-title">
													<h3>Notre Vision </h3>
												</div>
												<div class="em-service-desc">
													<p>Promouvoir les nouvelles technologies d'information et communication en Afrique </p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- beitor_counter_area -->
<div class="beitor_counter_area">
	<div class="container">
		<div class="row counter_style1">
			<!-- desicat_counter_01 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="witr_counter_single all_counter_color">
					<div class="witr_custom_icon">
						<i class="icofont-company"></i>
					</div>
					<div class="witr_counter_number_inn">
						<h3 class="counter">100</h3>
						<span>+</span>
						<h4>CLIENTS HEUREUX</h4>
					</div>
				</div>
			</div>
			<!-- desicat_counter_02 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="witr_counter_single all_counter_color">
					<div class="witr_custom_icon">
						<i class="icofont-attachment"></i>
					</div>
					<div class="witr_counter_number_inn">
						<h3 class="counter">50</h3>
						<span>+</span>
						<h4>PROJET TERMINÉ</h4>
					</div>
				</div>
			</div>
			<!-- desicat_counter_03 -->
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="witr_counter_single all_counter_color">
					<div class="witr_custom_icon">
						<i class="icofont-business-man-alt-2"></i>
					</div>
					<div class="witr_counter_number_inn">
						<h3 class="counter">10</h3>
						<span>+</span>
						<h4>MEMBRES DE L'ÉQUIPE </h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
