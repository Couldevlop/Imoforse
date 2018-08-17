@extends('layouts.default-sidebar-layout')
@section('showcase')
    <!--<div class="clearfix" id="gmap"></div>-->
@stop
@section('content')
    <div class="block-heading">
        <h4><span class="heading-icon"><i class="fa fa-th-large"></i></span>Vues</h4>
        <div class="toggle-view pull-right">
            <a href="{{url('/gridMap')}}" class="active"><i class="fa fa-th-large"></i></a>
            <a href="{{ url('/moreProperty') }}"><i class="fa fa-th-list"></i></a>
        </div>
    </div>
    <div class="property-grid">
        <ul class="grid-holder col-3">
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                        <h4><a href="#">116 Waverly Place</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><strong>$</strong><span>2800 Monthly</span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
                </div>
            </li>
            <li class="grid-item type-buy">
                <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                    <div class="property-info">
                        <h4><a href="#">232 East 63rd Street</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><strong>$</strong><span>250000</span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                    <div class="property-info">
                        <h4><a href="#">55 Warren Street</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><strong>$</strong><span>300000</span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Rent</span> </a>
                    <div class="property-info">
                        <h4><a href="#">459 West Broadway</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><strong>$</strong><span>3100 Monthly</span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
                </div>
            </li>
            <li class="grid-item type-buy">
                <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Buy</span> </a>
                    <div class="property-info">
                        <h4><a href="#">70 Greene Street</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><strong>$</strong><span>500000</span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Rent</span> </a>
                    <div class="property-info">
                        <h4><a href="#">115 Allen Street </a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><strong>$</strong><span>5000 Monthly</span></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>Area</span> <span class="baths"><strong>3</strong>Baths</span> <span class="beds"><strong>3</strong>Beds</span> <span class="parking"><strong>1</strong>Parking</span> </div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="pagination">
        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
    </ul>

    @section('scripts')
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script> <!-- Google Map -->
        <script type="text/javascript">
            function PropertiesMap() {

                /* Properties Array */
                var properties = [
                    { title:"116 Waverly Place",  price:"<strong>$</strong><span>2,800 monthly</span>",  lat:40.73238,  lng:-73.99948,  thumb:"http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER",  url:"property-details.php",  icon:"images/map-marker.png", } ,
                    { title:"232 East 63rd Street",  price:"<strong>$</strong><span>250000</span>",  lat:40.76321,  lng:-73.96334,  thumb:"http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER",  url:"property-details.php",  icon:"images/map-marker.png", } ,
                    { title:"55 Warren Street",  price:"<strong>$</strong><span>300000</span>",  lat:40.71436,  lng:-74.00959,  thumb:"http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER",  url:"property-details.php",  icon:"images/map-marker.png", } ,
                    { title:"459 West Broadway",  price:"<strong>$</strong><span>3100 monthly</span>",  lat:40.72612,  lng:-74.00023,  thumb:"http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER",  url:"property-details.php",  icon:"images/map-marker.png", } ,
                    { title:"70 Greene Street",  price:"<strong>$</strong><span>500000</span>",  lat:40.72318,  lng:-74.00069,  thumb:"http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER",  url:"property-details.php",  icon:"images/map-marker.png", }  ,
                    { title:"115 Allen Street",  price:"<strong>$</strong><span>500000</span>",  lat:40.71961,  lng:-73.99057,  thumb:"http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER",  url:"property-details.php",  icon:"images/map-marker.png", }

                ];

                /* Map Center Location - From Theme Options */
                var location_center = new google.maps.LatLng(properties[0].lat,properties[0].lng);

                var mapOptions = {
                    zoom: 12,
                    scrollwheel: false
                }

                var map = new google.maps.Map(document.getElementById("gmap"), mapOptions);

                var bounds = new google.maps.LatLngBounds();

                var markers = new Array();
                var info_windows = new Array();

                for (var i=0; i < properties.length; i++) {

                    markers[i] = new google.maps.Marker({
                        position: new google.maps.LatLng(properties[i].lat,properties[i].lng),
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
