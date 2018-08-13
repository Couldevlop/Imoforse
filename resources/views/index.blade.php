<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Imoforse</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">

<link href="{{ asset('/css/bootstrap.css') }} " rel="stylesheet" type="text/css">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/owl-carousel/css/owl.carousel.css') }} " rel="stylesheet" type="text/css">
<link href=" {{ asset('/plugins/owl-carousel/css/owl.theme.css')}} " rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href=" {{ asset('/colors/color9.css')}} " rel="stylesheet" type="text/css">

<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/app/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/app/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/app/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/app/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/app/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/app/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/app/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/app/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/app/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/app/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/app/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/app/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/app/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('images/app/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('images/app/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">
<!-- SCRIPTS
  ================================================== -->
<script src=" {{ asset('/js/modernizr.js')}} "></script><!-- Modernizr -->
</head>
<body class="home">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
  <!-- Start Site Header -->
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
                <li><a href="{{ url('/propertyType') }}">Achat/Location</a> </li>
                <li><a href="{{ url('/propertyType') }}">Location saisonnière</a></li>
                <li><a href="{{ url('/propertyType') }}">Achat de Terrain</a></li>
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
  <!-- End Site Header -->
  <!-- Site Showcase -->
  <div class="site-showcase">
    <div class="slider-mask overlay-transparent"></div>
    <!-- Start Hero Slider -->
    <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
      <ul class="slides">
        <li class=" parallax" style="background-image:url('{{ asset('images/slider/01.jpg') }}')">
          <div class="flex-caption">
              <strong class="title">1671 Grand Avenue, <em>NYC</em></strong>
             <div class="price"><span>100 000</span><strong>CFA</strong></div>
             <a href="{{ url('/propertyDetail') }}" class="btn btn-primary btn-block">Details</a>
              <div class="hero-agent">
                  <img src="{{ asset('images/365x365.png') }}" alt="" class="hero-agent-pic">
                  <a href="{{ url('/agentDetail') }}" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
             </div>
          </div>
        </li>
        <li class="parallax" style="background-image:url('{{ asset('images/slider/02.jpg') }} ')">
          <div class="flex-caption">
              <strong class="title">1671 Grand Avenue, <em>NYC</em></strong>
             <div class="price"><span>100 000</span><strong>CFA</strong></div> <a href="{{ url('/propertyDetail') }}" class="btn btn-primary btn-block">Details</a>
              <div class="hero-agent">
                  <img src="{{ asset('images/365x365.png') }}" alt="" class="hero-agent-pic">
                  <a href="{{ url('/agentDetail') }}" class="hero-agent-contact" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Contact Agent"><i class="fa fa-envelope"></i></a>
              </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- End Hero Slider -->
    <!-- Site Search Module -->
    <div class="site-search-module">
      <div class="container">
        <div class="site-search-module-inside">
          <form action="#">
            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                    <select name="propery type" class="form-control input-lg selectpicker">
                        <option selected>Type de propriété</option>
                      	<option>Villa</option>
                      	<option>Maison</option>
                      	<option>Location</option>
                      	<option>Appartement</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="propery contract type" class="form-control input-lg selectpicker">
                        <option selected>Type de Contrat</option>
                      <option>Louer</option>
                      <option>Acheter</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="propery location" class="form-control input-lg selectpicker">
                        <option selected>Localisation</option>
                      <option>Abidjan</option>
                      <option>Grand Bassam</option>
                    </select>
                </div>
                <div class="col-md-2"> <button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-search"></i> Rechercher</button> </div>
                <div class="col-md-2"> <a href="#" id="ads-trigger" class="btn btn-default btn-block"><i class="fa fa-plus"></i> <span>Avancée</span></a> </div>
              </div>
              <div class="row hidden-xs hidden-sm">
                <div class="col-md-2">
                  <label>Min Chambres</label>
                    <select name="beds" class="form-control input-lg selectpicker">
                      <option>Any</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label>Min Douches</label>
                    <select name="beds" class="form-control input-lg selectpicker">
                      <option>Any</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label>Min Prix</label>
                    <select name="beds" class="form-control input-lg selectpicker">
                      <option>Peu importe</option>
                      <option>1000CFA</option>
                      <option>5000CFA</option>
                      <option>10000CFA</option>
                      <option>50000CFA</option>
                      <option>100000CFA</option>
                      <option>500000CFA</option>
                      <option>1000000CFA</option>
                      <option>3000000CFA</option>
                      <option>5000000CFA</option>
                      <option>10000000CFA</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label>Max Prix</label>
                    <select name="beds" class="form-control input-lg selectpicker">
                      <option>Peu importe</option>
                      <option>1000CFA</option>
                      <option>5000CFA</option>
                      <option>10000CFA</option>
                      <option>50000CFA</option>
                      <option>100000CFA</option>
                      <option>500000CFA</option>
                      <option>1000000CFA</option>
                      <option>3000000CFA</option>
                      <option>5000000CFA</option>
                      <option>10000000CFA</option>
                    </select>
                </div>
                <div class="col-md-2">
                  <label>Min Superficie (Sq Ft)</label>
                  <input type="text" class="form-control input-lg" placeholder="tout">
                </div>
                <div class="col-md-2">
                  <label>Max Superficie (Sq Ft)</label>
                  <input type="text" class="form-control input-lg" placeholder="tout">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="featured-blocks">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 featured-block"> <img src="{{ asset('images/600x600.png') }}" alt="Search Anywhere" class="img-thumbnail">
              <h3>Rechercher un bien</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
            <div class="col-md-4 col-sm-4 featured-block"> <img src="{{ asset('images/600x600.png') }}" alt="Friendly Agents" class="img-thumbnail">
              <h3>Agents amicaux</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
            <div class="col-md-4 col-sm-4 featured-block"> <img src="{{ asset('images/600x600.png') }}" alt="Search Anywhere" class="img-thumbnail">
              <h3>Acheter ou louer</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer-40"></div>
    <div class="container">
      <div class="row">
          <div class="property-columns" id="latest-properties">
              <div class="col-md-12">
                <div class="block-heading">
                  <h4><span class="heading-icon"><i class="fa fa-leaf"></i></span>Annonces récentes</h4>
                  <a href="simple-listing-fw.php" class="btn btn-primary btn-sm pull-right">Voir plus de propriétés <i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
              <ul>
                <li class="col-md-4 col-sm-6 type-rent">
                      <div class="property-block">
                          <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                              <img src="{{ asset('images/600x400.png') }}" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Louer</span>
                          </a>
                      <div class="property-info">
                              <h4><a href="{{ url('/propertyDetail') }}">116 Waverly Place</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><span>2800 Monthly</span><strong>CFA</strong></div>
                      </div>
                      <div class="property-amenities clearfix">
                              <span class="area"><strong>5000</strong>m2</span>
                              <span class="baths"><strong>3</strong>Douches</span>
                              <span class="beds"><strong>3</strong>Chambres</span>
                              <span class="parking"><strong>3</strong>Cuisines</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-buy">
                      <div class="property-block">
                          <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                          <img src="{{ asset('images/600x400.png') }}" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Acheter</span>
                          </a>
                          <div class="property-info">
                              <h4><a href="{{ url('/propertyDetail') }}">232 East 63rd Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><span>250000</span><strong>CFA</strong></div>
                          </div>
                          <div class="property-amenities clearfix">
                              <span class="area"><strong>5000</strong>m2</span>
                              <span class="baths"><strong>3</strong>Douches</span>
                              <span class="beds"><strong>3</strong>Chambres</span>
                              <span class="parking"><strong>3</strong>Cuisines</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-rent">
                      <div class="property-block">
                          <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                              <img src="{{ asset('images/600x400.png') }}" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Acheter</span>
                          </a>
                          <div class="property-info">
                                  <h4><a href="{{ url('/propertyDetail') }}">55 Warren Street</a></h4>
                                  <span class="location">NYC</span>
                                  <div class="price"><span>300000</span><strong>CFA</strong></div>
                          </div>
                          <div class="property-amenities clearfix">
                              <span class="area"><strong>5000</strong>m2</span>
                              <span class="baths"><strong>3</strong>Douches</span>
                              <span class="beds"><strong>3</strong>Chambres</span>
                              <span class="parking"><strong>3</strong>Cuisines</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-rent">
                      <div class="property-block">
                      <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                          <img src="{{ asset('images/600x400.png') }}" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Louer</span>
                          </a>
                      <div class="property-info">
                              <h4><a href="{{ url('/propertyDetail') }}">459 West Broadway</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><span>3100 Monthly</span><strong>CFA</strong></div>
                      </div>
                      <div class="property-amenities clearfix">
                          <span class="area"><strong>5000</strong>m2</span>
                              <span class="baths"><strong>3</strong>Douches</span>
                              <span class="beds"><strong>3</strong>Chambres</span>
                              <span class="parking"><strong>3</strong>Cuisines</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-buy">
                      <div class="property-block">
                      <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                              <img src="{{ asset('images/600x400.png') }}" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Acheter</span>
                          </a>
                      <div class="property-info">
                              <h4><a href="{{ url('/propertyDetail') }}">70 Greene Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><span>500000</span><strong>CFA</strong></div>
                      </div>
                      <div class="property-amenities clearfix">
                          <span class="area"><strong>5000</strong>m2</span>
                          <span class="baths"><strong>3</strong>Douches</span>
                          <span class="beds"><strong>3</strong>Chambres</span>
                          <span class="parking"><strong>3</strong>Cuisines</span>
                          </div>
                      </div>
                </li>
                <li class="col-md-4 col-sm-6 type-rent">
                      <div class="property-block">
                      <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                          <img src="{{ asset('images/600x400.png') }}" alt="">
                              <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                              <span class="badges">Louer</span>
                          </a>
                      <div class="property-info">
                              <h4><a href="{{ url('/propertyDetail') }}">115 Allen Street</a></h4>
                              <span class="location">NYC</span>
                              <div class="price"><span>5000 Monthly</span><strong>CFA</strong></div>
                      </div>
                      <div class="property-amenities clearfix">
                          <span class="area"><strong>5000</strong>m2</span>
                          <span class="baths"><strong>3</strong>Douches</span>
                          <span class="beds"><strong>3</strong>Chambres</span>
                          <span class="parking"><strong>3</strong>Cuisines</span>
                          </div>
                      </div>
                </li>
              </ul>
          </div>
        </div>
      </div>
      <div id="featured-properties">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-heading">
                <h4><span class="heading-icon"><i class="fa fa-star"></i></span>Propriétés en vedette</h4>
              </div>
            </div>
          </div>
          <div class="row">
              <ul class="owl-carousel owl-alt-controls" data-columns="4" data-autoplay="no" data-pagination="no" data-arrows="yes" data-single-item="no">
                  <li class="item property-block">
                      <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                      <img src="{{ asset('images/600x400.png') }}" alt="">
                      <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                      <span class="badges">Louer</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="{{ url('/propertyDetail') }}">116 Waverly Place</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><span>2800 Monthly</span><strong>CFA</strong></div>
                      </div>
                  </li>
                  <li class="item property-block">
                  <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                      <img src="{{ asset('images/600x400.png') }}" alt="">
                      <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Acheter</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="{{ url('/propertyDetail') }}">232 East 63rd Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><span>250000</span><strong>CFA</strong></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                          <img src="{{ asset('images/600x400.png') }}" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Acheter</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="{{ url('/propertyDetail') }}">55 Warren Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><span>300000</span><strong>CFA</strong></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                          <img src="{{ asset('images/600x400.png') }}" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Louer</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="{{ url('/propertyDetail') }}">459 West Broadway</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><span>3100 Monthly</span><strong>CFA</strong></div>
                      </div>
                  </li>
                  <li class="item property-block">
                  <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                          <img src="{{ asset('images/600x400.png') }}" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Acheter</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="{{ url('/propertyDetail') }}">70 Greene Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><span>500000</span><strong>CFA</strong></div>
                      </div>
                  </li>
                  <li class="item property-block">
                      <a href="{{ url('/propertyDetail') }}" class="property-featured-image">
                          <img src="{{ asset('images/600x400.png') }}" alt="">
                          <span class="images-count"><i class="fa fa-picture-o"></i> 2</span>
                          <span class="badges">Louer</span>
                      </a>
                      <div class="property-info">
                          <h4><a href="{{ url('/propertyDetail') }}">115 Allen Street</a></h4>
                          <span class="location">NYC</span>
                          <div class="price"><span>5000 Monthly</span><strong>CFA</strong></div>
                      </div>
                  </li>
              </ul>
          </div>
        </div>
      </div>
      <div class="padding-tb45 bottom-blocks">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-4 features-list column">
                      <h3>Pourquoi nous choisir ?</h3>
                    <ul>
                      <li>
                              <div class="icon"><i class="fa fa-umbrella"></i></div>
                           <div class="text">
                                  <h4>Lots of possibilities</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-list"></i></div>
                           <div class="text">
                                  <h4>Property list view</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-search"></i></div>
                           <div class="text">
                                  <h4>Recherche avancée</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                      <li>
                              <div class="icon"><i class="fa fa-users"></i></div>
                           <div class="text">
                                  <h4>Agents Profile</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           </div>
                       </li>
                    </ul>
                </div>
                  <div class="col-md-4 col-sm-4 popular-agent column">
                      <h3>Nos Agents</h3>
                    <a href="{{ url('/agentDetail')}}"><img src="{{ asset('/images/600x400.png') }}" alt="" class="img-thumbnail"></a>
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <h4><a href="agent-detail.php">Brooklyn Coyle</a></h4>
                              <a href="agent-detail.php" class="btn btn-sm btn-primary">Plus d'infos</a>
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-6">
                              <ul class="contact-info">
                                  <li><i class="fa fa-phone"></i> +225 6543 210</li>
                               <li><i class="fa fa-envelope"></i> brook@gmail.com</li>
                           </ul>
                       </div>
                    </div>
                </div>
                  <div class="col-md-4 col-sm-4 latest-testimonials column">
                      <h3>Témoignages</h3>
                    <ul class="testimonials">
                      <li>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                          <img src="{{ asset('/images/80x80.png') }}" alt="Happy Client" class="testimonial-sender">
                              <cite>Mellisa - <strong>My company</strong>
                              <br><a href="#">www.companyurl.com</a>
                           </cite>
                        </li>
                    </ul>
                </div>
             </div>
         </div>
      </div>
     	<div class="container">
         <div class="block-heading">
            <h4><span class="heading-icon"><i class="fa fa-users"></i></span>Nos Partenaires</h4>
            <a href="about.php" class="btn btn-primary btn-sm pull-right">Voir tout <i class="fa fa-long-arrow-right"></i></a>
         </div>
         <div class="row">
            <ul class="owl-carousel" id="clients-slider" data-columns="6" data-autoplay="yes" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="2" data-items-tablet="4">
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-1.png') }}" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-2.png') }}" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-3.png') }}" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-4.png') }}" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-5.png') }}" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-1.png') }}" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-2.png') }}" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-3.png') }}" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-4.png') }}" alt=""></a> </li>
              <li class="item"> <a href="#"><img src="{{ asset('images/partner-5.png') }}" alt=""></a> </li>
            </ul>
         </div>
      </div>
    </div>
  </div>
  <!-- Start Site Footer -->
  <footer class="site-footer">
      <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Imoforse</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil repellat sit enim voluptas ad id ut nemo similique nobis minus autem impedit.</p>
                  <ul>
                    <li><i class="fa fa-phone"></i> (+225) 22 00 00 00</li>
                    <li><i class="fa fa-envelope"></i> infos@imoforse.net</li>
                    <li><i class="fa fa-map-marker"></i> Cocody Riviera Faya </li>
                    <li></li>
                  </ul>
                  </ul>
              </div>
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Liens utiles</h3>
               <ul>
                <li><a href="{{ url('/about')}}">A Propos</a></li>
                <li><a href="{{ url('/submit')}}">Publier une annonce</a></li>
                <li><a href="{{ url('/login')}}">Become an agent</a></li>
                <li><a href="{{ url('/contact')}}">Contact</a></li>
               </ul>
           </div>
            <div class="col-md-3 col-sm-6 footer-widget widget">
              <h3 class="widgettitle">Articles récents</h3>
                  <!--<ul class="twitter-widget"></ul>-->
                  <ul>
                      <li>
                          <a href="blog-post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                          <span class="meta-data">1 March, 2014</span>
                      </li>
                      <li>
                      <a href="blog-post.php">Lorem ipsum dolor sit amet elit, consectetur adipiscing.</a>
                          <span class="meta-data">28 February, 2014</span>
                      </li>
                      <li>
                      <a href="blog-post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                          <span class="meta-data">26 February, 2014</span>
                      </li>
                  </ul>
           </div>
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Newsletter</h3>
               	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
               	<form method="post" id="newsletterform" name="newsletterform" class="newsletter-form" action="mail/newsletter.php">
                  	<input type="email" name="nl-email" id="nl-email" placeholder="Entrer votre email" class="form-control">
                  	<input type="submit" name="nl-submit" id="nl-submit" class="btn btn-primary btn-block btn-lg" value="S'Abonner'">
               	</form>
              	<div class="clearfix"></div>
              	<div id="nl-message"></div>
           </div>
       </div>
   </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; 2014 RealSpaces. All Rights Reserved</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
          <div class="social-icons">
              <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
             <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
             <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
             <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
             <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-youtube"></i></a>
             <a href="#"><i class="fa fa-rss"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Site Footer -->
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
<script src="{{ asset('/js/jquery-2.0.0.min.js')}} "></script>
<script src="{{ asset('/plugins/prettyphoto/js/prettyphoto.js')}} "></script>
<script src="{{ asset('/plugins/owl-carousel/js/owl.carousel.min.js')}} "></script>
<script src="{{ asset('/plugins/flexslider/js/jquery.flexslider.js')}} "></script>
<script src="{{ asset('/js/helper-plugins.js')}} "></script>
<script src="{{ asset('/js/bootstrap.js')}} "></script>
<script src="{{ asset('/js/waypoints.js')}} "></script>
<script src="{{ asset('/js/init.js')}} "></script> <!-- All Scripts -->
<!--[if lte IE 9]><script src="js/script_ie.js"></script><![endif]-->
</body>
</html>
