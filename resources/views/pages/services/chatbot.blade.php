@extends('layouts.app')

@section('title', 'CREATION DE CHATBOT')
@section('content')

<!-- breadcumb-area -->
<div class="breadcumb-area">
</div>

<!-- BLOG AREA -->
<div class="blog_area single_service_page single_project">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
 						<div class="row mt-4">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="witr_play_vi witr_all_color_v">
									<div class="witr_about_image">
										<img src="{{ asset($one_service->file) }}" alt="Image">
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">

								<div class="list_item_area mt-4">
									<div class="text_box all_icon_color">
										<p>{!!$one_service->description!!}</p>
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



<!-- beitor_working_area -->
<div class="beitor_working_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h3>Processus de création du chatbot</h3>
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
						<h3>Listez les cas d’usages que pourrait traiter le bot</h3>
					</div>
				</div>
			</div>
			<!-- beitor_working_02 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="witr_feature_13 sub-border-2 all_feature_color text-center ">
					<div class="sub-item ">
						<span>02</span>
						<i class="fas fa-star"></i>
						<h3>La modélisation du Bot </h3>
					</div>
				</div>
			</div>
			<!-- beitor_working_03 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="witr_feature_13 sub-border-2 all_feature_color text-center ">
					<div class="sub-item ">
						<span>03</span>
						<i class="fas fa-star"></i>
						<h3>Faites des tests avec des opérationnels et valider le bot</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container col-lg-4 col-md-6 col-sm-12 mt-2">
	<div class="comments-area">
		<div class="comment-respond ">
			<div class="commment_title"  style="margin-left: 40px;">
				<h3 class="beitor_btn"><a href="{{route('contactez-nous')}}" class="text-white"> Demander un devis</a> </h3>
			</div>
		</div>
	</div>
</div>
@endsection
