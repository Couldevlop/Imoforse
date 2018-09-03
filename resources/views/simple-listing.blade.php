@extends('layouts.default-sidebar-layout')
@section('title')
    Nos offres - Imoforse
@stop
@section('showcase')

@stop
@section('content')
    <div class="property-listing">
        <ul>
            <li class="type-rent col-md-12">
                <div class="col-md-4"> <a href="{{url('/propertyDetail')}}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Louer</span> </a> </div>
                <div class="col-md-8">
                    <div class="property-info">
                        <div class="price"><span>200.000/Mois</span><strong>FCFA</strong></div>
                        <h3><a href="{{url('/propertyDetail')}}">Location Appartement</a></h3>
                        <span class="location">Bingerville</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed.</p>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>800</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="type-rent col-md-12">
                <div class="col-md-4"> <a href="{{url('/propertyDetail')}}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a> </div>
                <div class="col-md-8">
                    <div class="property-info">
                        <div class="price"><span>250.000.000</span><strong>FCFA</strong></div>
                        <h3><a href="{{url('/propertyDetail')}}">Vente de maison</a></h3>
                        <span class="location">Cocody</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed.</p>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>2000</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
                </div>
            </li>
            <li class="type-rent col-md-12">
                <div class="col-md-4"> <a href="{{url('/propertyDetail')}}" class="property-featured-image"> <img src="{{ asset('/data/specimen.jpg') }}" alt=""> <span class="images-count"><i class="fa fa-picture-o"></i> 2</span> <span class="badges">Acheter</span> </a> </div>
                <div class="col-md-8">
                    <div class="property-info">
                        <div class="price"><span>120.000.000</span><strong>FCFA</strong></div>
                        <h3><a href="{{url('/propertyDetail')}}">Vente de maison</a></h3>
                        <span class="location">Koumassi</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula dapibus mauris, quis ullamcorper enim aliquet sed.</p>
                    </div>
                    <div class="property-amenities clearfix"> <span class="area"><strong>600</strong>m2</span> <span class="baths"><strong>3</strong>Douches</span> <span class="beds"><strong>3</strong>Chambres</span> <span class="parking"><strong>1</strong>Cuisines</span> </div>
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
