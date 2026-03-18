<?php
  include 'commentsection/dbh.inc.php';
  include 'getTestimonials.php';
  ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SheranisEvents Pvt. Ltd. | Your Local Event Provider!</title>
    <meta name="description" content="We are experienced in producing high quality events of any type/scale. Our passion is to manage behind the scene details to deliver superior event experience!">
    <meta name="keywords" content="SheranisEvents, Sheranis, events, Patna, Event, management, Celebrity Management, celebrity, band, bands, show, live, shows, nights, local events,corporate, workshops, wedding, photography, dance, singer, artist, DJ, rock, party, theme, Bollywood, eventlove, unique, experience, clients,technical, across india, sheranis events, event management, celebrity management">
    <link rel=canonical href="https://sheranisevents.in/index">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    
    <!-- Animate.css for WOW.js animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <?php include 'header_tags.php'; ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://googletagmanager.com/ns.html?id=GTM-WWJGPM2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- Facebook Plugin -->
    <script>window.fbAsyncInit=function(){FB.init({appId:"529199785767076",xfbml:!0,version:"v16.0"}),FB.AppEvents.logPageView()},function(e,n,t){var o,s=e.getElementsByTagName(n)[0];e.getElementById(t)||((o=e.createElement(n)).id=t,o.src="https://connect.facebook.net/en_US/sdk.js",s.parentNode.insertBefore(o,s))}(document,"script","facebook-jssdk");</script>
    <div id="fb-root"></div>
    <!-- Site Notice Wrap -->
    <!--<div class="tcontainer">-->
    <!--    <div class="ticker-wrap">-->
    <!--        <div class="ticker-move">-->
    <!--            <div class="ticker-item">NOTICE: Dear Visitor, We are deeply saddened to announce the untimely and sudden passing of our esteemed director, Shubham Kumar, on January 7th, 2023. Our thoughts and condolences go out to his family and loved ones during this difficult time. We will continue to honor his legacy and vision as we move forward with the company.</div>-->
    <!--            <div class="ticker-item">NOTICE: Dear Visitor, We are deeply saddened to announce the untimely and sudden passing of our esteemed director, Shubham Kumar, on January 7th, 2023. Our thoughts and condolences go out to his family and loved ones during this difficult time. We will continue to honor his legacy and vision as we move forward with the company.</div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div id="wrapper">
        <!-- Header / Navigation Bar-->
        <header id="header" class="sticky-header">
            <div class="max-container">
                <!-- main site logo --> <strong class="logo"> <a href="#"> <span class="img"> <img src="lib/images/logo.png" alt="SHERANISEVENTS"> </span> </a> </strong> <!-- align-right -->
                <div class="align-right">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> </div> <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav" id="nav-smooth">
                                    <li class="active"> <a href="#wrapper" class="smoothanchor">Home</a> </li>
                                    <li> <a href="#section1" class="smoothanchor">About Us</a> </li>
                                    <li> <a href="#section2" class="smoothanchor">Services</a> </li>
                                    
                                    
                                    <li> <a href="gallery" class="smoothanchor">Gallery</a> </li>
                                    <li> <a href="blog" class="smoothanchor">Blog</a> </li>
                                    <li> <a href="team" class="smoothanchor">Team</a> </li>
                                    <li> <a href="contact" class="smoothanchor">Contact </a> </li>
                                    
                                </ul>
                            </div> 
                            <!-- /.navbar-collapse -->
                        </div> 
                        <!-- /.container-fluid -->
                    </nav>
                    <div class="search-area">
                        <div class="search-box"> <a href="tel:+919934447200" class="mail"> <i class="fas fa-phone-square"></i> <span>Call</span> </a> </div> <a href="mailto:contact@sheranisevents.in" class="mail"> <i class="fas fa-envelope"></i> <span>mail</span> </a>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- main -->
        <main id="main">
            <!-- visual -->
            <div class="visual">
                <div class="max-container">
                    <div class="slideshow" id="main-slider">
                        <div class="slide">
                            <div class="caption">
                                <div class="text"> <span class="txt">WE LOVE TO</span>
                                    <h2> <span class="icon">#</span> <span class="light">CREATE</span> <span class="add">Unique</span> <span class="add2">EVENTS</span> </h2>
                                </div>
                            </div>
                            <div class="image"> <img src="lib/images/events.jpg" alt="image description"> </div> <span class="box"></span>
                            <ul class="social-networks">
                                <li> <a class="facebook" href="https://facebook.com/sheranisevents"> <i class="fab fa-facebook"></i> <span class="hidden">facebook</span> </a> </li>
                                <li> <a class="twitter" href="https://twitter.com/sheranisevents"> <i class="fab fa-twitter"></i> <span class="hidden">twitter</span> </a> </li>
                                <li> <a class="instagram" href="https://instagram.com/sheranisevents"> <i class="fab fa-instagram"></i> <span class="hidden">instagram</span> </a> </li>
                                <li> <a class="youtube-play" href="https://youtube.com/channel/UCJXqjC1ydZHvBF2YMckyZIQ"> <i class="fab fa-youtube"></i> <span class="hidden">youtube</span> </a> </li>
                            </ul>
                        </div>
                        <div class="slide">
                            <div class="caption">
                                <div class="text"> <span class="txt">WE LOVE TO</span>
                                    <h2> <span class="icon">#</span> <span class="light">CREATE</span> <span class="add">Unique</span> <span class="add2">VISUALS</span> </h2>
                                </div>
                            </div>
                            <div class="image"> <img src="lib/images/band2.jpg" alt="image description"> </div> <span class="box"></span>
                            <ul class="social-networks">
                                <li> <a class="facebook" href="https://facebook.com/sheranisevents"> <i class="fab fa-facebook"></i> <span class="hidden">facebook</span> </a> </li>
                                <li> <a class="twitter" href="https://twitter.com/sheranisevents"> <i class="fab fa-twitter"></i> <span class="hidden">twitter</span> </a> </li>
                                <li> <a class="instagram" href="https://instagram.com/sheranisevents"> <i class="fab fa-instagram"></i> <span class="hidden">instagram</span> </a> </li>
                                <li> <a class="youtube-play" href="https://youtube.com/channel/UCJXqjC1ydZHvBF2YMckyZIQ"> <i class="fab fa-youtube"></i> <span class="hidden">youtube</span> </a> </li>
                            </ul>
                        </div>
                        <div class="slide">
                            <div class="caption">
                                <div class="text"> <span class="txt">WE LOVE TO</span>
                                    <h2> <span class="icon">#</span> <span class="light">DESIGN</span> <span class="add">Unique</span> <span class="add2">WEBSITES</span> </h2>
                                </div>
                            </div>
                            <div class="image"> <img src="lib/images/websitehome.jpg" alt="image description"> </div> <span class="box"></span>
                            <ul class="social-networks">
                                <li> <a class="facebook" href="https://facebook.com/sheranisevents"> <i class="fab fa-facebook"></i> <span class="hidden">facebook</span> </a> </li>
                                <li> <a class="twitter" href="https://twitter.com/sheranisevents"> <i class="fab fa-twitter"></i> <span class="hidden">twitter</span> </a> </li>
                                <li> <a class="instagram" href="https://instagram.com/sheranisevents"> <i class="fab fa-instagram"></i> <span class="hidden">instagram</span> </a> </li>
                                <li> <a class="youtube-play" href="https://youtube.com/channel/UCJXqjC1ydZHvBF2YMckyZIQ"> <i class="fab fa-youtube"></i> <span class="hidden">youtube</span> </a> </li>
                            </ul>
                        </div>
                        <div class="slide">
                            <div class="caption">
                                <div class="text"> <span class="txt">WE LOVE TO</span>
                                    <h2> <span class="icon">#</span> <span class="light">JOIN</span> <span class="add">Unique</span> <span class="add2">BRANDS</span> </h2>
                                </div>
                            </div>
                            <div class="image"> <img src="lib/images/brands.jpg" alt="image description"> </div> <span class="box"></span>
                            <ul class="social-networks">
                                <li> <a class="facebook" href="https://facebook.com/sheranisevents"> <i class="fab fa-facebook"></i> <span class="hidden">facebook</span> </a> </li>
                                <li> <a class="twitter" href="https://twitter.com/sheranisevents"> <i class="fab fa-twitter"></i> <span class="hidden">twitter</span> </a> </li>
                                <li> <a class="instagram" href="https://instagram.com/sheranisevents"> <i class="fab fa-instagram"></i> <span class="hidden">instagram</span> </a> </li>
                                <li> <a class="youtube-play" href="https://youtube.com/channel/UCJXqjC1ydZHvBF2YMckyZIQ"> <i class="fab fa-youtube"></i> <span class="hidden">youtube</span> </a> </li>
                            </ul>
                        </div>
                        <div class="slide">
                            <div class="caption">
                                <div class="text"> <span class="txt">WE LOVE TO</span>
                                    <h2> <span class="icon">#</span> <span class="light">CAPTURE</span> <span class="add">Unique</span> <span class="add2">MOMENTS</span> </h2>
                                </div>
                            </div>
                            <div class="image"> <img src="lib/images/moments.jpg" alt="image description"> </div> <span class="box"></span>
                            <ul class="social-networks">
                                <li> <a class="facebook" href="https://facebook.com/sheranisevents"> <i class="fab fa-facebook"></i> <span class="hidden">facebook</span> </a> </li>
                                <li> <a class="twitter" href="https://twitter.com/sheranisevents"> <i class="fab fa-twitter"></i> <span class="hidden">twitter</span> </a> </li>
                                <li> <a class="instagram" href="https://instagram.com/sheranisevents"> <i class="fab fa-instagram"></i> <span class="hidden">instagram</span> </a> </li>
                                <li> <a class="youtube-play" href="https://youtube.com/channel/UCJXqjC1ydZHvBF2YMckyZIQ"> <i class="fab fa-youtube"></i> <span class="hidden">youtube</span> </a> </li>
                            </ul>
                        </div>
                        <div class="slide">
                            <div class="caption">
                                <div class="text"> <span class="txt">WE LOVE TO</span>
                                    <h2> <span class="icon">#</span> <span class="light">ORGANISE</span> <span class="add">Unique</span> <span class="add2">SESSIONS</span> </h2>
                                </div>
                            </div>
                            <div class="image"> <img src="lib/images/sessions.jpg" alt="image description"> </div> <span class="box"></span>
                            <ul class="social-networks">
                                <li> <a class="facebook" href="https://facebook.com/sheranisevents"> <i class="fab fa-facebook"></i> <span class="hidden">facebook</span> </a> </li>
                                <li> <a class="twitter" href="https://twitter.com/sheranisevents"> <i class="fab fa-twitter"></i> <span class="hidden">twitter</span> </a> </li>
                                <li> <a class="instagram" href="https://instagram.com/sheranisevents"> <i class="fab fa-instagram"></i> <span class="hidden">instagram</span> </a> </li>
                                <li> <a class="youtube-play" href="https://youtube.com/channel/UCJXqjC1ydZHvBF2YMckyZIQ"> <i class="fab fa-youtube"></i> <span class="hidden">youtube</span> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
             
            <div class="max-container">
                <div class="info-holder">
                     
                    <div class="info">
                        <div id="section1" class="smooth-section"></div>
                        <div class="img-frame wow fadeInLeft" data-wow-delay="0.6s">
                            <h2 class="tild">ABOUT US</h2> <a href="aboutus" class="more glow">learn more...</a>
                        </div>
                        <div class="txt-frame wow fadeInUp"  data-wow-delay="0.6s" style="text-align: justify;">
                            <h2>About Us</h2>
                            <p>We of SheranisEvents Private Limited, are experienced producing high quality events of any type or scale. Our passion is to manage behind the scenes details to deliver a superior event experience to the audience. We thrive on delighting you - our valued customers - by helping you host events that meets or exceeds your goals with assured cheapest rates across India...! </p>
                            <p>The success of Sheranis Events is a result of the team working tirelessly to ensure that every component of the event unravels exactly as planned. A factor that unites each member of the team is a ‘passion for experience’ - a steadfast commitment to ensuring that every event is an experience, a memory that will stay in the mind of those present long after they have left the venue. </p>
                            <p>At Sheranis Events, our focus is a simple one – event management in a way that creates a win-win situation for all involved stakeholders. Our goal is to ensure that our clients as well as participants of the event have an overall positive experience. To do this, our team is professional and polite – we don’t look at building one time associations with clients, instead, aim at creating long-lasting collaborations that will span years to come. That is what makes us your best local event provider..! </p>
                            <ul>
                                <li> <i>We offer expertise based solutions in celebrity and artist engagement /promotions /appearances /performances and coordination for events. Among all the Celebrity Management Firms, we are with the vast network in Bollywood, Television and other performing artists. We believe in chalking out extensive groundwork before taking a project with our clients. </i> </li>
                                <li> <i>We handle the arrangement of various celebrities like Dancers, Film stars, TV artists and various other famous personalities. You name it and we can arrange them for your event to make your day a spark. </i> </li>
                                <li> <i>We do help organizing Seminars & Workshops or other types of College certification events with our widespread network of Technical and Management Workshop providers across India. </i> </li>
                                <li> <i>We take care of your designs and promotional activities from Drafting layouts, technical specifications to execution. </i> </li>
                            </ul>
                        </div>
                    </div> 

                    
                    <!-- google ad apace -->
                    <div class="max-container" style="margin-bottom:50px; text-align:center;">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6503888656378042" crossorigin="anonymous"></script>
                        <!-- W1 --> 
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6503888656378042" data-ad-slot="9033141439" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                    </div> 
                    
                    <!-- service section -->
                    <div class="info service-area">
                        <div id="section2" class="smooth-section"></div>
                        <div class="txt-frame">
                            <ul class="services">
                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                  <h3><i class="fad fa-handshake serviceIcons"></i> <span>Celebrity & Artist<br>Management</span></h3>
                                    <div class="price-container">
                                      <h5 class="price-range">₹ 5K - 10L</h5>
                                      <span class="quote-button glow"><a href="mailto:contact@sheranisevents.in">Get a Quote!</a></span>
                                    </div>
                                  <p class="addReadMore showlesscontent"> Team_SE manages and hires famous celebrities for their guest appearance to endorse products, Store launch, Brand Endorsement or public awareness. We have a range of national and international celebrities and artistes that will be perfect for your next event. We are not only doing celebrity management but also manage Artists logistics, travel, security, taking permissions and technical stage knowledge. We provide celebrities for: Corporate Event, Live Concerts, Inaugurations, Award Functions, Marriage Function, Festivals, Ticketed Concerts and International Shows. </p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                    <h3> <i class="fad fa-magic serviceIcons"></i> <span>Workshops & Seminar</span> </h3>
                                    <div class="price-container">
                                      <h5 class="price-range">₹ 10K-90K</h5>
                                      <span class="quote-button glow"><a href="mailto:contact@sheranisevents.in">Get a Quote!</a></span>
                                    </div>
                                    <p class="addReadMore showlesscontent"> Our highly skilled event organizer team knows the each and every important element that needs to be incorporated while managing Seminar & Workshops or other types of College events. We have collaboration with different Technical and Management Workshop providers across India and have organized seminars & workshops for different colleges, institutes and organizations hence, Team_SE is counted as a reputed Service Provider in the market at West Bengal. </p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                    <h3> <i class="fad fa-icons serviceIcons"></i> <span>Live Concerts & Events</span> </h3>
                                    <div class="price-container">
                                      <h5 class="price-range">₹ 2L-20L</h5>
                                      <span class="quote-button glow"><a href="mailto:contact@sheranisevents.in">Get a Quote!</a></span>
                                    </div>
                                    <p class="addReadMore showlesscontent"> Now showing… LIVE! When it comes to getting a sparkling set up for Live concerts & Special Events we are the people to come to. With know-how and expertise that straddle live and Special shows. There comes occasions in everybody's life and to make these occasions memorable ever after is our job. Right from the selection and designing of themes, we can help you to plan the complete theme party, from theme invites to theme decor, from thematic set up to theme props, theme entertainment to thematic return gifts. Practically Everything. We know how to make your event come alive not only at the venue but in every heart. </p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                    <h3> <i class="fad fa-layer-group serviceIcons"></i> <span>Web Development <br>& Fabrications </span> </h3>
                                    <div class="price-container">
                                      <h5 class="price-range">₹ 2K-50L</h5>
                                      <span class="quote-button glow"><a href="mailto:contact@sheranisevents.in">Get a Quote!</a></span>
                                    </div>
                                    <p class="addReadMore showlesscontent"> We provide high quality professional Website Design with complete Development and Maintenance Service package for your Brand and Events as well. We love to Design Social and Promotional Cards for your social presense. Our Team of experts those who have complete understanding and knowledge of changing and emerging trend renders the whole services. We make sure that Designs stand up to your imagination. On the other hand, we provide and execute fabrication services effectively within the stipulated time frame. Our services are available in a number of standard and modified forms, from Brand Logo Making, Website Designing, Poster Designing to Stall and Auditorium Fabrication. </p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                    <h3> <i class="fad fa-camera-retro serviceIcons"></i> <span>wedding Photoshoot</span> </h3>
                                    <div class="price-container">
                                      <h5 class="price-range">₹ 10K-2L</h5>
                                      <span class="quote-button glow"><a href="mailto:contact@sheranisevents.in">Get a Quote!</a></span>
                                    </div>
                                    <p class="addReadMore showlesscontent"> Your wedding is special day and we transform it into a special story through capturing moments with our cameras. We craft a charismatic bundle that will be timeless and a memorable documentation of your wedding day as your own individual story. We take out the moment in both ways Traditional as well as candid. Both being the most essential formats for a wedding to be remembered for decades. We also make sure that the Bride and Groom do get the toppings, by providing them with Portrait and Couple Pre and post Wedding shoots. Now this is something you can’t resist. We have complete and customized packages ready to be delivered to anywhere in the WORLD. </p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                    <h3> <i class="fad fa-film-alt serviceIcons"></i> <span>Cinematography</span> </h3>
                                    <div class="price-container">
                                      <h5 class="price-range">₹ 8K-5L</h5>
                                      <span class="quote-button glow"><a href="mailto:contact@sheranisevents.in">Get a Quote!</a></span>
                                    </div>
                                    <p class="addReadMore showlesscontent"> A picture may be worth a thousand words but great cinematography is priceless. We provide outstanding video services for BLOGGERS or a number of public and private events, from birthdays and weddings to concerts and company socials,or Everything is filmed in 4K ultra high-definition quality using the latest audio standards and editing tools, so you can relive the moment as if it were happening for the first time. Our team consists of seasoned professionals, all with years of experience catering to diverse clients and occasions. Ready to record that next big event? Contact us now and we’ll help you personalize your dream package.. </p>
                                </li>
                            </ul>
                        </div>
                        <div class="img-frame wow fadeInRight" data-wow-delay="0.6s">
                            <h2 class="tild">OUR SERVICES</h2> <a class="more glow" href="https://wa.me/919934447200?text=Hello+There!+I%27m+intrested+in+one+of+your+services+and+would+like%20to+know+more..!+Thank+you+%40YourName" target="_blank">request our services!</a>
                        </div>
                    </div>
                    
                    <!-- google ad apace -->
                    <div class="max-container" style="margin-bottom:50px; text-align:center;">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6503888656378042" crossorigin="anonymous"></script>
                         <!--W2 -->
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6503888656378042" crossorigin="anonymous"></script>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6503888656378042" data-ad-slot="8499429597" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                    </div>
                    
                    <!-- work section -->
                    <div class="info work">
                        <div id="section3" class="smooth-section"></div>
                    
                        <div class="txt-frame wow fadeInLeft" data-wow-delay="0.6s">
                            <h2 class="tild">OUR WORKS</h2>
                            <a href="gallery" class="more glow">view our gallery!</a>
                        </div>
                    
                        <div class="img-frame">
                            <div class="sliderDimension">
                    
                                <!-- SLDR MAIN WRAPPER -->
                                <div id="SLDR-ONE" class="sldr">
                    
                                    <!-- SLDR SLIDES -->
                                    <ul class="wrp animate" id="sliderUL">
                    
                                        <li class="elmnt-one">
                                            <div class="skew">
                                                <div class="wrap">
                                                    <img class="sliderIMG" src="lib/images/homes1.jpg" alt="image" width="1000" height="480">
                                                </div>
                                            </div>
                                        </li>
                    
                                        <li class="elmnt-two">
                                            <div class="skew">
                                                <div class="wrap">
                                                    <img class="sliderIMG" src="lib/images/band.jpg" alt="image" width="1000" height="480">
                                                </div>
                                            </div>
                                        </li>
                    
                                        <li class="elmnt-three">
                                            <div class="skew">
                                                <div class="wrap">
                                                    <img class="sliderIMG" src="lib/images/46.jpg" alt="image" width="1000" height="480">
                                                </div>
                                            </div>
                                        </li>
                    
                                        <li class="elmnt-four">
                                            <div class="skew">
                                                <div class="wrap">
                                                    <img class="sliderIMG" src="lib/images/cbcih1.jpg" alt="image" width="1000" height="480">
                                                </div>
                                            </div>
                                        </li>
                    
                                    </ul>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blogs section -->
                    <div class="info blogs">
                        <div id="section4" class="smooth-section"></div>
                        <div class="img-frame">
                            <div class="txt-holder wow fadeInUp" data-wow-delay="0.6s">
                                <div class="images"> <img src="lib/images/blog/blogbday.jpg" alt="image description"> </div>
                                <div class="txts">
                                    <div class="txt-box">
                                        <h3>Birthday Party..</h3>
                                        <p> A reason to celebrate, a reason to dine, A reason to enjoy good company and wine. Everyone deserves a birthday party no matter the age.</p> <a href="blog" class="continue"> <span>LEARN MORE</span> <i class="icon-right-thin"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="txt-holder right wow fadeInUp" data-wow-delay="0.6s">
                                <div class="txts">
                                    <div class="txt-box">
                                        <h3>Holi Milan..</h3>
                                        <p>Holi Milan Function is a special time of year to remember those who are close to our hearts with splashing colours. ... By celebrating this festival of colours our family together cherish the enriching journey and afloat this wide spectrum of emotions that makes life enjoyable.</p> <a href="blog" class="continue"> <span>LEARN MORE</span> <i class="icon-right-thin"></i> </a>
                                    </div>
                                </div>
                                <div class="images"> <img src="lib/images/blog/blogholi.jpeg" alt="image description"> </div>
                            </div>
                        </div>
                        <div class="txt-frame wow fadeInRight" data-wow-delay="0.6s" style="margin-bottom: 0px;">
                            <h2 class="tild">RECENT WORKS</h2> <a href="blog" class="more glow">view our works!</a>
                        </div>
                    </div> 
                    
                    <!-- team section -->
                    <!--<div class="info testimonial">-->
                    <!--    <div id="section5" class="smooth-section"></div>-->
                    <!--    <div class="txt-frame wow fadeInLeft" data-wow-delay="0.6s">-->
                    <!--        <h2 class="tild">OUR TEAM</h2> <a href="team" class="more glow">meet the minds behind!</a>-->
                    <!--    </div>-->
                    <!--    <div class="img-frame wow fadeInUp" data-wow-delay="0.6s">-->
                    <!--        <div class="slider">-->
                    <!--            <div class="mask">-->
                    <!--                <div class="slide">-->
                    <!--                    <blockquote> <q>The experience our clients get from working with us is always as important as the experience we deliver to the events audiences...! </q> <cite> <span class="heading4">DANISH TANWEER</span> <span class="designation">Founder/CEO</span> </cite> </blockquote>-->
                    <!--                    <div class="images container"> <img class="grays" src="lib/images/danish1.jpg" alt="Danish Tanweer">-->
                    <!--                        <div class="overlay"> <a href="https://facebook.com/dankhan.se"> <i class="fab fa-facebook-square SocialIcons"> </i> </a> <a href="https://twitter.com/dan_khan"> <i class="fab fa-twitter SocialIcons"> </i> </a> <a href="https://linkedin.com/in/dankhan-se/"> <i class="fab fa-linkedin SocialIcons"> </i> </a> </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            <div class="slide">-->
                    <!--                    <blockquote> <q>We form your events and travel into concept driven short films generating more user interaction and making it alive for years... actually for forever! </q> <cite> <span class="heading4">SHUBHAM KUMAR</span> <span class="designation">Creative Director</span> </cite> </blockquote>-->
                    <!--                    <div class="images container"> <img class="grays" src="lib/images/adi.jpg" alt="Shubham Kumar">-->
                    <!--                        <div class="overlay"> <a href="https://facebook.com/addilv"> <i class="fab fa-facebook-square SocialIcons"></i> </a> <a href="https://instagram.com/addilv.superman"> <i class="fab fa-instagram SocialIcons"></i> </a> <a href="https://youtube.com/channel/UCJXqjC1ydZHvBF2YMckyZIQ"> <i class="fab fa-youtube SocialIcons"></i> </a> </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="slide">-->
                    <!--                    <blockquote> <q>Some people look for a beautiful place and there is someone who make the place look beautiful. We are the one who make your event a memory... a beautiful memory! </q> <cite> <span class="heading4">VIVEK RAJ</span> <span class="designation">Chief Operations Officer</span> </cite> </blockquote>-->
                    <!--                    <div class="images container"> <img class="grays" src="lib/images/vivek1.jpg" alt="Vivek Raj">-->
                    <!--                        <div class="overlay"> <a href="https://facebook.com/vivek.pupul"> <i class="fab fa-facebook-square SocialIcons"></i> </a> <a href="https://linkedin.com/in/vivek-raj-a1ab15157/"> <i class="fab fa-linkedin SocialIcons"></i> </a> </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--            <div class="pagination">-->
                    <!--                <ul class="mask-inner">-->
                    <!--                    <li class="container"> <a href="#"> <img class="grays" src="lib/images/danish1.jpg" alt="Danish Tanweer"> </a> </li>-->
                    <!--                <li class="container"> <a href="#"> <img class="grays" src="lib/images/adi.jpg" alt="Shubham Kumar"> </a> </li> -->
                    <!--                    <li class="container"> <a href="#"> <img class="grays" src="lib/images/vivek1.jpg" alt="Vivek Raj"> </a> </li>-->
                    <!--                </ul>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div> -->
                    
                    <!--testimonial section -->
                    <div class="rows" style="padding: 0 1%;"><?php getTestimonials($conn);?></div> 
                </div>
            </div>
        </main>
        
        <!-- google ad apace -->
        <div class="max-container row mb-5">
            <div class="col-md-6">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6503888656378042" crossorigin="anonymous"></script>
                 <!--W3 -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6503888656378042" data-ad-slot="1042970776" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div> 
            <div class="col-md-6">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6503888656378042" crossorigin="anonymous"></script>
                 <!--W4 -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6503888656378042" data-ad-slot="7609568490" data-ad-format="auto" data-full-width-responsive="true"></ins> 
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
        </div>
        
        <!-- footer of the page -->
        <?php include 'footer.php'; ?>
        
    </div>
    
    <!-- Load main JavaScript bundle -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- Popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/js/ribbon.js"></script>
    <script src="/js/javascript.js"></script>
    <!-- Initialize the slider -->
    <script>
    $(document).ready(function() {
        // Initialize slider if plugin exists
        if (typeof $.fn.sldr !== 'undefined' && $('#SLDR-ONE').length) {
            $('#SLDR-ONE').sldr({
                focalClass: 'focalPoint',
                sldrAuto: true,
                sldrTime: 2000,
                animateJquery: true
            });
            console.log("Our Works' slider initialized!");
        }
        
        // Character counter (using jQuery now)
        $('#message2').on('input', function() {
            const count = $(this).val().length;
            $('#char-count').text(count);
            
            if (count > 250) {
                $('#char-count').css('color', '#dc3545');
            } else if (count > 200) {
                $('#char-count').css('color', '#ffc107');
            } else {
                $('#char-count').css('color', '#adb5bd');
            }
        });
        
        // Show/hide image upload
        $('input[name="show_testimonial"]').change(function() {
            if ($(this).val() === 'Yes') {
                $('#image-upload-section').show();
            } else {
                $('#image-upload-section').hide();
            }
        });
        
        // File input change
        $('#file').change(function() {
            if (this.files && this.files[0]) {
                $('.file-text').text(this.files[0].name);
            } else {
                $('.file-text').text('Choose file');
            }
        });
    });
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
  