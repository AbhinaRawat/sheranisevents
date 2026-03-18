<?php
@session_start();
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require_once "config.php";

include '../0sgroup/welfare/database_conn/dbh.inc.php';

if(isset($_POST['paynow'])) {
    $orderID = isset($_POST['orderID']) ? $_POST['orderID'] : '';
    $reff = isset($_POST['reff']) ? $_POST['reff'] : '';
    $service = isset($_POST['service']) ? $_POST['service'] : '';    
    $amount = isset($_POST['amt']) ? $_POST['amt'] : '';
    $custName = isset($_POST['custName']) ? $_POST['custName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $_SESSION['custName'] = $custName;
    $_SESSION['phone'] = $phone;

    $sql = "INSERT INTO new_txn (orderID, custName, email, phone, amt) VALUES ('$orderID', '$custName', '$email', '$phone','$amount')";
    $rs = mysqli_query($conn, $sql);
    if (mysqli_errno($conn)>0) {
        echo mysqli_error($conn);
        die($sql);
    }
}
?>
<head>
    <meta https-equiv=Content-Type content="text/html; charset=utf-8">
    <meta https-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Payment Confirmation | SheranisEvents Pvt. Ltd. </title>
    <meta name=description content="Payment Portal for all your Payment and Advance for SheranisEvents Pvt Ltd. related works.">
    <link rel=canonical href="https://sheranisevents.in/payment/txn">
    <meta name=robots content="index, follow">
    <meta name=copyright content="SheranisEvents Pvt. Ltd.">
    <meta name=language content=EN>
    <meta name=author content="Danish Tanweer">
    <meta name=creationdate content=01/07/2015>
    <meta name=distribution content=global>
    <meta name=rating content=general>
    <meta name=og:title content="SheranisEvents Pvt. Ltd.">
    <meta name=og:type content="Event Service">
    <meta name=og:site_name content="SheranisEvents Pvt. Ltd.">
    <meta name=og:description content="SheranisEvents takes pride in introducing itself as an major Event & Celebrity Management company that works PAN India..!">
    <meta name=og:email content=admin@sheranisevents.in>
    <meta name=og:phone_number content=+91-9934447200>
    <meta name=fb:page_id content=715393435241304>
    <meta name=twitter:site content=@sheranisevents>
    <link rel=apple-touch-icon sizes=57x57 href=../lib/favicon/apple-icon-57x57.png>
    <link rel=apple-touch-icon sizes=60x60 href=../lib/favicon/apple-icon-60x60.png>
    <link rel=apple-touch-icon sizes=72x72 href=../lib/favicon/apple-icon-72x72.png>
    <link rel=apple-touch-icon sizes=76x76 href=../lib/favicon/apple-icon-76x76.png>
    <link rel=apple-touch-icon sizes=114x114 href=../lib/favicon/apple-icon-114x114.png>
    <link rel=apple-touch-icon sizes=120x120 href=../lib/favicon/apple-icon-120x120.png>
    <link rel=apple-touch-icon sizes=144x144 href=../lib/favicon/apple-icon-144x144.png>
    <link rel=apple-touch-icon sizes=152x152 href=../lib/favicon/apple-icon-152x152.png>
    <link rel=apple-touch-icon sizes=180x180 href=../lib/favicon/apple-icon-180x180.png>
    <link rel=icon type=../image/png sizes=192x192 href=../lib/favicon/android-icon-192x192.png>
    <link rel=icon type=../image/png sizes=32x32 href=../lib/favicon/favicon-32x32.png>
    <link rel=icon type=../image/png sizes=96x96 href=../lib/favicon/favicon-96x96.png>
    <link rel=icon type=../image/png sizes=16x16 href=../lib/favicon/favicon-16x16.png>
    <link rel=manifest href=../lib/favicon/manifest.json>
    <meta name=msapplication-TileColor content=#ffffff>
    <meta name=msapplication-TileImage content=../lib/favicon/ms-icon-144x144.png>
    <meta name=theme-color content=#ffffff>
    <link rel=stylesheet href=../css/animate.css>
    <link rel=stylesheet href=../css/bootstrap.css>
    <link rel=stylesheet href=../css/all.css>
    <link rel=stylesheet href=../style.css>
    <link rel=stylesheet href=../css/responsive.css>
    <link rel=stylesheet href=../css/color/color.css>
    <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    <!-- PayTM JS -->
    <script type="application/javascript" crossorigin="anonymous" src="<?php echo PAYTM_ENVIRONMENT; ?>/merchantpgpui/checkoutjs/merchants/<?php echo PAYTM_MID; ?>.js"></script>
    <script type="application/javascript" crossorigin="anonymous" src="script.js"></script>
    <!-- Google Ads -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6503888656378042" crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XLHXP0BK9E"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-XLHXP0BK9E');</script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WWJGPM2');</script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWJGPM2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- Facebook Plugin -->
    <script>window.fbAsyncInit=function(){FB.init({appId:"529199785767076",xfbml:!0,version:"v16.0"}),FB.AppEvents.logPageView()},function(e,n,t){var o,s=e.getElementsByTagName(n)[0];e.getElementById(t)||((o=e.createElement(n)).id=t,o.src="https://connect.facebook.net/en_US/sdk.js",s.parentNode.insertBefore(o,s))}(document,"script","facebook-jssdk");</script>
    <div id="fb-root"></div>
    <div id=wrapper>
        <!-- Navigation Bar -->
        <header id="header" class="sticky-header" style="backdrop-filter: saturate(180%) blur(20px); background: rgb(255, 255, 255, 0.7);box-shadow: 0 0 7px 2px #838383;">
            <div class=max-container> <strong class=logo> <a href=index> <span class=img> <img src=../lib/images/logo.png alt=SHERANISEVENTS> </span> </a> </strong>
                <div class=align-right>
                    <nav class="navbar navbar-default">
                        <div class=container-fluid>
                            <div class=navbar-header> <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#bs-example-navbar-collapse-1 aria-expanded=false> 
                            <span class=sr-only>Toggle navigation</span><span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button> </div>
                            <div class="collapse navbar-collapse" id=bs-example-navbar-collapse-1>
                                <ul class="nav navbar-nav" id="nav-smooth">
                                    <li> <a href="../index" class="smoothanchor">Home</a> </li>
                                    <li> <a href="../index#section1" class="smoothanchor">About Us</a> </li>
                                    <li> <a href="../index#section2" class="smoothanchor">Services</a> </li>
                                    <li> <a href="../gallery" class="smoothanchor">Gallery</a> </li>
                                    <li> <a href="../blog" class="smoothanchor">Blog</a> </li>
                                    <li class="active"> <a href="#" class="smoothanchor">Payment</a> </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class=search-area>
                        <div class=search-box> <a href=tel:+919934447200 class=mail> <i class="fas fa-phone-square"></i> <span>Call</span> </a> </div> <a href=mailto:contact@sheranisevents.in class=mail> <i class="fas fa-envelope"></i> <span>mail</span> </a>
                    </div>
                </div>
            </div>
        </header> 
        <!-- Main -->
        <main id="main">
            <div class="container mt-5">
                <div class="mt-5">
                    <h1 style="text-align:center;font-family: Nothing You Could Do;font-weight: bolder;">Check your details and proceed..</h1>
                </div>
                <div class="info container row mt-5" style="font-family:Muli;">
                    <div class="col-xl-12 mt-5">
                	    <form>
                          <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-md-8 col-sm-12 col-xs-12">
                                <table class="table mb-5">
                                    <tbody>
                                      <tr>
                                        <td><label for="orderID">ORDER ID</label></td>
                                        <td><input type="text" class="form-control" id="orderID" tabindex="0" size="22" name="orderID" value="<?php echo $orderID.$reff; ?>" readonly></td>
                                      </tr>
                                      <tr>
                                        <td><label for="reff">SERVICE ID</label></td>
                                        <td><input type="text" class="form-control" id="reff" tabindex="1" size="22" name="reff" value="<?php echo $service; ?>" readonly></td>
                                      </tr>
                                      <tr>
                                        <td><label for="custName">CUST NAME</label></td>
                                        <td><input type="text" class="form-control text-uppercase" id="custName" tabindex="2" size="22" name="custName" value="<?php echo $custName; ?>" readonly></td>
                                      </tr>
                                      <tr>
                                        <td><label for="email">EMAIL ID</label></td>
                                        <td><input type="email" class="form-control text-uppercase" id="email" tabindex="3" size="22" name="email" value="<?php echo $email; ?>" readonly></td>
                                      </tr>
                                      <tr>
                                        <td><label for="phone">PHONE NUMBER</label></td>
                                        <td><input type="tel" class="form-control" id="phone" tabindex="4" size="22" name="phone" value="<?php echo $phone; ?>" readonly></td>
                                      </tr>
                                      <tr>
                                        <td><label for="amount">PAYMENT VALUE</label></td>
                                        <td><input type="text" class="form-control" id="TXN_AMOUNT" tabindex="5" size="22" name="TXN_AMOUNT" value="<?php echo $amount; ?>" readonly></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                    <h3 class="text-center mt-5 mb-5">You are making payment of <b style="color: steelblue;">₹ <?php echo $amount; ?></b></h3>                                
                                <div class="text-center">
                                    <button type="button" id="JsCheckoutPayment" name="submit" class="btn btn-primary btn-lg mt-5 mb-5">Proceed to Payment</button>
                                </div>
                                </div>
                                <!-- google ad apace -->
                                <div class="col-xl-4 col-md-4 col-sm-12 col-xs-12" style="margin-bottom:50px; text-align:center;">
                                    <!-- W6 -->
                                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6503888656378042" data-ad-slot="4746809429" data-ad-format="auto" data-full-width-responsive="true"></ins>
                                    <script> (adsbygoogle = window.adsbygoogle || []).push({});</script>
                                </div>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div><br><hr>
        </main>
        <!-- footer of the page -->
        <footer id="footer">
            <div class="max-container" style="max-width: 100%;" ;>
                <div class="f1">
                    <div class="holder"> <strong class="logo-footer"> <a href="#"> <i class="icon"></i> <span class="img"> <img alt="SHERANISEVENTS" src="../lib/images/logowhite.png" /> </span> </a> </strong> <!-- footer-txt -->
                        <div class="footer-txt">
                            <div class="text">
                                <p> Private Events | Corporate Events | Wedding Photography | Video Shoot & Cinematography | Event Management | Promotional Events | Product Launching | Celebrity & Artist Management | Educational Workshops | Event Decoration | Theme Parties | and everything related to your event... </p>
                                <div class="contact">
                                    <address> <span class="yellow"> <i class="fad fa-map-marked-alt"></i> : </span> <a href="https://sheranisevents.in/nav">Opposite A.N College, Boring Road, <br />&ensp;&ensp;&ensp;&ensp;Patna, Bihar, IN 800013 </a> </address> <span class="email"> <span class="yellow"> <i class="fad fa-at"></i> : </span> <a href="mailto:contact@sheranisevents.in">contact&#64;sheranisevents.in</a> </span> <span class="email"> <span class="yellow"> <i class="fad fa-at"></i> : </span> <a href="mailto:sheranisevents@gmail.com">sheranisevents&#64;gmail.com</a> </span> <span class="email"> <span class="yellow"> <i class="fad fa-phone-rotary"></i> : </span> <a href="tel:+919934447200">(+91) 993 444 7200</a> </span> <span class="email"> <span class="yellow"> <i class="fab fa-whatsapp"></i> : </span> <a href="https://sheranisevents.in/ping" target="_blank">(+91) 7766 80 6677</a> </span>
                                </div>
                            </div>
                            <ul class="testimonial" style="text-align: center;">
                                <li>
                                    <div class="fb-page" data-href="https://www.facebook.com/sheranisevents" data-tabs="" data-width="380" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/sheranisevents" class="fb-xfbml-parse-ignore"> <a href="https://www.facebook.com/sheranisevents">SheranisEvents Pvt. Ltd.</a> </blockquote>
                                    </div>
                                </li>
                                <li> <a href="https://www.instagram.com/sheranisevents/" target="_blank"> <img src="../lib/images/instagram.png" alt="Check out our Instagram!" style="width: 45%;padding: 0 20px;" /> </a> <a href="https://www.linkedin.com/company/sheranisevents/" target="_blank"> <img src="../lib/images/linkedin.png" alt="Follow us on LinkedIn!" style="width: 45%;padding: 0 20px;" /> </a> </li>
                                <li> <a href="#testimonial"> <img id="testimonial-btn" src="../lib/images/testimonial.png" alt="Give Testimonial!" style="width: 50%;padding: 0 20px;" /> </a> <a href="https://sheranisevents.in/review" target="_blank"> <img src="../img/greview.png" alt="Google Review" style="width: 38%;padding: 0 20px;" /> </a> </li>
                            </ul>
                        </div>
                    </div> <!-- Contact Form  -->
                    <div class="frame">
                        <div class="wpcf7">
                            <form id="myform" action="" class="wpcf7-form f-contact-form" enctype="multipart/form-data" method="post">
                                <h3>We will love to hear from you!</h3>
                                <div class="rows"> <span class="wpcf7-form-control-wrap text-field-required"> <input type="text" id="name" name="name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Name" /> </span> </div>
                                <div class="rows"> <span class="wpcf7-form-control-wrap Emailfield"> <input type="email" id="email" name="email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email-class wpcf7-use-title-as-watermark" size="12" placeholder="Email" /> </span> </div>
                                <div class="rows"> <span class="wpcf7-form-control-wrap text-field-required"> <input type="text" id="mobile" name="mobile" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Phone Number" /> </span> </div>
                                <div class="rows"> <span class="wpcf7-form-control-wrap textarea"> <textarea name="message" id="message" class="wpcf7-form-control wpcf7-textarea textarea-class wpcf7-use-title-as-watermark" rows="9" cols="39" placeholder="Your Message"></textarea> </span> </div> <input type="submit" id="submit" value="SEND MESSAGE" onclick="return check()" /> <br /> <br /> <br />
                                <p id="result_msg"></p> <!-- Contact Form Result -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="f2">
                    <!-- sub-nav -->
                    <ul class="sub-nav">
                        <li> <a href="../careers">Careers</a> </li>
                        <li> <a href="../p/TC">T&amp;C</a> </li>
                        <li> <a href="../p/RCPolicy">Refund & Cancellation Policy</a> </li>
                        <li> <a href="../p/PrivacyPolicy">Privacy Policy</a> </li>
                        <li> <a href="../p/Press">Press Release</a> </li>
                    </ul> <span class="copyright"> <b>Crafted by <a href="../team">#SheranisEvents</a> &copy; All rights reserved. </b> </span>
                </div>
            </div>
        </footer> <span id=back-top class="fa fa-arrow-up"></span>
    </div>
    <!-- JS here -->
    <script src=../js/javascript.js></script>
    <script type="application/javascript">
       document.getElementById("JsCheckoutPayment").addEventListener("click", function(){
          openJsCheckoutPopup('<?php echo $result['orderId']?>','<?php echo $result['txnToken']?>','<?php echo $result['amount']?>', '<?=$custName?>', '<?=$phone?>', '<?=$email?>');
       });
    </script>
</body>
</html>