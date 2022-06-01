@extends('layouts.app')

@section('content')

@section('title',"DEVELOPPEMENT D'APPLICATION WEB")
<!-- breadcumb-area -->
<div class="breadcumb-area">
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
								<img src="{{ asset($one_service->file) }}" alt="Image">
							</div>
							<div class="text_box all_icon_color mt-4">
								<p>{!!$one_service->description!!}</p>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12">
						<div class="information_list">
							<h3>Dernière réalisation </h3>
							<ul>
								<li><a href="#">Nom du Projet: - Réfonte de site</a></li>
								<li><a href="#">Client: - Aly Cartouche Imprimerie</a></li>
								<li><a href="#">Category: - Developpement Web</a></li>
								<li><a href="#">Adress: - Cocody Riviéra 2</a></li>
								<li><a href="#">Année: - 2022</a></li>
							</ul>
							<h2 class="text-white">--------------</h2>
						</div>
						<div class="comments-area mt-4">
							<div class="comment-respond ">
								<div class="commment_title" style="margin-left: 10px;">
									<h3 class="beitor_btn"><a href="{{route('contactez-nous')}}" class="text-white"> Demander un devis</a> </h3>
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
