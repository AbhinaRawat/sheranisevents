<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gallery | SheranisEvents Pvt. Ltd.</title>
	<meta name=description content="We are experienced in producing high quality events of any type/scale. Oour passion is to manage behind the scene details to deliver superior event experience!">
	<meta name=keywords content="SheranisEvents, Sheranis, events, Patna, Event, management, Celebrity Management, celebrity, band, bands, events, show, live, shows, nights, local events, corporate, workshops, wedding, photography, dance, singer, artist, DJ, rock, party, theme, Bollywood">
	<link rel=canonical href="https://sheranisevents.in/gallery">
    <?php include 'header_tags.php'; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/css/lightgallery.min.css">
	<!-- SE_Custom -->
    <style>#lightgallery .item{margin-bottom:30px}#lightgallery .item img{-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out;border-radius:10px;filter:drop-shadow(5px 5px 5px gray)}#lightgallery .item:hover img{-webkit-transform:scale(1.1);transform:scale(1.1)}@media(max-width:767px){#lightgallery{display:flex;flex-wrap:wrap;justify-content:center;align-items:center}#lightgallery .item{flex-basis:calc(50% - 10px);max-width:calc(50% - 10px);height:auto}}</style>
    
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWJGPM2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- Page Loader 
	<div id="pre-loader" class="loader-container">
		<div class="loader">
			<div></div>
			<div></div>
		</div>
	</div>-->
    <!-- Facebook Plugin -->
    <script>window.fbAsyncInit=function(){FB.init({appId:"529199785767076",xfbml:!0,version:"v16.0"}),FB.AppEvents.logPageView()},function(e,n,t){var o,s=e.getElementsByTagName(n)[0];e.getElementById(t)||((o=e.createElement(n)).id=t,o.src="https://connect.facebook.net/en_US/sdk.js",s.parentNode.insertBefore(o,s))}(document,"script","facebook-jssdk");</script>
    <div id="fb-root"></div>
	<div id="wrapper">
		<!-- Navigation Bar -->
		<header id="header" class="sticky-header" style="backdrop-filter: saturate(180%) blur(20px); background: rgb(255, 255, 255, 0.7);box-shadow: 0 0 7px 2px #838383; margin:-100px 0 20px 0">
			<div class="max-container">
				<!-- main site logo -->
				<strong class="logo">
					<a href="index">
						<span class="img">
							<img src="lib/images/logo.png" alt="SHERANISEVENTS">
						</span>
					</a>
				</strong>
				<!-- align-right -->
				<div class="align-right">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav" id="nav-smooth">
                                    <li> <a href="index" class="smoothanchor">Home</a> </li>
                                    <li> <a href="index#section1" class="smoothanchor">About Us</a> </li>
                                    <li> <a href="index#section2" class="smoothanchor">Services</a> </li>
                                    <li class="active"> <a href="gallery" class="smoothanchor">Gallery</a> </li>
                                    <li> <a href="blog" class="smoothanchor">Blog</a> </li>
                                    <li> <a href="team" class="smoothanchor">Team</a> </li>
                                    <li> <a href="contact" class="smoothanchor">Contact</a> </li>
                                </ul>
							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.container-fluid -->
					</nav>
					<div class="search-area">
						<div class="search-box">
							<a href="tel:+919934447200" class="mail">
								<i class="fas fa-phone-square"></i>
								<span>Call</span>
							</a>
						</div>
						<a href="mailto:contact@sheranisevents.in" class="mail">
							<i class="fas fa-envelope"></i>
							<span>mail</span>
						</a>
					</div>
				</div>
			</div>
		</header>
		<!-- main -->
		<main id="main">
    		<div class="container">
                <h1 style="text-align:center;font-family: Nothing You Could Do;font-weight: bolder;">Gallery..!</h1>
                <hr style="width:50%;">
    			<div class="row" id="lightgallery">
                    <?php
                        $dirname = "img/gallery/";
                        $images = glob($dirname."*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
                        foreach($images as $image) {
                            echo '
                            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item">
                                <a href="'.$image.'" class="d-block mb-4 h-100" data-lightgallery="item">
                                    <img class="img-fluid" src="'.$image.'" alt="'.basename($image, ".".pathinfo($image, PATHINFO_EXTENSION)).'" loading="lazy">
                                </a>
                            </div>
                            ';
                        }
                    ?>
    			</div>
    		</div>
    		<br>
            <hr>
    	</main>
        
        <!-- footer of the page -->
        <?php include 'footer.php'; ?>

    </div>
    <script src="js/javascript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/js/lightgallery-all.min.js"></script>
	<script>$(document).ready(function() {$('#lightgallery').lightGallery({selector: 'a',mode: 'lg-fade',counter: false,autoplay: false,fullScreen: true,zoom: true,share: false});});</script>
</body>
</html>