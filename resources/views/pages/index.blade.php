@extends('layouts.app')

@section('content')
<div class="witr_swiper_area">
    <div class="swiper-container witr_active_id5">
        <div class="swiper-wrapper">
            <div class="swiper-slide witr_swiper_height swiper-slide-prev"
                    style="background-image: url(assets/images/rectifie-bleu-1.jpg); height: 100vh;">
                    <!-- witr_show_animate -->
                <div class="witr_sw_text_area text-left">
                    <div class="witr_swiper_content">
                        <h1 style="font-family: 'Montserrat', sans-serif;" id="typed"></h1>
                        <h2 style="font-family: 'Montserrat', sans-serif;">Aly<br>Cartouche <br><span style="color: yellow;"> Digitale</span></h2>
                    </div>
                </div>

            </div>
            <div class="swiper-slide witr_swiper_height swiper-slide-prev"
                style="background-image: url(assets/images/rectifie-rouge-1.jpg); height: 100vh;">
                <!-- witr_show_animate -->
                <div class="witr_sw_text_area text-left">
                    <div class="witr_swiper_content">
                        <h1 style="font-family: 'Montserrat', sans-serif;" id="typed2"></h1>
                        <h2 style="font-family: 'Montserrat', sans-serif;">Aly<br>Cartouche <br><span style="color: yellow;"> Digitale</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-scrollbar"></div>
        <div class="swiper-paginatio"></div>
        <div class="swiper-button-next swiper-button-disabled"></div>
        <div class="swiper-button-prev"></div>
        <span class="swiper-notification"></span>
    </div>
</div>

<!-- beitor_serivce_area -->
<div class="beitor_serivce_bg_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="witr_section_title">
                    <div class="witr_section_title_inner text-left">
                        <h2>Nos services</h2>
                        <h3>Decouvrez notre palette de services</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="title_inner_contect">
                    <p>“Nous avons soigneusement selectionnés des services pour répondre à vos besoins numériques. faites votre choix, nous nous chargeons de la mise en oeuvre.
                    </p>
                </div>
            </div>
        </div>
        <div class="witr_cfeature1 feature_active text-left service_top">
            <div class="witr_islidess_slick witr_cfeature_idps">
                <!-- beitor_serivce_01 -->
                <div class="col-lg-12">
                    <div class="sub-border-2 all_feature_color ">
                        <div class="sub-item ">
                            <span>01</span>
                            <i class="far fa-calendar-alt"></i>
                            <h3><a href="{{route('developpement-web-et-mobile')}}">Conception de site web & Applications</a></h3>
                            <p>"Besoin d'une plateforme web ou mobile, Notre équipe de développeurs vous accompagne avec...</p>

                            <div class="feature_btn">
                                <a href="{{route('developpement-web-et-mobile')}}">Lire Plus</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- beitor_serivce_02 -->
                <div class="col-lg-12">
                    <div class="sub-border-2 all_feature_color">
                        <div class="sub-item ">
                            <span>02</span>
                            <i class="fas fa-chart-bar"></i>
                            <h3><a href="{{route('couverture-media')}}">Evénementiel</a></h3>
                            <p>"Nous concevons et implémentons vos projets d’évènementiels institutionnels et grand
                                public...</p>
                            <div class="feature_btn">
                                <a href="{{route('couverture-media')}}">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- beitor_serivce_03 -->
                <div class="col-lg-12">
                    <div class="sub-border-2 all_feature_color ">
                        <div class="sub-item ">
                            <span>03</span>
                            <i class="fas fa-signal"></i>
                            <h3><a href="{{route('gestion.reseaux')}}">Gestion des réseaux sociaux</a></h3>
                            <p>"Chez Aly Cartouche Digitale, notre stratégie en matière de réseaux sociaux consiste à créer avec... </p>
                            <div class="feature_btn">
                                <a href="{{route('gestion.reseaux')}}">Lire Plus</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- beitor_serivce_04 -->
                <div class="col-lg-12">
                    <div class="sub-border-2 all_feature_color "><br>
                        <div class="sub-item ">
                            <span>04</span>
                            <i class="fas fa-sitemap"></i>
                            <h3><a href="pricing-plan.html">Création d'identité visuelle</a></h3>
                            <p>"Nous concevons des expériences inoubliables pour vos consommateurs à travers des...</p>
                            <div class="feature_btn">
                                <a href="{{route('identite-visuelle')}}">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- beitor_serivce_05 -->
                <div class="col-lg-12">
                    <div class="sub-border-2 all_feature_color ">
                        <div class="sub-item ">
                            <span>05</span>
                            <i class="fas fa-recycle"></i>
                            <h3><a href="{{route('formation.coatching')}}"> Formation & Coaching</a></h3>
                            <p>"Vous souhaitez faire progresser et augmenter votre performance professionnelle ? <br>
                                Nos experts vous...</p>
                            <div class="feature_btn">
                                <a href="{{route('formation.coatching')}}">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- beitor_about_area -->
