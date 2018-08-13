<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Détails propriétés - Imoforse</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">

<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/plugins/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href="{{ asset('/colors/color9.css') }}" rel="stylesheet" type="text/css">

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
<script src="{{ asset('/js/modernizr.js') }}"></script><!-- Modernizr -->
</head>
<body>
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
              <li class="dropdown"><a data-toggle="dropdown"><i class="fa fa-user"></i> Login <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('/myProperties') }}">My properties</a></li>
                  <li><a href="{{ url('/submit')}}">Ajouter une propriété</a></li>
                  <li><a href="edit-agent-profile.php">My Profile</a></li>
                </ul>
              </li>
              <li><a href="{{ url('/login')}}"><i class="fa fa-check-circle"></i> Connexion</a></li>
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
            <h1 class="logo"> <a href="{{ url('/')}}"><img src="{{ asset('/images/logo.png') }}" alt="Logo"></a> </h1>
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
                <li><a href="{{ url('/propertyType') }}">Achat/Location</a></li>
                <li><a href="{{ url('/propertyType') }}">Location Saisonnière</a> </li>
                <li><a href="{{ url('/propertyType') }}">Achat de terrain</a> </li>
                <li><a href="{{ url('/galerie') }}">Galérie</a> </li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
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
    <!-- Start Google Map -->
    <div class="clearfix map-single-page" id="gmap"></div>
    <!-- End Google Map -->
  </div>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="single-property">
              <h2 class="page-title">116 Waverly Place, <span class="location">Cocody Riviera</span></h2>
              <div class="price"><span>80000/Mois</span><strong>CFA</strong></div>
              <div class="property-amenities clearfix"> <span class="area"><strong>A</strong>Louer</span> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span></div>
              <div class="property-slider">
                <div id="property-images" class="flexslider">
                  <ul class="slides">
                    <li class="item"> <img src="{{ asset('/images/600x400.png') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/images/600x400.png') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/images/600x400.png') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/images/600x400.png') }}" alt=""> </li>
                  </ul>
                </div>
                <div id="property-thumbs" class="flexslider">
                  <ul class="slides">
                    <li class="item"> <img src="{{ asset('/images/600x400.png') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/images/600x400.png') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/images/600x400.png') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/images/600x400.png') }}" alt=""> </li>
                  </ul>
                </div>
              </div>
              <div class="tabs">
                <ul class="nav nav-tabs">
                  <li class="active"> <a data-toggle="tab" href="#description"> Description </a> </li>
                  <li> <a data-toggle="tab" href="#amenities"> Infos supplémentaires </a> </li>
                </ul>
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed. Maecenas quis eget tellus dui. Vivamus condimentum egestas.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod sollicitudin nunc, eget pretium massa. Ut sed adipiscing enim, pellentesque ultrices erat. Integer placerat felis neque, et semper augue ullamcorper in. Pellentesque iaculis leo iaculis aliquet ultrices. Suspendisse potenti. Aenean ac magna faucibus, consectetur ligula vel, feugiat est. Nullam imperdiet semper neque eget euismod. Nunc commodo volutpat semper.</p>
                  </div>
                  <div id="amenities" class="tab-pane">
                    	<div class="additional-amenities">
                    		<span class="available"><i class="fa fa-check-square"></i> Air Conditioning</span>
                         <span class="available"><i class="fa fa-check-square"></i> Heating</span>
                         <span class="navailable"><i class="fa fa-check-square"></i> Balcony</span>
                         <span class="available"><i class="fa fa-check-square"></i> Dishwasher</span>
                         <span class="navailable"><i class="fa fa-check-square"></i> Pool</span>
                         <span class="available"><i class="fa fa-check-square"></i> Internet</span>
                         <span class="navailable"><i class="fa fa-check-square"></i> Terrace</span>
                         <span class="available"><i class="fa fa-check-square"></i> Microwave</span>
                         <span class="navailable"><i class="fa fa-check-square"></i> Fridge</span>
                         <span class="navailable"><i class="fa fa-check-square"></i> Cable TV</span>
                         <span class="available"><i class="fa fa-check-square"></i> Security Camera</span>
                         <span class="available"><i class="fa fa-check-square"></i> Toaster</span>
                         <span class="navailable"><i class="fa fa-check-square"></i> Grill</span>
                         <span class="navailable"><i class="fa fa-check-square"></i> Oven</span>
                         <span class="available"><i class="fa fa-check-square"></i> Fans</span>
                     	</div>
                  </div>
                </div>
              </div>
              <h3>Agent</h3>
              <div class="agent">
              		<div class="row">
                    	<div class="col-md-4">
                        	<img src="{{ asset('/images/600x400.png') }}" alt="Mia Kennedy">
                     	</div>
                    	<div class="col-md-8">
                      	<h4><a href="agent-single.php">Mia Keneddy</a></h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed. Maecenas quis eget tellus dui. Vivamus condimentum egestas.</p>
                          <div class="agent-contacts clearfix">
                          	<a href="#" class="btn btn-primary pull-right btn-sm">Contact Agent</a>
                           	<ul>
                           		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                	<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                	<li><a href="#"><i class="fa fa-envelope"></i></a></li>
                         		</ul>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!-- Start Annonces similaires -->
            <h3>Annonces similaires</h3>
            <div class="property-grid">
              <ul class="grid-holder col-3">
                <li class="grid-item type-rent">
                  <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                      <h4><a href="#">116 Waverly Place</a></h4>
                      <span class="location">NYC</span>
                      <div class="price"><span>60000/Mois</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span></div>
                  </div>
                </li>
                <li class="grid-item type-buy">
                  <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                      <h4><a href="#">232 East 63rd Street</a></h4>
                      <span class="location">NYC</span>
                      <div class="price"><span>250 000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span></div>
                  </div>
                </li>
                <li class="grid-item type-rent">
                  <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                      <h4><a href="#">55 Warren Street</a></h4>
                      <span class="location">NYC</span>
                      <div class="price"><span>300 000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="sidebar right-sidebar col-md-3">
            <div class="widget sidebar-widget">
              <h3 class="widgettitle">Rechercher un bien</h3>
              <div class="full-search-form">
                  <form action="#">
                      <select name="propery type" class="form-control input-lg selectpicker">
                          <option selected>Type</option>
                        <option>Villa</option>
                        <option>Maison</option>
                        <option>Studio</option>
                        <option>location</option>
                        <option>Appartement</option>
                      </select>
                      <select name="propery contract type" class="form-control input-lg selectpicker">
                          <option selected>Contract</option>
                        <option>Louer</option>
                        <option>Acheter</option>
                      </select>
                      <select name="propery location" class="form-control input-lg selectpicker">
                          <option selected>Localisation</option>
                        <option>Abidjan</option>
                        <option>Grand Bassam</option>
                      </select>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> rechercher</button>
                </form>
              </div>
            </div>
            <div class="widget sidebar-widget featured-properties-widget">
              <h3 class="widgettitle">Featured Properties</h3>
              <ul class="owl-carousel owl-alt-controls1 single-carousel" data-columns="1" data-autoplay="no" data-pagination="no" data-arrows="yes" data-single-item="yes">
                <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                  <div class="property-info">
                    <h4><a href="#">116 Waverly Place</a></h4>
                    <span class="location">NYC</span>
                    <div class="price"><span>2800/Mois</span><strong>CFA</strong></div>
                  </div>
                </li>
                <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                  <div class="property-info">
                    <h4><a href="#">232 East 63rd Street</a></h4>
                    <span class="location">NYC</span>
                    <div class="price"><span>250000</span><strong>CFA</strong></div>
                  </div>
                </li>
                <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                  <div class="property-info">
                    <h4><a href="#">55 Warren Street</a></h4>
                    <span class="location">NYC</span>
                    <div class="price"><span>300000</span><strong>CFA</strong></div>
                  </div>
                </li>
                <li class="item property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/images/600x400.png') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                  <div class="property-info">
                    <h4><a href="#">459 West Broadway</a></h4>
                    <span class="location">NYC</span>
                    <div class="price"><span>3100/Mois</span><strong>CFA</strong></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Site Footer -->
  <footer class="site-footer">
      <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Latest News</h3>
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
                <h3 class="widgettitle">Useful Links</h3>
               <ul>
                <li><a href="submit.php">Add your listing</a></li>
                <li><a href="login.php">Become an agent</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="shortcodes.php">Theme features</a></li>
               </ul>
           </div>
            <div class="col-md-3 col-sm-6 footer-widget widget">
              <h3 class="widgettitle">Twitter Updates</h3>
                  <ul class="twitter-widget"></ul>
           </div>
            <div class="col-md-3 col-sm-6 footer-widget widget">
                <h3 class="widgettitle">Our Newsletter</h3>
               	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
               	<form method="post" id="newsletterform" name="newsletterform" class="newsletter-form" action="mail/newsletter.php">
                  	<input type="email" name="nl-email" id="nl-email" placeholder="Enter your email" class="form-control">
                  	<input type="submit" name="nl-submit" id="nl-submit" class="btn btn-primary btn-block btn-lg" value="Subscribe">
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
<script src="{{ asset('/js/jquery-2.0.0.min.js') }}"></script>
<script src="{{ asset('/plugins/prettyphoto/js/prettyphoto.js') }}"></script>
<script src="{{ asset('/plugins/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/plugins/flexslider/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('/js/helper-plugins.js') }}"></script>
<script src="{{ asset('/js/bootstrap.js') }}"></script>
<script src="{{ asset('/js/waypoints.js') }}"></script>
<script src="{{ asset('/js/init.js') }}"></script> <!-- All Scripts -->
<!--[if lte IE 9]><script src="js/script_ie.js"></script><![endif]-->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> <!-- Google Map -->
<script type="text/javascript">
        function PropertiesMap() {

            /* Properties Array */
            var properties = [
                { title:"116 Waverly Place",  price:"<strong>$</strong><span>2,800 monthly</span>",  lat:40.73238,  lng:-73.99948,  thumb:"images/property1-map.jpg",  url:"property-details.php",  icon:"images/map-marker.png", }

				];

            /* Map Center Location - From Theme Options */
            var location_center = new google.maps.LatLng(properties[0].lat,properties[0].lng);

            var mapOptions = {
                zoom: 4,
				center: new google.maps.LatLng(properties[0].lat,properties[0].lng),
				scrollwheel: false
            }

            var map = new google.maps.Map(document.getElementById("gmap"), mapOptions);

            var markers = new Array();
            var info_windows = new Array();

            for (var i=0; i < properties.length; i++) {

                markers[i] = new google.maps.Marker({
                    position: map.getCenter(),
					map: map,
                    icon: properties[i].icon,
                    title: properties[i].title,
                    animation: google.maps.Animation.DROP
                });

                bounds.extend(markers[i].getPosition());

                info_windows[i] = new google.maps.InfoWindow({
                    content:    '<div class="map-property">'+
                        '<h4 class="property-title"><a class="title-link" href="'+properties[i].url+'">'+properties[i].title+'</a></h4>'+
                        '<a class="property-featured-image" href="'+properties[i].url+'"><img class="property-thumb" src="'+properties[i].thumb+'" alt="'+properties[i].title+'"/></a>'+
                        '<p><span class="price">'+properties[i].price+'</span></p>'+
                        '<a class="btn btn-primary btn-sm" href="'+properties[i].url+'">Details</a>'+
                        '</div>'
                });

                attachInfoWindowToMarker(map, markers[i], info_windows[i]);
            }

            map.fitBounds(bounds);

            /* function to attach infowindow with marker */
            function attachInfoWindowToMarker( map, marker, infoWindow ){
                google.maps.event.addListener( marker, 'click', function(){
                    infoWindow.open( map, marker );
                });
            }

        }

        google.maps.event.addDomListener(window, 'load', PropertiesMap);
    </script>
</body>
</html>
