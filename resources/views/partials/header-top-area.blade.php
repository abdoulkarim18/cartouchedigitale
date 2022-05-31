<div class="em40_header_area_main">
    <!-- HEADER TOP AREA -->
    <div class="beitor-header-top">
        <div class="container">
            <div class="row">
                <!-- TOP LEFT -->
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="top-address">
                        <p>
                            <span><i class="fas fa-home"></i>Votre agence de référence</span>
                            <span><i class="fas fa-phone-alt"></i> +225 0153533896</span>
                            <span><i class="fas fa-envelope"></i> info@alycartouche.ci</span>
                        </p>
                    </div>
                </div>
                <!-- TOP RIGHT -->
                <div class="col-lg-4 col-md-3 col-sm-12 ">
                    <div class="top-right-menu">
                        <ul class="social-icons text-right text_m_center">
                            <li><a href="//www.facebook.com/Cartouchedigitale" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC7cL9rGYxUz7rKCzYFdyqpQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/alycartouchedigitale" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/aly-cartouche-digitale/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tx_top2_relative">
        <div class="">
            <div class="tx_relative_m">
                <div class="">
                    <div class="mainmenu_width_tx  ">
                        <div class="beitor-main-menu one_page menu4 hidden-xs hidden-sm transprent-menu heading_style_5 witr_h_h3"
                            style="z-index: auto; position: relative; top: 0px;">
                            <div class="beitor_nav_area scroll_fixed bdbar postfix">
                                <div class="container">
                                    <div class="row logo-left">
                                        <!-- LOGO -->
                                        <div class="col-md-3 col-sm-3 col-xs-4">
                                            <div class="logo">
                                                <a href="{{route('index')}}" title="Aly Cartouche Digitale">
                                                    <img src="{{ asset('assets/images/logo1.png') }}" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- END LOGO -->
                                        <div class="col-md-9 col-sm-9 col-xs-8">
                                            <nav class="beitor_menu">
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('index') }}">Accueil</a>
                                                    </li>

                                                    <li class="menu-item-has-children">
                                                        <a href="#">Présentation</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ route('a-propos-de-nous') }}">A propos de nous</a></li>
                                                            <li><a href="{{ route('pourqoui-nous-choisir') }}">Pourquoi nous
                                                                    choisir</a></li>
                                                            <li><a href="{{ route('notre-equipe') }}">Notre équipe</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Services</a>
                                                        <ul class="sub-menu">
                                                            @forelse ($cat_services as $cat_service )
                                                            <li>
                                                                <a href="#">{{$cat_service->libelle}}</a>
                                                                @forelse ($cat_service->services as $catservice )
                                                                    <ul class="sub-menu">
                                                                        @foreach($cat_service->services as $catservice)
                                                                            <li>
                                                                                <a href="{{ route('services', $catservice->slug) }}">{{$catservice->title}}
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @empty

                                                                @endforelse
                                                            </li>
                                                            @empty
                                                               <li class="text-white">Aucun Service Disponible</li>
                                                            @endforelse
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('contactez-nous') }}">Contact</a></li>
                                                </ul>
                                                <div class="donate-btn-header">
                                                    <a class="dtbtn" href="#"><i
                                                            class="fas fa-phone-alt"></i>(+225) 0153533896</a>
                                                </div>
                                            </nav>
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
