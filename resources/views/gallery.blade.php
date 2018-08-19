@extends('layouts.default')
@section('title')
    Galérie- Imoforse
@stop
@section('showcase')

@stop
@section('content')
    <div class="container">
        <div class="row">
            <ul>
                <li class="col-md-3 col-sm-6 gallery-item format-image">
                    <div class="grid-item-inner"> <a href="{{ asset('data/specimen.jpg') }}" data-rel="prettyPhoto[gallery]" class="media-box"> <img src="{{ asset('data/specimen.jpg') }}" alt=""> </a> </div>
                </li>
                <li class="col-md-3 col-sm-6 gallery-item format-image">
                    <div class="grid-item-inner"> <a href="{{ asset('data/specimen.jpg') }}" data-rel="prettyPhoto[gallery]" class="media-box"> <img src="{{ asset('data/specimen.jpg') }}" alt=""> </a> </div>
                </li>
                <li class="col-md-3 col-sm-6 gallery-item format-image">
                    <div class="grid-item-inner"> <a href="{{ asset('data/specimen.jpg') }}" data-rel="prettyPhoto[gallery]" class="media-box"> <img src="{{ asset('data/specimen.jpg') }}" alt=""> </a> </div>
                </li>
                <li class="col-md-3 col-sm-6 gallery-item format-image">
                    <div class="grid-item-inner"> <a href="{{ asset('data/specimen.jpg') }}" data-rel="prettyPhoto[gallery]" class="media-box"> <img src="{{ asset('data/specimen.jpg') }}" alt=""> </a> </div>
                </li>
                <li class="col-md-3 col-sm-6 gallery-item format-image">
                    <div class="grid-item-inner"> <a href="{{ asset('data/specimen.jpg') }}" data-rel="prettyPhoto[gallery]" class="media-box"> <img src="{{ asset('data/specimen.jpg') }}" alt=""> </a> </div>
                </li>
                <li class="col-md-3 col-sm-6 gallery-item format-image">
                    <div class="grid-item-inner"> <a href="{{ asset('data/specimen.jpg') }}" data-rel="prettyPhoto[gallery]" class="media-box"> <img src="{{ asset('data/specimen.jpg') }}" alt=""> </a> </div>
                </li>
                <li class="col-md-3 col-sm-6 gallery-item format-image">
                    <div class="grid-item-inner"> <a href="{{ asset('data/specimen.jpg') }}" data-rel="prettyPhoto[gallery]" class="media-box"> <img src="{{ asset('data/specimen.jpg') }}" alt=""> </a> </div>
                </li>
                <li class="col-md-3 col-sm-6 gallery-item format-image">
                    <div class="grid-item-inner"> <a href="{{ asset('data/specimen.jpg') }}" data-rel="prettyPhoto[gallery]" class="media-box"> <img src="{{ asset('data/specimen.jpg') }}" alt=""> </a> </div>
                </li>
            </ul>
        </div>
        <div class="text-align-center">
            <ul class="pagination">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
@stop
