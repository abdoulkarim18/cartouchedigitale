@extends('layouts.app')

@section('content')


<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Recuperation de compte</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="{{ route('index') }}">">Accueil</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Recuperation de compte</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- single_faq_bg_area -->
<div class="single_faq_bg_area faq_page">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-left">
						<h2>Vous-avez besoin d'aide ?</h2>
						<h3>Nous vous aidons à debloquer vos compte en un clique.</h3>
						<p>Lorem ipsum dolor sit amet, cadipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				<div class="comments-area">
					<div class="comment-respond ">
						<div class="commment_title">
							<h3 class="beitor_btn"><a href="contact.html" class="text-white"> Demander un devis</a> </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="single_faq_thumb">
					<img src="{{ asset('assets/images/013.jpeg') }}" alt="image" />
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
