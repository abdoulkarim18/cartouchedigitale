@extends('layouts.app')

@section('content')

<!-- breadcumb-area -->
<div class="breadcumb-area">
</div>

<!-- single_faq_bg_area -->
<div class="single_faq_bg_area faq_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-left">
						<h2>Vous-avez besoin d'aide ?</h2>
						<h3>Nous vous aidons à debloquer vos compte en un clic.</h3>
						<p>{!!$one_service->description!!}</p>
					</div>
				</div>
				<div class="comments-area">
					<div class="comment-respond ">
						<div class="commment_title" style='margin-left:70px'>
							<h3 class="beitor_btn"><a href="{{route('contactez-nous')}}" class="text-white"> Demander un devis</a> </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="single_faq_thumb">
					<img src="{{ asset($one_service->file) }}" alt="Image">
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
