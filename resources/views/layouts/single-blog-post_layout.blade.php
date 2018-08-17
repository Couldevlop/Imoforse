<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    @include('includes.head')
</head>
<body class="home">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
    <!-- Start Site Header -->
@include('includes.header')
<!-- End Site Header -->
    <!-- Site Showcase -->
    <div class="site-showcase">
        @yield('showcase')
    </div>
    <!-- Start Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                    <div class="col-md-3 sidebar">
                        @include('includes.single-blog-post_sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Site Footer -->
    <Section class="section-footer">
        @include('includes.footer')
    </Section>
    <!-- End Site Footer -->
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
@include('includes.scripts-footer')
@yield('scripts')
</body>
</html>
