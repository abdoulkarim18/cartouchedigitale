@extends('layouts.app')

@section('content')
    <!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Developpement d'applications web & Mobile</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="{{ route('index') }}">Accueil</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Developpement d'applications web & Mobile</li>
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
					<div class="col-lg-7 col-md-7 col-sm-12">
						<div class="service-item all_color_service text-left ">
							<div class="service_top_image">
								<img src="{{ asset('assets/images/006.jpg') }}" alt="image">
							</div>
							<div class="text_box all_icon_color">
								<h3>Au service de l'offre professionnelle</h3>
								<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p>
							</div>
						</div>

						<div class="project_section_title">
							<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-12">
						<div class="information_list">
							<h3>Informations </h3>
							<ul>
								<li><a href="#">Nom du Projet: - IT Business</a></li>
								<li><a href="#">Client: - Aly Cartouche</a></li>
								<li><a href="#">Category: - Design</a></li>
								<li><a href="#">Location: - Abidjan</a></li>
								<li><a href="#">Année: - 2021</a></li>
							</ul>
							<h2><a href="#">Voir tous les projets</a></h2>
						</div><br><br>
						<div class="comments-area mt-4">
							<div class="comment-respond ">
								<div class="commment_title">
									<h3 class="beitor_btn"><a href="contact.html" class="text-white"> Demander un devis</a> </h3>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>
@endsection
