@extends('layouts.single-blog-post_layout');
@section('showcase')

@stop
@section('content')
    <header class="single-post-header clearfix">
        <h2 class="post-title">Titre de l'article</h2>
    </header>
    <article class="post-content">
        <div class="post-meta meta-data">
            <span><i class="fa fa-calendar"></i> Publié le 20 Feb, 2018</span>
            <span><i class="fa fa-user"></i> Par Admin</span>
            <span><i class="fa fa-tag"></i> Categories: <a href="#">Non classé</a></span>
            <span><a href="#comments"><i class="fa fa-comment"></i> 188 Commentaires</a></span>
        </div>
        <div class="featured-image"> <img src="{{ asset('/data/articles/img-1.jpg') }}" alt=""> </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>
        <h3>Vivamus convallis</h3>
        <p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
        </blockquote>
        <div class="post-meta"> <i class="fa fa-tags"></i> <a href="#">Sold</a>, <a href="#">Property</a> </div>
    </article>
    <section class="post-comments" id="comments">
        <h3><i class="fa fa-comment"></i> Commentaires (4)</h3>
        <ol class="comments">
            <li>
                <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="http://placehold.it/60x60&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Répondre</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                </div>
            </li>
            <li>
                <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="http://placehold.it/60x60&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Répondre</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                </div>
                <ul>
                    <li>
                        <div class="post-comment-block">
                            <div class="img-thumbnail"> <img src="http://placehold.it/60x60&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                            <a href="#" class="btn btn-primary btn-xs pull-right">Répondre</a>
                            <h5>John Doe says</h5>
                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                            <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                        </div>
                    </li>
                    <li>
                        <div class="post-comment-block">
                            <div class="img-thumbnail"> <img src="http://placehold.it/60x60&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                            <a href="#" class="btn btn-primary btn-xs pull-right">Répondre</a>
                            <h5>John Doe says</h5>
                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                            <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="http://placehold.it/60x60&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Répondre</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                </div>
            </li>
        </ol>
    </section>
    <section class="post-comment-form">
        <h3><i class="fa fa-share"></i> Laisser un commentaire</h3>
        <form>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control input-lg" placeholder="Nom">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input type="email" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input type="url" class="form-control input-lg" placeholder="Site internet (facultatif)">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea cols="8" rows="4" class="form-control input-lg" placeholder="Votre commentaire"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg">Commenter</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@stop
