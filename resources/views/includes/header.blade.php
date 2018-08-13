<header class="site-header">
    <div class="top-header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <ul class="horiz-nav pull-left">
                        <li class="dropdown"><a href="{{ url('/login') }}" data-toggle="dropdown"><i class="fa fa-user"></i> Connexion <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/myProperties')}}">Mes propriétés</a></li>
                                <li><a href=" {{ url('/submit')}} ">Ajouter une propriété</a></li>
                                <li><a href="{{ url('/edit-agent-profile.php') }}">Mon profile</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/register') }}""><i class="fa fa-check-circle"></i> Inscription</a></li>
                    </ul>
                </div>
                <div class="col-md-8 col-sm-6">
                    <ul class="horiz-nav pull-right">
                        <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-8 col-xs-8">
                    <h1 class="logo"> <a href="{{ url('/') }}"><img src="{{ asset('/images/logo.png') }}" alt="Imoforse Logo"></a> </h1>
                </div>
                <div class="col-md-8 col-sm-4 col-xs-4">
                    <div class="contact-info-blocks hidden-sm hidden-xs">
                        <div>
                            <i class="fa fa-phone"></i> Téléphone:
                            <span>00225 08 57 74 64</span>
                        </div>
                        <div>
                            <i class="fa fa-envelope"></i> Email
                            <span>infos@imoforse.com</span>
                        </div>
                        <div>
                            <i class="fa fa-clock-o"></i> Heures d'ouvertures
                            <span>09:00 à 17:00</span>
                        </div>
                    </div>
                    <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navigation">
                        <ul class="sf-menu">
                            <li><a href="{{ url('/') }}">Accueil</a></li>
                            <li><a href="{{ url('/about') }}">A Propos</a></li>
                            <li><a href="{{ url('/achatMaison') }}">Achat/Location</a> </li>
                            <li><a href="{{ url('/locationSaisonniere') }}">Location saisonnière</a></li>
                            <li><a href="{{ url('/venteTerrain') }}">Achat de Terrain</a></li>
                            <li><a href="{{ url('/galerie') }}">Galérie</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a> </li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
