@extends('layouts.view-property-layout')
@section('title')
infos sur la propriétés - Imoforse
@stop
@section('showcase')
    <!--<div class="clearfix map-single-page" id="gmap"></div>-->
@stop
@section('content')
    <div class="single-property">
        <h2 class="page-title">Titre de la propriété, <span class="location">Cocody Riviera</span></h2>
        <div class="price"><span>800.000/Mois</span><strong>CFA</strong></div>
        <div class="property-amenities clearfix"> <span class="area"><strong>A</strong>Louer</span> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span></div>
        <div class="property-slider">
            <div id="property-images" class="flexslider">
                <ul class="slides">
                    <li class="item"> <img src="{{ asset('/data/place/location-saisonniere/img-1.jpg') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/data/place/location-saisonniere/img-2.jpg') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/data/place/location-saisonniere/img-3.jpg') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/data/place/location-saisonniere/img-4.jpg') }}" alt=""> </li>
                </ul>
            </div>
            <div id="property-thumbs" class="flexslider">
                <ul class="slides">
                    <li class="item"> <img src="{{ asset('/data/place/location-saisonniere/img-1.jpg') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/data/place/location-saisonniere/img-2.jpg') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/data/place/location-saisonniere/img-3.jpg') }}" alt=""> </li>
                    <li class="item"> <img src="{{ asset('/data/place/location-saisonniere/img-4.jpg') }}" alt=""> </li>
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
                        <span class="available"><i class="fa fa-check-square"></i> Ventilateur</span>
                        <span class="available"><i class="fa fa-check-square"></i> Chauffage</span>
                        <span class="navailable"><i class="fa fa-check-square"></i> Balcon</span>
                        <span class="available"><i class="fa fa-check-square"></i> Lave-vaisselle</span>
                        <span class="navailable"><i class="fa fa-check-square"></i> Piscine</span>
                        <span class="available"><i class="fa fa-check-square"></i> Internet</span>
                        <span class="navailable"><i class="fa fa-check-square"></i> Terrasse</span>
                        <span class="available"><i class="fa fa-check-square"></i> Four micro onde</span>
                        <span class="navailable"><i class="fa fa-check-square"></i> Frigo</span>
                        <span class="navailable"><i class="fa fa-check-square"></i> TV</span>
                        <span class="available"><i class="fa fa-check-square"></i> Camera de sécurité</span>
                        <span class="available"><i class="fa fa-check-square"></i> Grille-pain</span>
                        <span class="navailable"><i class="fa fa-check-square"></i> Grilles</span>
                        <span class="navailable"><i class="fa fa-check-square"></i> Four</span>
                        <span class="available"><i class="fa fa-check-square"></i> Ventilateurs</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-map">
          <h3>localisation</h3>
            <div class="clearfix map-single-page" id="gmap"></div>
        </div>
        <h3>Agent</h3>
        <div class="agent">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('/data/agents/img-1.jpg') }}" alt="">
                </div>
                <div class="col-md-8">
                    <h4><a href="{{ url('/agentDetail') }}">Mia Keneddy</a></h4>
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
                <div class="property-block"> <a href="{{ url('/properyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/place/location-saisonniere/img-1.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">116 Waverly Place</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>60000/Mois</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span></div>
                </div>
            </li>
            <li class="grid-item type-buy">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/place/location-saisonniere/img-2.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">232 East 63rd Street</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>250 000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span></div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/place/location-saisonniere/img-3.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">55 Warren Street</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>300 000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span><span class="parking"><strong>3</strong>Cuisines</span></div>
                </div>
            </li>
        </ul>
    </div>


    @section('scripts')
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script> <!-- Google Map -->
        <script type="text/javascript">
            function PropertiesMap() {

                /* Properties Array */
                var properties = [
                    { title:"Titre du bien",  price:"<strong>$</strong><span>prix du bien</span>",  lat:5.36395,  lng:-3.92702,  thumb:"{{ asset('/images/property1-map.jpg') }}",  url:"property-details.php",  icon:"{{ asset('/images/map-marker.png') }}", }

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
    @stop
@stop
