@extends('layouts.default-sidebar-layout')
@section('title')
    Nos offres - Imoforse
@stop
@section('showcase')

@stop
@section('content')
    <div class="block-heading">
        <h4><span class="heading-icon"><i class="fa fa-th-home"></i></span>[Titre de la page active]</h4>
        <div class="toggle-view pull-right">
            <a href="{{ url('/gridListing') }}"><i class="fa fa-th-large"></i></a>
            <a href="{{ url('/listView') }}" class="active"><i class="fa fa-th-list"></i></a>
        </div>
    </div>
    <div class="property-grid">
        <ul class="grid-holder col-3">
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="#" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Rent</span> </a>
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
@stop
