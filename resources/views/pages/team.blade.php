@extends('layouts.app')

@section('content')
    <!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Équipe</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="{{ route('index') }}">Accueil</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Équipe</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- beitor_project_area -->
<div class="beitor_team_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h2>Notre membre</h2>
						<h3>Obtenez des conseils de nos<br>agents experts</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="witr_team_area_c team_top">
			<div class="row post_team_idteam">
				<!-- beitor_project_01 -->
				<div class="witr_all_mb_30 col-lg-12">
					<div class="team-part all_color_team ">
						<div class="witr_team_section">
							<img src="assets/images/project-thumb-02.jpg" alt="">
							<div class="team_o_icon all_team_icon_o_color">
								<ul class="witr_pots_team_s">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="witr_team_content all_content_bg_color text-center">
							<h5><a href="#">M. Ake Adou </a></h5>
							<span>Digital Manager </span>
						</div>
					</div>
				</div>
				<!-- beitor_facility_02 -->
				<div class="witr_all_mb_30 col-lg-12">
					<div class="team-part all_color_team ">
						<div class="witr_team_section">
							<img src="assets/images/project-thumb-05.jpg" alt="">
							<div class="team_o_icon all_team_icon_o_color">
								<ul class="witr_pots_team_s">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="witr_team_content all_content_bg_color text-center">
							<h5><a href="#">M. Touré </a></h5>
							<span>Web Development </span>
						</div>
					</div>
				</div>
				<!-- beitor_facility_03 -->
				<div class="witr_all_mb_30 col-lg-12">
					<div class="team-part all_color_team ">
						<div class="witr_team_section">
							<img src="assets/images/project-thumb-06.jpg" alt="">
							<div class="team_o_icon all_team_icon_o_color">
								<ul class="witr_pots_team_s">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="witr_team_content all_content_bg_color text-center">
							<h5><a href="#">Miss Vicky</a></h5>
							<span>Community Manager</span>
						</div>
					</div>
				</div>
				<!-- beitor_facility_04 -->
				<div class="witr_all_mb_30 col-lg-12">
					<div class="team-part all_color_team ">
						<div class="witr_team_section">
							<img src="assets/images/project-thumb-07.jpg" alt="">
							<div class="team_o_icon all_team_icon_o_color">
								<ul class="witr_pots_team_s">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="witr_team_content all_content_bg_color text-center">
							<h5><a href="#">M. Alex</a></h5>
							<span>Web Design</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
