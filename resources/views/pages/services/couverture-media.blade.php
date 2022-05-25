@extends('layouts.app')

@section('content')

<!-- breadcumb-area -->

<div class="breadcumb-area">

	<div class="container">

		<div class="row">

			<div class="col-md-12 txtc  text-center ccase">

				<div class="brpt">

					<h2>Couverture Media d'Evénements</h2>

				</div>

				<div class="breadcumb-inner">

					<ul>

						<li><a href="{{ route('index') }}">">Accueil</a></li>

						<li><i class="fas fa-angle-right"></i></li>

						<li>Couverture Media d'Evénements</li>

					</ul>

				</div>

			</div>

		</div>

	</div>

</div>



<!-- blog-left-side widget -->

<div class="witr-blog-side-area witr-blog-2side">

	<div class="container">

		<div class="row">

			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">

				<div class="row">

					<div class="col-lg-6 col-md-12">

						<div class="beitor-single-blog beitor-lt">

							<!-- BLOG THUMB -->

							<div class="beitor-blog-thumb">

								<a href="single-blog.html"> <img  src="{{ asset('assets/images/001.jpg') }}"  alt=""> </a>

							</div>

							<div class="em-blog-content-area">

								<!-- BLOG TITLE -->

								<div class="blog-page-title">

									<h2><a href="single-blog.html">Des questions auxquelles chaque propriétaire d'entreprise peut répondre</a></h2>

								</div>

								<!-- BLOG POST META  -->

								<div class="beitor-blog-meta">

									<div class="beitor-blog-meta-left">

										<span><i class="icofont-calendar"></i>26 Juin, 2021</span>

										<a href="#"><i class="icofont-speech-comments"></i>0 Comments</a>

									</div>

								</div>

								<!-- BLOG TITLE AND CONTENT -->

								<div class="blog-inner">

									<div class="blog-content">

										<p>Lorem Ipsum has been the industry's standarddummy text ever since this 2021 (…) Our offices are located on </p>

									</div>

								</div>

							</div>

						</div>

					</div>

					<!-- ARCHIVE QUERY 2-->

					<div class="col-lg-6 col-md-12">

						<div class="beitor-single-blog beitor-lt">

						<!-- BLOG THUMB -->

							<div class="beitor-blog-thumb">

							 <a href="single-blog.html"> <img src="{{ asset('assets/images/002.jpg') }}"  alt=""> </a>

							</div>

							<div class="em-blog-content-area">

								<!-- BLOG TITLE -->

								<div class="blog-page-title">

									<h2><a href="single-blog.html">Stimuler les prospects Optimiser le marché Nouvelle année</a></h2>

								</div>

								<!-- BLOG POST META  -->

								<div class="beitor-blog-meta">

									<div class="beitor-blog-meta-left">

										<span><i class="icofont-calendar"></i>26 Juin, 2021</span>

										<a href="#"><i class="icofont-speech-comments"></i>0 Comments</a>

									</div>

								</div>

								<!-- BLOG TITLE AND CONTENT -->

								<div class="blog-inner">

									<div class="blog-content">

										<p>Lorem Ipsum has been the industry's standarddummy text ever since this 2021 (…) Our offices are located on </p>

									</div>

								</div>

							</div>

						</div>

					</div>

					<!-- ARCHIVE QUERY 3-->

					<div class="col-lg-6 col-md-12">

						<div class="beitor-single-blog beitor-lt">

								<!-- BLOG THUMB -->

							<div class="beitor-blog-thumb">

								 <a href="single-blog.html"> <img src="{{ asset('assets/images/003.jpg') }}"  alt=""> </a>

							</div>

							<div class="em-blog-content-area">

								<!-- BLOG TITLE -->

								<div class="blog-page-title">

									<h2><a href="single-blog.html">Nous faisons une révolution dans Word Class Building.</a></h2>

								</div>

								<!-- BLOG POST META  -->

								<div class="beitor-blog-meta">

									<div class="beitor-blog-meta-left">

										<span><i class="icofont-calendar"></i>26 Juin, 2021</span>

										<a href="#"><i class="icofont-speech-comments"></i>0 Comments</a>

									</div>

								</div>

								<!-- BLOG TITLE AND CONTENT -->

								<div class="blog-inner">

									<div class="blog-content">

										<p>Lorem Ipsum has been the industry's standarddummy text ever since this 2021 (…) Our offices are located on </p>

									</div>

								</div>

							</div>

						</div>

					</div>

					<!--  END SINGLE BLOG -->

					<!-- ARCHIVE QUERY 4-->

					<div class="col-lg-6 col-md-12 ">

						<div class="beitor-single-blog beitor-lt">

							<!-- BLOG THUMB -->

							<div class="beitor-blog-thumb">

								 <a href="single-blog.html"> <img src="{{ asset('assets/images/004.jpg') }}"  alt=""> </a>

							</div>

							<div class="em-blog-content-area">

								<!-- BLOG TITLE -->

								<div class="blog-page-title">

									<h2><a href="single-blog.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h2>

								</div>

								<!-- BLOG POST META  -->

								<div class="beitor-blog-meta">

									<div class="beitor-blog-meta-left">

										<span><i class="icofont-calendar"></i>26 Juin, 20211</span>

										<a href="#"><i class="icofont-speech-comments"></i>0 Comments</a>

									</div>

								</div>

								<!-- BLOG TITLE AND CONTENT -->

								<div class="blog-inner">

									<div class="blog-content">

										<p>Lorem Ipsum has been the industry's standarddummy text ever since this 2021 (…) Our offices are located on </p>

									</div>

								</div>

							</div>

						</div>

					</div>


				</div>

				<!-- START PAGINATION -->

				<div class="row">

					<div class="col-md-12">

						<div class="paginations">

							<ul class='page-numbers'>

								<li><span aria-current='page' class='page-numbers current'>1</span></li>

								<li><a class='page-numbers' href='#'>2</a></li>

								<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a></li>

							</ul>

						</div>

					</div>

				</div>

				<!-- END START PAGINATION -->

			</div>

			<div class="col-lg-4 col-md-6  col-sm-12 col-xs-12 sidebar-right content-widget pdsl">

				<div class="blog-left-side widget">

					<div class="widget widget_search">

						<div class="defaultsearch">

							<form action="#">

								<input type="text" name="s" value="" placeholder="Search" title="Search for:">

								<button type="submit" class="icons">

								<i class="fa fa-search"></i>

								</button>

							</form>

						</div>

					</div>



					<div class="widget widget_categories">

						<h2 class="widget-title">Categories</h2>

						<ul>

							<li><a href="#">Business</a></li>

							<li><a href="#">Design</a></li>

							<li><a href="#">Developer</a></li>

							<li><a href="#">IT Solution</a></li>

						</ul>

					</div>

					<div class="widget widget_recent_data">

						<div class="single-widget-item">

						<h2 class="widget-title">Post Recent</h2>

							<div class="recent-post-item">

								<div class="recent-post-image">

									<a href="#"><img  src="{{ asset('assets/images/recent-thumb-01.jpg') }}" alt=""></a>

								</div>

								<div class="recent-post-text">

									<h4><a href="#">Savez-vous comment réussira-t-il quand il se présentera ?</a></h4>

									<span class="rcomment">26 Juin, 2021</span>

								</div>

							</div>

							<div class="recent-post-item">

								<div class="recent-post-image">

									<a href="#"><img  src="{{ asset('assets/images/recent-thumb-02.jpg') }}" alt=""></a>

								</div>

								<div class="recent-post-text">

									<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>

									<span class="rcomment">26 Juin, 2021</span>

								</div>

							</div>

							<div class="recent-post-item">

								<div class="recent-post-image">

									<a href="#"><img  src="{{ asset('assets/images/recent-thumb-03.jpg') }}" alt=""></a>

								</div>

								<div class="recent-post-text">

									<h4><a href="#">Lorem ipsum dolor sit amet.	</a></h4>

									<span class="rcomment">26 Juin, 2021</span>

								</div>

							</div>

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

			</div>



		</div>

	</div>

</div>

@endsection

