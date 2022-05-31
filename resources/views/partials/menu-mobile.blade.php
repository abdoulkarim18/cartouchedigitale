<!-- MOBILE MENU Logo AREA -->
<div class="mobile_logo_area hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="mobile_menu_logo text-center">
                    <a href="{{route('index')}}" title="logo">
                        <img src="{{ asset('assets/images/logo1.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MOBILE MENU AREA -->
<div class="home-2 mbm hidden-md hidden-lg  header_area main-menu-area">
    <div class="menu_area mobile-menu">
        <nav class="beitor_menu">
            <ul class="sub-menu">
                <li>
                    <a href="{{ route('index') }}">Accueil</a>
                </li>

                <li class="menu-item-has-children">
                    <a href="#">Présentation</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('a-propos-de-nous') }}">A propos de nous</a></li>
                        <li><a href="{{ route('pourqoui-nous-choisir') }}">Pourquoi nous choisir</a></li>
                        <li><a href="{{ route('notre-equipe') }}">Notre équipe</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">Conception de site web</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('developpement-web-et-mobile') }}">Développement d'applications Web & mobiles</a>
                                </li>
                                <li><a href="{{ route('chatbot') }}">Réalisation de chatbot</a></li>
                                <li><a href="{{ route('referencement') }}">Réferencement
                                        naturel et payant</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Evénementiel</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('realisation') }}">Réalisation de film Institutionel</a></li>
                                <li><a href="{{ route('couverture-media') }}">Couverture médias d'événnements</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Gestion des réseaux sociaux</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('publicite') }}">Publicité en ligne</a>
                                </li>
                                <li><a href="{{ route('recuperation-compte') }}">Récuperation de compte</a></li>

                            </ul>
                        </li>
                        <li><a href="{{ route('elaboration-strategie') }}">Elaboration de stratégie digitale
                            </a></li>
                        <li><a href="{{ route('identite-visuelle') }}">Création d'identité Visuelle</a></li>
                        <li><a href="{{ route('lancement-produit') }}">Campagne de lancement de produit</a></li>

                    </ul>
                </li>
                <li><a href="{{ route('contactez-nous') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END MOBILE MENU AREA  -->
