@extends('layouts.app')

@section('content')

    <!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Réalisation de Chatbot</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="{{ route('index') }}">Accueil</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Réalisation de Chatbot</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- BLOG AREA -->
<div class="blog_area single_service_page single_project">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-12 ">
						<div class="service-item all_color_service text-left ">
							<div class="service_top_image">
								<img src="{{ asset('assets/images/slider-image.jpg') }}" alt="image">
							</div>
							<div class="text_box all_icon_color">
								<h3>Nos ingénieurs qualifiés</h3>
								<p> Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t</p>
							</div>
						</div>
 						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="witr_play_vi witr_all_color_v">
									<div class="witr_about_image">
										<img src="{{ asset('assets/images/007.jpg') }}" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">

								<div class="list_item_area">
									<ul>
										<li>
											<span><i class="fas fa-check"></i></span>
											<span>Conception et développement de sites Web</span>
										</li>
										<li>
											<span><i class="fas fa-check"></i></span>
											<span>Developpement d'Application Mobile</span>
										</li>
										<li>
											<span><i class="fas fa-check"></i></span>
											<span>Services de gestion 24h/24 et 7j/7</span>
										</li>
										<li>
											<span><i class="fas fa-check"></i></span>
											<span>Securité de vos Services</span>
										</li>

									</ul>
								</div>
							</div>
						</div>
						<div class="project_section_title">
							<p> Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassi etc.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- beitor_working_area -->
<div class="beitor_working_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h3>Notre processus de travail</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row working_top">
			<!-- beitor_working_01 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="witr_feature_13 sub-border-2 all_feature_color text-center ">
					<div class="sub-item ">
						<span>01</span>
						<i class="fas fa-star"></i>
						<h3>Analyse</h3>
						<p>Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod tempor incididunt  </p>
					</div>
				</div>
			</div>
			<!-- beitor_working_02 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="witr_feature_13 sub-border-2 all_feature_color text-center ">
					<div class="sub-item ">
						<span>02</span>
						<i class="fas fa-star"></i>
						<h3>Conception de Maquette </h3>
						<p>Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod tempor incididunt  </p>
					</div>
				</div>
			</div>
			<!-- beitor_working_03 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="witr_feature_13 sub-border-2 all_feature_color text-center ">
					<div class="sub-item ">
						<span>03</span>
						<i class="fas fa-star"></i>
						<h3>Realisation</h3>
						<p>Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod tempor incididunt  </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container col-lg-4 col-md-6 col-sm-12 mt-2">
	<div class="comments-area">
		<div class="comment-respond ">
			<div class="commment_title">
				<h3 class="beitor_btn"><a href="contact.html" class="text-white"> Demander un devis</a> </h3>
			</div>
		</div>
	</div>
</div>
@endsection
