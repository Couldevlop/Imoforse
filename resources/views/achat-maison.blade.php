@extends('layouts.default-sidebar-layout')
@section('title')
    Achat de maison - Imoforse
@stop
@section('showcase')

@stop
@section('content')
    <div class="property-grid">
        <ul class="grid-holder col-3">
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/place/vente-maison/img-1.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">116 Waverly Place</a></h4>
                        <span class="location">Angré</span>
                        <div class="price"><span>280.000 / mois</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-buy">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/place/vente-maison/img-2.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">232 East 63rd Street</a></h4>
                        <span class="location">Riviera Golf</span>
                        <div class="price"><span>250.000.000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/place/vente-maison/img-3.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">55 Warren Street</a></h4>
                        <span class="location">2 Plateaux</span>
                        <div class="price"><span>120.000.000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/place/vente-maison/img-4.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">459 West Broadway</a></h4>
                        <span class="location">Yopougon Toit Rouge</span>
                        <div class="price"><span>3100/Mois</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-buy">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/place/vente-maison/img-5.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">70 Greene Street</a></h4>
                        <span class="location">NYC</span>
                        <div class="price"><span>500000</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="grid-item type-rent">
                <div class="property-block"> <a href="{{ url('/propertyDetail') }}" class="property-featured-image"> <img src="{{ asset('/data/place/vente-maison/img-6.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a>
                    <div class="property-info">
                        <h4><a href="{{ url('/propertyDetail') }}">Villa Triplex </a></h4>
                        <span class="location">Bingerville</span>
                        <div class="price"><span>250.000.000 / mois</span><strong>CFA</strong></div>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>5000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>6</strong>Chambres</span> <span class="parking"><strong>3</strong>Cuisines</span> </div>
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
