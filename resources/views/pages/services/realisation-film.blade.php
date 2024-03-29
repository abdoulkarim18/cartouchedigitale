@extends('layouts.app')

@section('title', 'REALISATION DE FILM INSTITUTIONNEL')
@section('content')
<!-- breadcumb-area -->
<div class="breadcumb-area">
</div>


<!-- beitor_project_area -->
<div class="beitor_project3_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h2>PROJET REALISÉS</h2>
						<h3>Ici, ça tourne...</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="witr_pslide all_pslides_color ps1 service_active">
			<div class="witr_islidess_slick witr_cslide_idps1 project_top">
				<!-- beitor_project_01 -->
				<div class="item_pos col-lg-12">
					<div class="witr_single_pslide">
						<div class="witr_pslide_image">
							<img src="{{ asset('assets/images/eve-rfi-banniere2.jpg') }}" alt="Image">
						</div>
						<div class="witr_content_pslide_text">
							<div class="witr_content_pslide">
								<h3><a href="#">Business</a></h3>
								<p>Web Design </p>
							</div>
						</div>
					</div>
				</div>
				<!-- beitor_facility_02 -->
				<div class="item_pos col-lg-12">
					<div class="witr_single_pslide">
						<div class="witr_pslide_image">
							<img src="{{ asset('assets/images/eve-rfi1.jpg') }}" alt="Image">
						</div>
						<div class="witr_content_pslide_text">
							<div class="witr_content_pslide">
								<h3><a href="#">Web Design</a></h3>
								<p>Digital Marketing </p>
							</div>
						</div>
					</div>
				</div>
				<!-- beitor_facility_03 -->
				<div class="item_pos col-lg-12">
					<div class="witr_single_pslide">
						<div class="witr_pslide_image">
							<img src="{{ asset('assets/images/civ1.jpg') }}" alt="Image">
						</div>
						<div class="witr_content_pslide_text">
							<div class="witr_content_pslide">
								<h3><a href="#">Business</a></h3>
								<p>Financial Meting </p>
							</div>
						</div>
					</div>
				</div>
				<!-- beitor_facility_04 -->
				<div class="item_pos col-lg-12">
					<div class="witr_single_pslide">
						<div class="witr_pslide_image">
							<img src="{{ asset('assets/images/eve-rfi-baniere2.jpg') }}" alt="Image">
						</div>
						<div class="witr_content_pslide_text">
							<div class="witr_content_pslide">
								<h3><a href="#">Design</a></h3>
								<p>Digital Marketing </p>
							</div>
						</div>
					</div>
				</div>
				<!-- beitor_facility_05 -->
				<div class="item_pos col-lg-12">
					<div class="witr_single_pslide">
						<div class="witr_pslide_image">
							<img src="{{ asset('assets/images/eve-cme2.jpg') }}" alt="Image">
						</div>
						<div class="witr_content_pslide_text">
							<div class="witr_content_pslide">
								<h3><a href="#">Marketing</a></h3>
								<p>Web Design </p>
							</div>
						</div>
					</div>
				</div>
				<!-- beitor_facility_06 -->
				<div class="item_pos col-lg-12">
					<div class="witr_single_pslide">
						<div class="witr_pslide_image">
							<img src="{{ asset('assets/images/eve-cme3.jpg') }}" alt="Image">
						</div>
						<div class="witr_content_pslide_text">
							<div class="witr_content_pslide">
								<h3><a href="#">Web Design</a></h3>
								<p>Web Development </p>
							</div>
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
						<h3>Ecriture de scénario</h3>
					</div>
				</div>
			</div>
			<!-- beitor_working_02 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="witr_feature_13 sub-border-2 all_feature_color text-center ">
					<div class="sub-item ">
						<span>02</span>
						<i class="fas fa-star"></i>
						<h3>La pré-production</h3>
					</div>
				</div>
			</div>
			<!-- beitor_working_03 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="witr_feature_13 sub-border-2 all_feature_color text-center ">
					<div class="sub-item ">
						<span>03</span>
						<i class="fas fa-star"></i>
						<h3>La production du film </h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container col-lg-4 col-md-6 col-sm-12 mt-2">
	<div class="comments-area">
		<div class="comment-respond ">
			<div class="commment_title" style="margin-left: 40px;">
				<h3 class="beitor_btn"><a href="contact.html" class="text-white"> Demander un devis</a> </h3>
			</div>
		</div>
	</div>
</div>

@endsection
