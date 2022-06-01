@extends('layouts.app')

@section('title', 'PUBLICITE EN LIGNE')
@section('content')
<!-- breadcumb-area -->
<div class="breadcumb-area">
</div>

<div class="beitor-blog-area single-blog-details support_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12  col-md-12  col-sm-12 col-xs-12 blog-lr">
				<div class="beitor-single-blog-details">
					<div class="beitor-single-blog-content">
						<div class="single-blog-content">
							<div class="row">
								<div class="col-lg-8 col-md-5 col-sm-6  blog-lr">
									<div class="single_image_area">
										<div class="single_image  ">
											<img src="{{ asset($one_service->file) }}" alt="Image">
										</div>
									</div>
									<div class="container col-lg-6 col-md-6 col-sm-12 mt-4">
										<div class="comments-area">
											<div class="comment-respond ">
												<div class="commment_title">
													<h3 class="beitor_btn"><a href="{{route('contactez-nous')}}" class="text-white"> Demander un devis</a> </h3>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-7  col-sm-12  blog-lr">

									<div class="solution_content">
										<p>{!!$one_service->description!!}</p>
										<p>Nous intervenons en plusieurs étapes :</p>
										<div class="about-content">
											<span><i class="fas fa-check"></i>Bannière.<br></span>
										</div>
										<div class="about-content">
											<span><i class="fas fa-check"></i>L'e-mail marketing.<br></span>
										</div>
										<div class="about-content">
											<span><i class="fas fa-check"></i>Pop-Up.<br></span>
										</div>
										<div class="about-content">
											<span><i class="fas fa-check"></i>Publicité sur les blogs.<br></span>
										</div>
										<div class="about-content">
											<span><i class="fas fa-check"></i>Publicité sur téléphones portables<br></span>
										</div>
										<div class="about-content">
											<span><i class="fas fa-check"></i>Publicité sur les réseaux sociaux.<br></span>
										</div>
										<div class="about-content">
											<span><i class="fas fa-check"></i>Publicité en vidéos.<br></span>
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
@endsection
