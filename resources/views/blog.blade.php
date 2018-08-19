@extends('layouts.blog-layout')
@section('title')
    Blog - Imoforse
@stop
@section('showcase')

@stop
@section('content')
    <article class="post">
        <div class="row">
            <div class="col-md-4 col-sm-4"> <a href="{{ url('/blogSingle') }}"><img src="{{ asset('data/specimen.jpg') }}" alt="" class="img-thumbnail"></a> </div>
            <div class="col-md-8 col-sm-8">
                <h3><a href="{{ url('/blogSingle') }}">A sample post title</a></h3>
                <span class="post-meta meta-data"> <span><i class="fa fa-calendar"></i> 28th Jan, 2014</span><span><i class="fa fa-archive"></i> <a href="#">Non classé</a></span> <span><a href="#"><i class="fa fa-comment"></i> 12</a></span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                <p><a href="{{ url('/blogSingle') }}" class="btn btn-primary">Lire la suite <i class="fa fa-long-arrow-right"></i></a></p>
            </div>
        </div>
    </article>
    <article class="post">
        <div class="row">
            <div class="col-md-4 col-sm-4"> <a href="{{ url('/blogSingle') }}"><img src="{{ asset('/data/specimen.jpg') }}" alt="" class="img-thumbnail"></a> </div>
            <div class="col-md-8 col-sm-8">
                <h3><a href="{{ url('/blogSingle') }}">A sample post title</a></h3>
                <span class="post-meta meta-data"> <span><i class="fa fa-calendar"></i> 28th Jan, 2014</span><span><i class="fa fa-archive"></i> <a href="#">Non classé</a></span> <span><a href="#"><i class="fa fa-comment"></i> 12</a></span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                <p><a href="{{ url('/blogSingle') }}" class="btn btn-primary">Lire la suite <i class="fa fa-long-arrow-right"></i></a></p>
            </div>
        </div>
    </article>
    <article class="post format-image">
        <div class="row">
            <div class="col-md-4 col-sm-4"> <a href="{{ url('/blogSingle') }}"><img src="{{ asset('/data/specimen.jpg') }}" alt="" class="img-thumbnail"></a> </div>
            <div class="col-md-8 col-sm-8">
                <h3><a href="{{ url('/blogSingle') }}">A sample post title</a></h3>
                <span class="post-meta meta-data"> <span><i class="fa fa-calendar"></i> 28th Jan, 2014</span><span><i class="fa fa-archive"></i> <a href="#">Non classé</a></span> <span><a href="#"><i class="fa fa-comment"></i> 12</a></span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                <p><a href="{{ url('/blogSingle') }}" class="btn btn-primary">Lire la suite <i class="fa fa-long-arrow-right"></i></a></p>
            </div>
        </div>
    </article>
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
