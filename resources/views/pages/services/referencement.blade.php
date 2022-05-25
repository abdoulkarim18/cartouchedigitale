@extends('layouts.app')

@section('content')

<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Referencement naturel & payant</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="{{ route('index') }}">Accueil</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Referencement naturel & payant</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="beitor-blog-area single-blog-details support_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12  col-md-12  col-sm-12 col-xs-12 blog-lr">
				<div class="beitor-single-blog-details">
					<div class="beitor-single-blog-content">
						<div class="single-blog-content">
							<div class="row">
								<div class="col-lg-4 col-md-5 col-sm-6  blog-lr">
									<div class="witr_feature_3d witr_feature_con_3d witr_feature_flip_left ">
										<div class="witr_single_feature_3d all_feature_color text-center">
											<!-- fontent -->
											<div class="witr_feature_front_3d font_thumb">
												<div class="witr_feature_position">
													<div class="witr_feature_content_3d">
														<div class="witr_feature_icon_3d">
															<i class="fas fa-microphone-alt"></i>
														</div>
														<h3><a href="#">As tu besoin d'aide?</a></h3>
														<p>(+225) 0153533896<br>contact@alycartouche.ci </p>
													</div>

												</div>
											</div>
											<!-- bekend -->
											<div class="witr_feature_back_3d">
												<div class="witr_feature_position">
													<div class="witr_feature_content_3d">
														<div class="witr_feature_icon_3d">
															<i class="fas fa-book-medical"></i>
														</div>
														<h3><a href="#">Riviera 2, Non loin de la pharmacie Riviera 2</a></h3>
														<p>Deblocage de tous vos comptes </p>
													</div>

												</div>
											</div>
										</div>
									</div>
									<div class="departmentList all_list_color">
										<h3>NOTRE SERVICE</h3>
										<ul>
											<li><a href="#">Déblocage des comptes</a></li>
											<li><a href="#">Evénementiel</a></li>
											<li><a href="#">Strategy & Planning</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-8 col-md-7  col-sm-12  blog-lr">
									<div class="single_image_area">
										<div class="single_image  ">
											<img src="{{ asset('assets/images/bus1.jpg') }}" alt="Image">
											<div class="witr_tx_ovei_title"></div>
										</div>
									</div>
									<div class="witr_text_widget">
										<div class="witr_text_widget_inner">
											<h2>Au service de l'offre professionnels</h2>
											<div class="about-content">
												<span><i class="fas fa-check"></i>Assistance et maintenance 24h/24 et 7j/7<br></span>
											</div>
										</div>
									</div>
									<div class="solution_content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur</p>
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

<div class="container col-lg-4 col-md-6 col-sm-12">
	<div class="comments-area">
		<div class="comment-respond ">
			<div class="commment_title">
				<h3 class="beitor_btn"><a href="contact.html" class="text-white"> Demander un devis</a> </h3>
			</div>
		</div>
	</div>
</div>
@endsection
