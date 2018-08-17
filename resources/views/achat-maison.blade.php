@extends('layouts.default-sidebar-layout')
@section('showcase')

@stop
@section('content')
    <div class="block-heading">
        <h4><span class="heading-icon"><i class="fa fa-home"></i></span>[Titre de la page active]</h4>
        <div class="toggle-view pull-right">
            <a href="{{ url('/gridListing') }}"><i class="fa fa-th-large"></i></a>
            <a href="{{ url('/listView') }}" class="active"><i class="fa fa-th-list"></i></a>
        </div>
    </div>
    <div class="property-grid">
        <ul class="grid-holder col-3">
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">116 Waverly Place</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>2800/Mois</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-buy">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">232 East 63rd Street</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>250000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">55 Warren Street</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>300000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">459 West Broadway</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>3100/Mois</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-buy">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">70 Greene Street</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>500000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">115 Allen Street </a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>50000/Mois</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
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