<div class="beitor_about_area">
    <div class="container">
        <div class="row about">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="single_image_area">
                    <div class="single_image">
                        <img src="{{ asset('assets/images/ac.jpg') }}" alt="Image">
                        <div class="witr_tx_ovei_title"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="thumb_btn">
                            <h1 class="text-white">+5 ANNÉES D'EXPÉRIENCE</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="witr_section_lf">
                    <div class="witr_section_title">
                        <div class="witr_section_title_inner text-left">
                            <h2>À propos de nous</h2>
                            <h3>Une équipe jeune et dynamique</h3>
                        </div>
                    </div>
                    <div class="row about_service">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="em-service2 sleft all_color_service">
                                <div class="em_service_content ">
                                    <div class="em_single_service_text  ">
                                        <div class="service_top_image"></div>
                                        <div class="text_box">
                                            <div class="service_top_text all_icon_color">
                                                <div class="em-service-icon">
                                                    <img src="{{ asset('assets/images/ab-icon-1.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="em-service-inner">
                                                <div class="em-service-title">
                                                    <h3>Notre objectif</h3>
                                                </div>
                                                <div class="em-service-desc">
                                                    <p>Vous accompagner dans votre processus de transformation digitale.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="em-service2 sleft all_color_service">
                                <div class="em_service_content ">
                                    <div class="em_single_service_text  ">
                                        <div class="service_top_image"></div>
                                        <div class="text_box">
                                            <div class="service_top_text all_icon_color">
                                                <div class="em-service-icon">
                                                    <img src="{{ asset('assets/images/ab-icon-2.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="em-service-inner">
                                                <div class="em-service-title">
                                                    <h3>Notre Vision </h3>
                                                </div>
                                                <div class="em-service-desc">
                                                    <p>Promouvoir les nouvelles technologies d'information et communication en Afrique.</p>
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
    </div>
</div>

<!-- beitor_call_to_area -->
<div class="beitor_call_to_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <div class="witr_section_title white">
                    <div class="witr_section_title_inner text-left">
                        <h3>Nous sommes disponible en ligne 24h/24</h3>
                    </div>
                </div>
                <div class="row call_top">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="em-service2 sleft all_color_service white">
                            <div class="em_service_content ">
                                <div class="em_single_service_text width_height_link_0 ">
                                    <div class="service_top_image"></div>
                                    <div class="text_box">
                                        <div class="service_top_text all_icon_color">
                                            <div class="em-service-icon">
                                                <i class="icofont-ui-call"></i>
                                            </div>
                                        </div>
                                        <div class="em-service-inner">
                                            <div class="em-service-title">
                                                <h3>Appelez-nous au (+225) 0153533896 </h3>
                                            </div>
                                            <div class="em-service-title">

                                            </div>
                                            <div class="em-service-desc"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12">
                <div class="witr_button_area white">
                    <div class="witr_btn_style mr">
                        <div class="witr_btn_sinner">
                            <a href="{{route('contactez-nous')}}" class="witr_btn">CONTACTEZ-NOUS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center mt-4">
    <h3>ILS NOUS FONT CONFIANCE</h3>
</div>

<!-- witr_brand_area -->
<div class="witr_brand_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="imagess_area wittr_car_top_left">
                    <div class="witr_car_overlay brand_imagess_active">
                        <div class="slide_items">
                            <img src="assets/images/alyimprim.png" alt="" />
                        </div>
                        <div class="slide_items">
                            <img src="assets/images/peb.png" alt="" />
                        </div>
                        <div class="slide_items">
                            <img src="assets/images/sponsor.jpg" alt="" />
                        </div>
                        <div class="slide_items">
                            <img src="assets/images/mtn.png" alt="" />
                        </div>
                        <div class="slide_items">
                            <img src="assets/images/port.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

