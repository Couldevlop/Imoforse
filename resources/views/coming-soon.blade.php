<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Coming soon - Imoforse</title>
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/css/coming-soon.css') }}">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/images/app/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/images/app/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/images/app/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/images/app/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/images/app/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/images/app/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/images/app/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/images/app/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/app/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/images/app/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/app/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/images/app/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/app/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/images/app/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/images/app/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<div id="wrapper">
	<div class="section-coming-soon bg-coming-soon">
		<div class="awe-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="coming-soon_content">
					<div class="container">
					<div class="text-center">
						<div class="img">
							<a href="#"><img src="{{ asset('/images/logo.png') }}" alt="Imoforse"></a>
						</div>
						<div class="countdown">
                                <div id="countdown"></div>
                            </div>
						<div class="text">
							<h1>Ouverture <span>prochaine</span></h1>
                            <p>Abonnez vous pour suivre l'actualité de notre plateforme</p>
						</div>
						<div class="subscribe clearfix">
						    <form id="" action="" method="post" class="subscribe-form">
						        <div class="subscribe-form-group">
						            <input type="text" name="email"  placeholder="Abonnez vous en entrant votre adresse email" class="subscribe-input">  
						        </div>
						        <button class="input-submit">S'abonner</button>
						    </form>
						</div>
						<div class="widget widget_social">
						    <div class="widget-social">
						        <a href="#" target="_blank" title="Suivez Imoforse Sarl sur Facebook"><i class="fa fa-facebook"></i></a>
						        <a href="#" target="_blank" title="Suivez EVENTQUICK sur Twitter"><i class="fa fa-twitter"></i></a>
						        <a href="#" target="_blank" title="Suivez Imoforse Sarl sur Linkedin"><i class="fa fa-linkedin"></i></a>
						        <a href="#" target="_blank" title="SuivezImoforse Sarl sur Google Plus"><i class="fa fa-google-plus"></i></a>
						    </div>
						</div>
					</div>
					</div><!-- END TEXT  CENTER -->
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ asset('/js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>
</body>
</html>