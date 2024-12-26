<?php
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$message = $_REQUEST['message'];
$cc = $_REQUEST['cc'];
$source = $_REQUEST['source'];
$name = $_REQUEST['fname'];
$mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];

$emailregex = '/^(jayesh04|jay06|jay04|jayesh06|jituhirani72)@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

if (preg_match($emailregex, $email)) {
    echo 'Please enter valid Name';
    echo '</br>';
    echo "<a href='/'>Go Back</a>";
    die;
}

require_once 'send_leads.php';

$emailClass = new PostData();

if ((!isset($_COOKIE['formfilled'])) && isset($_REQUEST['mobile'])) {

    $emailClass->callback();
    setcookie('formfilled', 'yes');
    setcookie('cookienum', $_REQUEST['mobile'], time() + 86400);
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PHKKVMK3');
    </script>
    <!-- End Google Tag Manager -->

    <img src="https://click.cereone.com/p?m=3376&t=i&gb=1" width="0px" height="0px">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/fav.webp" type="image/png" sizes="16x16">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>Raheja Residency | Thank You</title>
    <!--    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="intl-tel-input/css/intlTelInput.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body class="site com-sppagebuilder view-page no-layout no-task itemid-550 en-gb ltr  sticky-header layout-fluid">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHKKVMK3"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="body-innerwrapper">

        <section id="sp-main-body">
            <div class="">
                <div id="sp-component" class="col-sm-12 col-md-12">
                    <div class="sppb-row-container">


                        <section style="min-height: 328px;">
                            <div class="space">
                                <div class="wrap"
                                    style="margin:0% auto;padding:15px;height:auto !important;padding-bottom: 50px;">

                                    <span class="msgicon" aria-hidden="true"><i class="fa fa-check"
                                            aria-hidden="true"></i></span>
                                    <h2 class="oops">You're all set!</h2>
                                    <h3 class="oops-greet" style="text-align:center;">Greetings from Raheja Residency
                                    </h3>
                                    <h3 class="oops-subtitle" style="text-align:center;">
                                        Thank you for expressing interest on our website.<br />
                                        Our expert will get in touch with you shortly.
                                    </h3>

                                    <a href="index.php" style="text-decoration: none;">
                                        <h2 class="go-home"><span class="" aria-hidden="true"><i
                                                    class="fa fa-arrow-left" aria-hidden="true"></i></span> GO
                                            BACK TO HOME</h2>
                                    </a>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <br clear="all" />


        <section class="sec__footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                            <img src="images/logo.webp" alt="" class="flogo">
                            <!-- <img src="images/qr.webp" alt="" class="qrlogo"> -->
                        </div>
                        <div class="footer_desc">
                            <p>
                                Disclaimer: The content available on this website is intended solely for informational purposes and should not be construed as a formal offer of services or a binding agreement. The prices mentioned on the website are indicative and may be revised or updated without prior notice. Additionally, the availability of the properties listed cannot be assured and is subject to change based on market conditions or other factors. The images provided on the website are illustrative in nature and are not guaranteed to accurately represent the actual properties, including their appearance, features, or specifications. Users are advised to verify all information independently before making any decisions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/popout.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>


</body>


</html>