<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Raheja residency</title>
    <link rel="icon" href="images/fav.webp" type="image/jpg" sizes="16x16">
    <meta name="description" content="" />
    <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Philosopher" /> -->
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <!--    <link href="lightbox/light-box.css" rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/form.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <style>
        .her {
            text-align: center;
            vertical-align: middle !important;
            width: 1%;
        }

        @media screen and (max-width:767px) {
            .mobile-view-num {
                display: none;
            }
        }

        .fa-phone {
            margin-right: 0.5em;
        }
    </style>


</head>

<body>
    <header class="normal-header">
        <div class="container-fluid relative">
            <div class="col-md-1">
                <div class="pull-left logo-wrapper">
                    <a href="javascript:void (0);" rel="home" class="pull-left">
                        <img data-event-category="header" data-event-action="click" data-event-name="logo"
                            src="images/logo.webp" class=" logo-color" />
                    </a>
                    <!--                    <img data-event-category="header" data-event-action="click" data-event-name="logo" class="hidden-xs"
                        src="<?php echo $assetBase; ?>images/logo.webp"
                        style="background: #fff;width: 166px;/* margin-left: 45px; */position: relative;left: 20px;top: 4px;"> -->
                </div>
            </div>`

            <div class="col-md-10">
                <div class="text-right nav-wrapper">
                    <nav class="nav-links">

                        <a rel="overview" data-event-category="header" data-event-action="click"
                            data-event-name="menu-Overview">Overview</a>
                        <a rel="configuration" data-event-category="header" data-event-action="click"
                            data-event-name="menu-Configuration">Configuration</a>
                        <!--<a rel="specifications" data-event-category="header" data-event-action="click"
                    data-event-name="menu-about-specifications">specifications</a>-->
                        <a rel="amenities" data-event-category="header" data-event-action="click"
                            data-event-name="menu-location">Amenities</a>
                        <a rel="location-new" data-event-category="header" data-event-action="click"
                            data-event-name="menu-location">Location</a>
                        <a rel="gallery" data-event-category="header" data-event-action="click"
                            data-event-name="menu-location">Gallery</a>
                        <a rel="contact" data-event-category="header" data-event-action="click"
                            data-event-name="tact">Contact Us
                        </a>

                        <!-- <button class="degform">
                            <p>360&deg;</p>
                        </button> -->
                        <!-- <a data-fancybox="view360" data-type="iframe" data-src="https://view.pixeldo.com/PiramalAranya/"
                            href="javascript:void (0);">360&deg;</a> -->
                        <a href="tel:+91 9324907521" class="mobile-view-num"> <i class="fa fa-phone"></i>9324907521</a>

                    </nav>
                </div>
            </div>
            <!-- <div class="col-md-1 hidden-xs">
                <img data-event-category="header" data-event-action="click" data-event-name="logo"
                    src="<?php echo $assetBase; ?>images/logo/Logo.png" class=" logo-color">
            </div> -->
            <div class="burger-menu hide-in-desktop">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </header>

    <section class="relative" id="home">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="d-banner" src="images/slider/1.webp" alt="banner"
                        style="width: 100%; margin-top:-11px !important;">
                    <img class="m-banner" src="images/slider/m1.webp" alt="banner" style="width: 100%">
                </div>
                <div class="item ">
                    <img class="d-banner" src="images/slider/2.webp" alt="banner"
                        style="width: 100%; margin-top:-11px !important;">
                    <img class="m-banner" src="images/slider/m2.webp" alt="banner" style="width: 100%">
                </div>
                <div class="item ">
                    <img class="d-banner" src="images/slider/3.webp" alt="banner"
                        style="width: 100%; margin-top:-11px !important;">
                    <img class="m-banner" src="images/slider/m3.webp" alt="banner" style="width: 100%">
                </div>
                <div class="item ">
                    <img class="d-banner" src="images/slider/4.webp" alt="banner"
                        style="width: 100%; margin-top:-11px !important;">
                    <img class="m-banner" src="images/slider/m4.webp" alt="banner" style="width: 100%">
                </div>
                <div class="item ">
                    <img class="d-banner" src="images/slider/5.webp" alt="banner"
                        style="width: 100%; margin-top:-11px !important;">
                    <img class="m-banner" src="images/slider/m5.webp" alt="banner" style="width: 100%">
                </div>
                <div class="item ">
                    <img class="d-banner" src="images/slider/6.webp" alt="banner"
                        style="width: 100%; margin-top:-11px !important;">
                    <img class="m-banner" src="images/slider/m6.webp" alt="banner" style="width: 100%">
                </div>
            </div>

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-chevron-circle-left glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fa fa-chevron-circle-right glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- overview start -->

    <section class="glob-sec" style="text-align: center;" id="overview">
        <div class="container pd-0">

            <div class="over-form col-12">
                <div class="col-md-8 ">
                    <h3>Overview</h3>
                    <h2>Premimum Tower ‘T’</h2>
                    <div class="section-subtitle12">
                        TOWER ‘T’ is a 20-storey high-rise tower offering the finest ready-possession 1 BHK flats for
                        sale in Malad East. These luxury homes by K Raheja Realty are thoughtfully designed to provide
                        maximum functionality and help you make the most out of every square foot. From the strategic
                        placement of windows that let ample sunlight and air flow into the house, to the smart layouts
                        that allow you to make optimal use of the entire space – these flats are indeed an excellent
                        choice for homebuyers in Mumbai. Moreover, they are equipped with high-quality features and
                        premium finishes for the most opulent look and feel. The best part is that the apartments are
                        ready-to-move - which means you can shift into your dream home here without any delay, and
                        embrace all the happy experiences it has in store for you and your family right away.
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="modal-body" id="register-body">
                        <div class="row ">

                            <div class="col-lg-12">
                                <p class="text4 txtWhite hidden-xs">Enquire Now</p>
                                <h4 class="modal-title tits visible-xs" id="register-desk">Register Your Interest</h4>


                                <p class="text14 mrg-btm1 visible-xs" id="subtext">Please enter your name and enter
                                    your phone
                                    number and we will
                                    call you back.</p>
                                <form class="row form-wrap-brch" action="thank-you.php" method="POST" id="float-form"
                                    name="float-form" novalidate="novalidate"
                                    onsubmit="return save_landing_pageinfo('float-form');">
                                    <div class="col-xl-12">
                                        <div class="frm-gro">
                                            <div class="form-group wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <input type="text" class="form-control" name="fname"
                                                    placeholder="Enter Your Name*">
                                            </div>
                                            <!-- <div class="form-group wow fadeInUp">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name*">
            </div> -->
                                            <label for="fname" class="error"></label>
                                        </div>

                                    </div>

                                    <div class="col-xl-12">
                                        <div class="frm-gro">
                                            <div class="form-group wow fadeInUp"
                                                style=" visibility: visible; animation-name: fadeInUp;">
                                                <!-- <div class="ccDropDown" id="country_code"></div> -->
                                                <!-- <input type="text" class="form-control  otp-num" id=" phone"
                                                    name="mobile" placeholder="Phone*" onkeyup="send_otp('float-form')"> -->

                                                <input onkeyup="send_otp('float-form')" type="text" id="mob-input"
                                                    class="form-control custom-input mob-input number-only"
                                                    maxlength="10" name="mobile" placeholder="Mobile*">
                                                <p id="float-form-mobdigits" style="color: #000"></p>

                                            </div>
                                            <label for="mobile" class="error"></label>
                                        </div>

                                    </div>

                                    <div class="col-md-12 pd0">
                                        <div id="float-form-otpbox" class="otp_box">

                                            <div class="col-xl-12">
                                                <div class="frm-gro">
                                                    <div class="form-group wow fadeInUp "
                                                        style="visibility: visible; animation-name: fadeInUp;">
                                                        <input type="text" class="form-control" id="email" name="email"
                                                            placeholder="Email ID*">
                                                    </div>
                                                    <label for="email" class="error"></label>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 ">

                                                <p class="text9 txtWhite mrg-btm1 wow fadeInUp"
                                                    style="visibility: visible; animation-name: fadeInUp;" id="i-ag">
                                                    <input type="checkbox" checked style="width: 5%;">
                                                    I Agree to
                                                    the <a href="" target="_blank" class="link3">Terms and
                                                        Conditions</a>
                                                </p>
                                                <button type="submit" class="btn btn-submit wow fadeInUp"
                                                    style="visibility: visible; animation-name: fadeInUp;">
                                                    <span>Submit</span></button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
            <div class="col-md-12 wrap2">
                <div class="col-md-12">
             
                    <div class="section-subtitle relative">
                        <img src="images/logo/Logo.png" class="img-responsive div">
                    </div>

                </div>
            </div> -->

        </div>
    </section>


    <!-- highlight start -->

    <section class="" id="masterplan-2">
        <div class="container">
            <div class="sec-title">
                <h2 class="sec-head head-center wow fadeInUp hidden-xs" data-wow-duration="1s" data-wow-delay="0.5s">
                    Highlights
                </h2>
                <h2 class="sec-head head-center wow fadeInUp visible-xs" data-wow-duration="1s" data-wow-delay="0.5s">
                    Highlights
                </h2>
            </div>
            <!--<h3 class="sub-head">View Your Dream Homes</h3>-->
            <div style="width: 100%;height: 20px;"></div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="content-wrapper text-center">
                        <div class="list-items">
                            <p>20 Storey Tower T (Next To Clubhouse)</p>
                            <p>Large Podium Garden</p>
                            <p>Stilt + 3 Level Dedicated Parking</p>
                            <p>Double-height Arrival Lobby</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="content-wrapper text-center">
                        <div class="list-items">
                            <p>Overlooking The Dream Garden</p>
                            <p>Equipped With High-quality Features & Premium Finishes</p>
                            <p>Expansive Clubhouse (Oc-received)</p>
                            <p>Smart Layouts That Allow Optimal Use Of The Entire Space</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- highlight ends -->
    <section class="" id="configuration">
        <div class="conf-back">
            <div class="container">
                <h1 class="section-header  section-title foo" style="color: #fff;">Project <span>Configuration</span>
                </h1>
                <div class="section-subtitle relative" style="color: #fff;">
                    <img src="" class="img-responsive div">
                </div>

                <div style="text-align: center;" class="">
                    <table class="table foo tbl" style="text-align: center; margin: auto; width: 100%;" border="0">
                        <thead
                            style="background-image: url(./images/config/3d-rendering-beautiful-luxury-bedroom-suite-hotel-with-tv.jpg)!important;">
                            <tr>
                                <th class="her">
                                    <h3>Unit Type</h3>
                                </th>
                                <th class="her">
                                    <h3>Carpet Area</h3>
                                </th>
                                <th class="her">
                                    <h3>Price</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="her1">1 BHK</td>
                                <td class="her1">472 to 489 sq. ft. </td>
                                <td class="her1 cursor click_here">
                                    <a href="javascript:void(0)" class="price-click">
                                        Click Here
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="ameni_sec" id="amenities">
        <div class="section-title">
            Amenities
        </div>
        <div class="flor-carousel owl-carousel owl-theme">
            <div class="item">
                <div class="ameni_img">
                    <img src="images/ameni/1.webp" alt="">
                    <div class="ameni_para">
                        <p>Public Garden Maintained & Developed by K Raheja Realty</p>
                    </div>
                </div>
            </div>
            <!-- <div class="item">
                <div class="ameni_img">
                    <img src="images/ameni/2.webp" alt="">
                    <div class="ameni_para">
                        <p>Multipurpose Room</p>
                    </div>
                </div>
            </div> -->
            <div class="item">
                <div class="ameni_img">
                    <img src="images/ameni/3.webp" alt="">
                    <div class="ameni_para">
                        <p>Squash Court</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ameni_img">
                    <img src="images/ameni/4.webp" alt="">
                    <div class="ameni_para">
                        <p>Indoor Play Area</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ameni_img">
                    <img src="images/ameni/5.webp" alt="">
                    <div class="ameni_para">
                        <p>Well Equipped Gym</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- connectivity and conveience start -->

    <section class="loc_sec" id="location-new">
        <div class="container">
            <h2 class="head-center section-title" data-aos="flip-up" data-aos-duration="800" data-aos-delay="0" style="color: #fff;">
                Location Advantages
            </h2>
            <div class="row flex-box ">
                <div class="col-md-6">
                    <div class="border-map">
                        <a href="images/map.webp" data-fancybox="location-map">
                            <img src="images/map.webp" width='100%' alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="accordion" class="panel-group" data-aos="flip-up" data-aos-duration="800"
                        data-aos-delay="200">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyOne" class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion"
                                        aria-expanded="false">Education</a>
                                </h4>
                            </div>
                            <div id="panelBodyOne" class="panel-collapse collapse in" aria-expanded="false">
                                <div class="panel-body">
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Ryan International (1.2 Kms)</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Gokuldham High School & Jr. College (1.5 Kms)</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Yashodham High School & Jr. College (1.8 Kms)</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Oberoi International School (2.3 Kms)</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Vibgyor High School (2.3 Kms)</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Atharva College (8 Kms)</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyTwo" class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion"
                                        aria-expanded="false">Retail & Commercial Hubs</a>
                                </h4>
                            </div>
                            <div id="panelBodyTwo" class="panel-collapse collapse" aria-expanded="false"
                                style="height: 0px;">
                                <div class="panel-body">
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Infinity IT Park (0.6 Kms)</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Gokuldham Market (1.2 Kms)</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Oberoi Mall (2 Kms) </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Nirlon Knowledge Park (4.8 Kms) </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; NESCO (5.4 Kms) </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyThree" class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Healthcare</a>
                                </h4>
                            </div>
                            <div id="panelBodyThree" class="panel-collapse collapse" aria-expanded="false"
                                style="height: 0px;">
                                <div class="panel-body">
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Jagruti Hospital (0.7 km) </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Gokuldham Medical Centre (1.4 Kms) </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Sai Kripa Hospital & ICU (4.6 Kms) </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Suvidha Hospital (5.7 Kms) </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Vivanta Hospital (5.8 Kms)</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Kapadia Multispeciality Hospital (7.5 Kms)</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyfour" class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Travel
                                    </a>
                                </h4>
                            </div>
                            <div id="panelBodyfour" class="panel-collapse collapse" aria-expanded="false"
                                style="height: 0px;">
                                <div class="panel-body">
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Proposed Goregaon-Mulund Link Road (GMLR) Flyover - (0.35 Kms)
                                    </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Western Express Highway (2.6 Kms)
                                    </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Aarey Metro Station (2.6 Kms)
                                    </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Dindoshi Metro Station (3 Kms)
                                    </p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; International Airport (13 Kms)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <!-- end of connectivity and convenience -->

    <!-- gallery start -->

    <section id="gallery" class="sppb-section  resort-title-heading wow">
        <div class="container">
            <div class="sppb-section-title sppb-text-center">
                <div class="col-md-12 wrap1">
                    <div class="col-md-12">
                        <h2 class="section-title">
                            Gallery
                        </h2>
                    </div>
                </div>
                <div class="sppb-row">
                    <div class="sppb-col-sm-12">
                        <div id="column-id-1507611942" class="sppb-column">
                            <div class="sppb-column-addons">
                                <div id="sppb-addon-1507611943" class="clearfix">
                                    <div class="sppb-addon sppb-addon-latest-posts ">
                                        <div class="sppb-addon-content">
                                            <div class="latest-posts clearfix">
                                                <div class="sppb-row">
                                                    <ul class="nav nav-tabs mytab" role="tablist">
                                                        <!-- <li role="presentation" class="">
                                                            <a href="#3dplan" aria-controls="settings" role="tab"
                                                                data-toggle="tab" aria-expanded="false">Exterior
                                                            </a>
                                                        </li>
                                                        <li role="presentation" class="">
                                                            <a href="#ami" aria-controls="profile" role="tab"
                                                                data-toggle="tab" aria-expanded="true">Interior
                                                            </a>
                                                        </li> -->
                                                        <li role="presentation" class="active">
                                                            <a href="#floorplan" aria-controls="profile" role="tab"
                                                                data-toggle="tab" aria-expanded="true">Floor Plan
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content delay-09s animated wow fadeInDown animated"
                                                        style="visibility: visible; animation-name: fadeInDown;">

                                                        <div role="tabpanel" class="tab-pane fade "
                                                            id="3dplan">
                                                            <div class="latest-post col-sm-4">
                                                                <div class="latest-post"
                                                                    style="background-image: url(images/exterior/09.jpg);">
                                                                    <div class="latest-post-inner match-height">
                                                                        <span class="link-icon">
                                                                            <a data-fancybox="general"
                                                                                href="images/exterior/09.jpg">
                                                                                <i class="fa fa-chain"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="latest-post col-sm-4">
                                                                <div class="latest-post"
                                                                    style="background-image: url(images/config/connff.jpg);">
                                                                    <div class="latest-post-inner match-height">
                                                                        <span class="link-icon">
                                                                            <a data-fancybox="general"
                                                                                href="images/config/connff.jpg">
                                                                                <i class="fa fa-chain"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="latest-post col-sm-4">
                                                                <div class="latest-post"
                                                                    style="background-image: url(images/exterior/12.jpg);">
                                                                    <div class="latest-post-inner match-height">
                                                                        <span class="link-icon">
                                                                            <a data-fancybox="general"
                                                                                href="images/exterior/12.jpg">
                                                                                <i class="fa fa-chain"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade  " id="ami">

                                                            <div class="latest-post col-sm-4">
                                                                <div class="latest-post"
                                                                    style="background-image: url(images/interior/001.png);">
                                                                    <div class="latest-post-inner match-height">
                                                                        <span class="link-icon">
                                                                            <a data-fancybox="interior"
                                                                                href="images/interior/001.png">
                                                                                <i class="fa fa-chain"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="latest-post col-sm-4">
                                                                <div class="latest-post"
                                                                    style="background-image: url(images/interior/002.jpg);">
                                                                    <div class="latest-post-inner match-height">
                                                                        <span class="link-icon">
                                                                            <a data-fancybox="interior"
                                                                                href="images/interior/002.jpg">
                                                                                <i class="fa fa-chain"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="latest-post col-sm-4">
                                                                <div class="latest-post"
                                                                    style="background-image: url(images/interior/003.jpg);">
                                                                    <div class="latest-post-inner match-height">
                                                                        <span class="link-icon">
                                                                            <a data-fancybox="interior"
                                                                                href="images/interior/003.jpg">
                                                                                <i class="fa fa-chain"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade active in" id="floorplan">
                                                            <div class="latest-post col-sm-4 new-thing">
                                                                <div class="latest-post"
                                                                    style="background-image: url(images/floor/1.webp);">
                                                                    <div class="latest-post-inner match-height">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="latest-post col-sm-4 new-thing">
                                                                <div class="latest-post"
                                                                    style="background-image: url(images/floor/2.webp);">
                                                                    <div class="latest-post-inner match-height">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="latest-post col-sm-4 new-thing">
                                                                <div class="latest-post"
                                                                    style="background-image: url(images/floor/3.webp);">
                                                                    <div class="latest-post-inner match-height">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--galler ends -->

    <!-- about us start -->

    <section class="abt_sec" id="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="head-center section-title" data-aos="flip-up" data-aos-duration="800" data-aos-delay="0">
                        About Us
                    </h2>
                    <h4 class="section-subtitle12">
                        Headquartered in Mumbai, K Raheja Realty has been one of the most prolific real
                        estate developers across all asset classes in Mumbai since 1956.
                        We have been pioneers of the multi-dimensional real estate developer concept in
                        India and are counted among the best builders in the nation.
                        As a close-knit, vertically integrated real estate development company, we offer
                        in-house expertise that spans every aspect of the real estate equation. With a passion for excellence and a vision to exceed our customers' expectations every time, we at K Raheja Realty Group have delivered exemplary projects over the decades. All these projects have been ahead of their time in planning, scale, and form.
                        Our mantra of global expertise, local focus, and trusted partners has earned us an
                        impeccable reputation of trust and dependability.

                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!-- about us ends -->


    <section class="loc_sec" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title" style="color: #fff;">
                        Contact Us
                    </h2>
                </div>
            </div>
            <form id="contact-form" action="thank-you.php" name="contact-form" method="POST"
                onsubmit="return save_landing_pageinfo('contact-form');">
                <div class="row">
                    <div class="form-group col-md-offset-2 col-md-8 pd">
                        <div class="input-group">
                            <!-- <div class="input-group-addon"><i class="fa fa-user form-ico" aria-hidden="true"></i>
                            </div> -->
                            <input type="text" class="form-control" name="fname" placeholder="Full Name*">
                            <input type="hidden" name="source" value="Enquiry Form" id="source">
                        </div>
                        <label for="fname" generated="true" class="error"></label>
                    </div>

                    <div class="form-group col-md-offset-2 col-md-8 ">
                        <div class="input-group">
                            <!-- <div class="input-group-addon"><i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                            </div> -->
                            <input onkeyup="send_otp('contact-form')" type="text" id="mob-input"
                                class="form-control custom-input mob-input number-only" maxlength="10" name="mobile"
                                placeholder="Mobile*">
                            <p id="contact-form-mobdigits" style="color: #000"></p>
                        </div>

                        <label for="mobile" generated="true" class="error"></label>
                    </div>
                    <div class="col-md-offset-2 col-md-8 pd0">
                        <div id="contact-form-otpbox" class="otp_box">
                            <div class="form-group col-md-12 pd">
                                <div class="input-group">
                                    <!-- <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div> -->
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email Address*">
                                    <!-- <input type="hidden" name="country_code" value="" id="calling_code"> -->
                                </div>
                                <label for="email" generated="true" class="error"></label>
                            </div>
                            <textarea class="form-control" id="msg" rows="3" name="message"
                                placeholder="Your Message"></textarea>

                            <button type="submit" class="btn btn-default price-btn" value="proceed">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
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

    <div class="col-lg-12 col-sm-12 col-xs-12 fixed-footer-cust hidden-md hidden-lg hidden-sm">
        <div class="container">
            <div class="col-lg-6 col-sm-6 col-xs-6 div-line pd0">
                <a href="tel: +91 9324907521" class="fix-link callme">
                    <i class="fa fa-phone f-icon" aria-hidden="true"></i> CALL NOW
                </a>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-6 pd0">
                <button class="btn interested fix-link i-am"><i class="fa fa-envelope"></i> ENQUIRE NOW</button>
            </div>
        </div>
    </div>


    <div id="pageloader">
        <img src="images/loader.gif" alt="processing..." />
    </div>

    <!-- ================ main popup ==================== -->


    <div class="modal fade in" tabindex="-1" role="dialog" id="main-pop" data-backdrop="static" data-keyboard="false"
        style="opacity: 1;">
        <div class="modal-backdrop fade in"></div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row ">
                        <div class="col-lg-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true" style=" font-size: 35px">X</span></button>
                            <h4 class="modal-title tits">Express Your Interest</h4>
                            <p class="text14 mrg-btm1">Please enter your name and enter your phone number and we will
                                call you back.</p>
                            <form class="row form-wrap-brch" action="thank-you.php" method="POST" id="main-pop"
                                name="main-pop" novalidate="novalidate"
                                onsubmit="return save_landing_pageinfo('main-pop');">
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" class="form-control" name="fname"
                                                placeholder="Enter Your Name*">
                                        </div>

                                        <label for="fname" class="error"></label>
                                    </div>

                                </div>
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style=" visibility: visible; animation-name: fadeInUp;">
                                            <!-- <div class="ccDropDown" id="country_code"></div> -->
                                            <!-- <input type="text" class="form-control  otp-num" id=" phone"
                                                    name="mobile" placeholder="Phone*" onkeyup="send_otp('float-form')"> -->

                                            <input onkeyup="send_otp('main-pop')" type="text" id="mob-input"
                                                class="form-control custom-input mob-input number-only" maxlength="10"
                                                name="mobile" placeholder="Mobile*">
                                            <p id="main-pop-mobdigits" style="color: #000"></p>

                                        </div>
                                        <label for="mobile" class="error"></label>
                                    </div>

                                </div>

                                <div class="col-md-12 pd0">
                                    <div id="main-pop-otpbox" class="otp_box">

                                        <div class="col-xl-12">
                                            <div class="frm-gro">
                                                <div class="form-group wow fadeInUp "
                                                    style="visibility: visible; animation-name: fadeInUp;">
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        placeholder="Email ID*">
                                                </div>
                                                <label for="email" class="error"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">

                                            <p class="text9 txtWhite mrg-btm1 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;" id="i-ag">
                                                <input type="checkbox" checked style="width: 5%;">
                                                I Agree to
                                                the <a href="" target="_blank" class="link3">Terms and
                                                    Conditions</a>
                                            </p>
                                            <button type="submit" class="btn btn-submit wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <span>Submit</span></button>
                                        </div>
                                    </div>
                                </div>
                                <span>Submit</span></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div>

    <!-- ================ price popup ==================== -->


    <div class="modal fade in" tabindex="-1" role="dialog" id="price-model" data-backdrop="static"
        data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h4 class="modal-title">Price</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">X</span></button>
                </div> -->
                <div class="modal-body">
                    <div class="row ">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true" style=" font-size: 35px">X</span></button>
                        <div class="col-lg-12">
                            <!-- <p class="text4 txtWhite">Express Your Interest</p> -->
                            <h4 class="modal-title tits">Express Your Interest</h4>


                            <p class="text14 mrg-btm1">Please enter your name and enter your phone number and we will
                                call you back.</p>
                            <form class="row form-wrap-brch" action="thank-you.php" method="POST" id="price-popup"
                                name="price-popup" novalidate="novalidate"
                                onsubmit="return save_landing_pageinfo('price-popup');">
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" class="form-control" name="fname"
                                                placeholder="Enter Your Name*">
                                        </div>
                                        <!-- <div class="form-group wow fadeInUp">
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name*">
                            </div> -->
                                        <label for="fname" class="error"></label>
                                    </div>

                                </div>
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style=" visibility: visible; animation-name: fadeInUp;">
                                            <!-- <div class="ccDropDown" id="country_code"></div> -->
                                            <!-- <input type="text" class="form-control  otp-num" id=" phone"
                                                    name="mobile" placeholder="Phone*" onkeyup="send_otp('float-form')"> -->

                                            <input onkeyup="send_otp('price-popup')" type="text" id="mob-input"
                                                class="form-control custom-input mob-input number-only" maxlength="10"
                                                name="mobile" placeholder="Mobile*">
                                            <p id="price-popup-mobdigits" style="color: #000"></p>

                                        </div>
                                        <label for="mobile" class="error"></label>
                                    </div>

                                </div>

                                <div class="col-md-12 pd0">
                                    <div id="price-popup-otpbox" class="otp_box">

                                        <div class="col-xl-12">
                                            <div class="frm-gro">
                                                <div class="form-group wow fadeInUp "
                                                    style="visibility: visible; animation-name: fadeInUp;">
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        placeholder="Email ID*">
                                                </div>
                                                <label for="email" class="error"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">

                                            <p class="text9 txtWhite mrg-btm1 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;" id="i-ag">
                                                <input type="checkbox" checked style="width: 5%;">
                                                I Agree to
                                                the <a href="" target="_blank" class="link3">Terms and
                                                    Conditions</a>
                                            </p>
                                            <button type="submit" class="btn btn-submit wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <span>Submit</span></button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <!-- ================ i am  ==================== -->
    <div class="modal fade in" tabindex="-1" role="dialog" id="iam-model" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h4 class="modal-title">Express Your Interest</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">X</span></button>
                </div> -->
                <!-- <div class="modal-body">
                    <p>Please select your name and enter your phone number and we will call you back.</p>

                    <form id="float-form" action="thank-you.php" name="float-form" method="POST"
                        onsubmit="return save_landing_pageinfo('float-form');">
                        <div class="form-group col-md-12 pd">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="fname" placeholder="Full Name">
                                <input type="hidden" name="source" value="Im Interested" id="source">
                            </div>
                            <label for="fname" generated="true" class="error"></label>
                        </div>


                           <div class="form-group col-md-12 ">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                </div>
                                <select name="cc" id="cc">
                                    <option value="">Select Country Code</option>
                                    <option value="971">United Arab Emirates (+971)</option>
                                    <option value="968">Oman (+968)</option>
                                    <option value="973">Bahrain (+973)</option>
                                    <option value="965">Kuwait (+965)</option>
                                    <option value="966">Saudi Arabia (+966)</option>
                                    <option value="974">Qatar (+974)</option>
                                    <option value="61">Australia (+61)</option>
                                    <option value="65">Singapore (+65)</option>
                                    <option value="1">United States (+1)</option>
                                    <option value="44">United Kingdom (+44)</option>
                                    <option value="254">Kenya (+254)</option>
                                    <option value="255">Tanzania (+255)</option>
                                    <option value="91">India (+91)</option>
                                </select>
                            </div>
                            <label for="cc" generated="true" class="error"></label>
                        </div>


                        <div class="form-group col-md-12 ">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="number" id="mobile" placeholder="Mobile No.*" name="mobile" required>
                            </div>
                            <span id="errorMessage" style="display:none;color:red;font-weight:bold">Please enter correct
                                number of
                                digits</span>
                            <label for="mobile" generated="true" class="error"></label>
                        </div>
                        <div class="form-group col-md-12 pd">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email">


                                <input type="hidden" name="country_code" value="" id="calling_code">


                            </div>
                            <label for="email" generated="true" class="error"></label>
                        </div>


                        <div class="form-group col-md-12 pd">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bed" aria-hidden="true"></i>
                        </div>
                        <select name="conf" id="conf">
                            <option value="1 BHK" Selected>1 BHK</option>
                            <option value="2 BHK">2 BHK</option>
                            <option value="3 BHK">3 BHK</option>
                        </select>
                    </div>
                </div>


                        <textarea class="form-control" id="msg" rows="3" name="message"
                            placeholder="Your Message"></textarea>

                        <button type="submit" class="btn btn-default price-btn" value="proceed">SUBMIT</button>
                    </form>
                </div> -->

                <!--new form  start -->
                <div class="modal-body">
                    <div class="row ">
                        <button type="button" class="close" onclick="$('#iam-model').modal('hide');"
                            data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                                style=" font-size: 25px">X</span></button>
                        <div class="col-lg-12">
                            <!-- <p class="text4 txtWhite">Express Your Interest</p> -->
                            <h4 class="modal-title tits">Express Your Interest</h4>


                            <p class="text14 mrg-btm1">Please enter your name and enter your phone number and we will
                                call you back.</p>
                            <form class="row form-wrap-brch" action="thank-you.php" method="POST" id="iam-model"
                                name="float-form" novalidate="novalidate"
                                onsubmit="return save_landing_pageinfo('float-form');">
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" class="form-control" name="fname"
                                                placeholder="Enter Your Name*">
                                        </div>
                                        <!-- <div class="form-group wow fadeInUp">
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name*">
                            </div> -->
                                        <label for="fname" class="error"></label>
                                    </div>

                                </div>
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style=" visibility: visible; animation-name: fadeInUp;">
                                            <!-- <div class="ccDropDown" id="country_code"></div> -->
                                            <!-- <input type="text" class="form-control  otp-num" id=" phone"
                                                    name="mobile" placeholder="Phone*" onkeyup="send_otp('float-form')"> -->

                                            <input onkeyup="send_otp('iam-model')" type="text" id="mob-input"
                                                class="form-control custom-input mob-input number-only" maxlength="10"
                                                name="mobile" placeholder="Mobile*">
                                            <p id="iam-model-mobdigits" style="color: #000"></p>

                                        </div>
                                        <label for="mobile" class="error"></label>
                                    </div>

                                </div>

                                <div class="col-md-12 pd0">
                                    <div id="iam-model-otpbox" class="otp_box">

                                        <div class="col-xl-12">
                                            <div class="frm-gro">
                                                <div class="form-group wow fadeInUp "
                                                    style="visibility: visible; animation-name: fadeInUp;">
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        placeholder="Email ID*">
                                                </div>
                                                <label for="email" class="error"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">

                                            <p class="text9 txtWhite mrg-btm1 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;" id="i-ag">
                                                <input type="checkbox" checked style="width: 5%;">
                                                I Agree to
                                                the <a href="" target="_blank" class="link3">Terms and
                                                    Conditions</a>
                                            </p>
                                            <button type="submit" class="btn btn-submit wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <span>Submit</span></button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- new form ends -->





            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- ================ 360 degree  ==================== -->
    <div class="modal fade in" tabindex="-1" role="dialog" id="form-deg" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Experience 360 Degree View </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">X</span></button>
                </div>
                <div class="modal-body">
                    <p>Please enter the below details to experience 360 degree view.</p>

                    <form id="form-360" action="thank-you.php" name="form-360" method="POST"
                        onsubmit="return save_landing_pageinfo('form-360');">
                        <div class="form-group col-md-12 pd">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="fname" placeholder="Full Name">
                                <input type="hidden" name="source" value="360 form" id="source">
                            </div>
                            <label for="fname" generated="true" class="error"></label>
                        </div>
                        <!--    <div class="form-group col-md-12 ">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                </div>
                                <select name="cc" id="cc">
                                    <option value="">Select Country Code</option>
                                    <option value="971">United Arab Emirates (+971)</option>
                                    <option value="968">Oman (+968)</option>
                                    <option value="973">Bahrain (+973)</option>
                                    <option value="965">Kuwait (+965)</option>
                                    <option value="966">Saudi Arabia (+966)</option>
                                    <option value="974">Qatar (+974)</option>
                                    <option value="61">Australia (+61)</option>
                                    <option value="65">Singapore (+65)</option>
                                    <option value="1">United States (+1)</option>
                                    <option value="44">United Kingdom (+44)</option>
                                    <option value="254">Kenya (+254)</option>
                                    <option value="255">Tanzania (+255)</option>
                                    <option value="91">India (+91)</option>
                                </select>
                            </div>
                            <label for="cc" generated="true" class="error"></label>
                        </div> -->
                        <div class="col-xl-12">
                            <div class="frm-gro">
                                <div class="form-group wow fadeInUp"
                                    style=" visibility: visible; animation-name: fadeInUp;">
                                    <!-- <div class="ccDropDown" id="country_code"></div> -->
                                    <!-- <input type="text" class="form-control  otp-num" id=" phone"
                                                    name="mobile" placeholder="Phone*" onkeyup="send_otp('float-form')"> -->

                                    <input onkeyup="send_otp('form-360')" type="text" id="mob-input"
                                        class="form-control custom-input mob-input number-only" maxlength="10"
                                        name="mobile" placeholder="Mobile*">
                                    <p id="form-360-mobdigits" style="color: #000"></p>

                                </div>
                                <label for="mobile" class="error"></label>
                            </div>

                        </div>

                        <div class="col-md-12 pd0">
                            <div id="form-360-otpbox" class="otp_box">

                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp "
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" class="form-control" id="email" name="email"
                                                placeholder="Email ID*">
                                        </div>
                                        <label for="email" class="error"></label>
                                    </div>
                                </div>
                                <div class="col-lg-12 ">

                                    <p class="text9 txtWhite mrg-btm1 wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;" id="i-ag">
                                        <input type="checkbox" checked style="width: 5%;">
                                        I Agree to
                                        the <a href="" target="_blank" class="link3">Terms and
                                            Conditions</a>
                                    </p>
                                    <button type="submit" class="btn btn-submit wow fadeInUp"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <span>Submit</span></button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <!-- ================ I'm interested ==================== -->


    <button class="btn btn-danger interested i-am hidden-xs">I'm interested</button>

    <!-- <div class="modal fade in" tabindex="-1" role="dialog" id="roadblock" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background: #b18c6d;">
                <div class="modal-header" style="background: #fff;padding-top: 30px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="color: #000!important;">
                        <span aria-hidden="true" style="font-size: 30px;">×</span>
                    </button>
                    <img src="images/realty.png" alt="" style="width: 140px;margin: 15px auto;display: block;">
                    <h4 class="modal-title hidden-xs"
                        style="text-align: center;font-size: 19px;font-weight: 700;color: #000;">Welcome
                        to the Official Site of Novo-Gardenia</h4>
                    <h4 class="modal-title visible-xs"
                        style="text-align: center;font-size: 19px;font-weight: 700;color: #000;">Welcome
                        to the Official Site of <br>Novo-Gardenia</h4>
                    <div class="head-line white3"></div>
                </div>
                <div class="modal-body" style="background: #b18c6d;">
                    <ul class="roadpoint">
                        <li>Novo-Gardenia has aimed to enrich lives by setting gold standards for
                            customer-centricity, architectural design, quality and safety.
                        </li>
                        <li> Our empathetic engagement with customers guarantees that their needs are continuously met
                            and
                            exceeded,
                            making Novo-Gardenia developments, places that offer opportunities to thrive.
                        </li>
                    </ul>

                </div>
                <button class="btn road roadblock2">Know More</button>
            </div>
        </div>
    </div> -->

    <!-- floor form start -->

    <div class="modal fade in" tabindex="-1" role="dialog" id="floor-modal" data-backdrop="static"
        data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h4 class="modal-title">Express Your Interest</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">X</span></button>
                </div> -->
                <!--new form  start -->
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-lg-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true" style=" font-size: 35px">X</span></button>
                            <h4 class="modal-title tits">Express Your Interest</h4>
                            <p class="text14 mrg-btm1">Please enter your name and enter your phone number and we will
                                call you back.</p>
                            <form class="row form-wrap-brch" action="thank-you.php" method="POST" id="floor-form"
                                name="floor-form" novalidate="novalidate"
                                onsubmit="return save_landing_pageinfo('floor-form');">
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" class="form-control" name="fname"
                                                placeholder="Enter Your Name*">
                                        </div>

                                        <label for="fname" class="error"></label>
                                    </div>

                                </div>
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style=" visibility: visible; animation-name: fadeInUp;">
                                            <!-- <div class="ccDropDown" id="country_code"></div> -->
                                            <!-- <input type="text" class="form-control  otp-num" id=" phone"
                                                    name="mobile" placeholder="Phone*" onkeyup="send_otp('float-form')"> -->

                                            <input onkeyup="send_otp('floor-form')" type="text" id="mob-input"
                                                class="form-control custom-input mob-input number-only" maxlength="10"
                                                name="mobile" placeholder="Mobile*">
                                            <p id="floor-form-mobdigits" style="color: #000"></p>

                                        </div>
                                        <label for="mobile" class="error"></label>
                                    </div>

                                </div>

                                <div class="col-md-12 pd0">
                                    <div id="floor-form-otpbox" class="otp_box">

                                        <div class="col-xl-12">
                                            <div class="frm-gro">
                                                <div class="form-group wow fadeInUp "
                                                    style="visibility: visible; animation-name: fadeInUp;">
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        placeholder="Email ID*">
                                                </div>
                                                <label for="email" class="error"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">

                                            <p class="text9 txtWhite mrg-btm1 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;" id="i-ag">
                                                <input type="checkbox" checked style="width: 5%;">
                                                I Agree to
                                                the <a href="" target="_blank" class="link3">Terms and
                                                    Conditions</a>
                                            </p>
                                            <button type="submit" class="btn btn-submit wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <span>Submit</span></button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- new form ends -->





            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>



    <!-- floor form ends -->







    <!-- ================ I'm interested ==================== -->
    <a href="images/broc.pdf" download id="broucher1"></a>

    <!-- <button class="btn btn-danger dbrochure broucher1">Download Brochure</button> -->

    <div class="modal fade in" tabindex="-1" role="dialog" id="brochure" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h4 class="modal-title">Download Brochure</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">X</span></button>
                </div> -->
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-lg-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true" style=" font-size: 35px">X</span></button>
                            <h4 class="modal-title tits">Express Your Interest</h4>
                            <p class="text14 mrg-btm1">Please enter your name and enter your phone number and we will
                                call you back.</p>
                            <form class="row form-wrap-brch" action="thank-you.php" method="POST" id="broucher-form"
                                name="broucher-form" novalidate="novalidate"
                                onsubmit="return save_landing_pageinfo('broucher-form');">
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <input type="text" class="form-control" name="fname"
                                                placeholder="Enter Your Name*">
                                        </div>

                                        <label for="fname" class="error"></label>
                                    </div>

                                </div>
                                <div class="col-xl-12">
                                    <div class="frm-gro">
                                        <div class="form-group wow fadeInUp"
                                            style=" visibility: visible; animation-name: fadeInUp;">
                                            <!-- <div class="ccDropDown" id="country_code"></div> -->
                                            <!-- <input type="text" class="form-control  otp-num" id=" phone"
                                                    name="mobile" placeholder="Phone*" onkeyup="send_otp('float-form')"> -->

                                            <input onkeyup="send_otp('broucher-form')" type="text" id="mob-input"
                                                class="form-control custom-input mob-input number-only" maxlength="10"
                                                name="mobile" placeholder="Mobile*">
                                            <p id="broucher-form-mobdigits" style="color: #000"></p>

                                        </div>
                                        <label for="mobile" class="error"></label>
                                    </div>

                                </div>

                                <div class="col-md-12 pd0">
                                    <div id="broucher-form-otpbox" class="otp_box">

                                        <div class="col-xl-12">
                                            <div class="frm-gro">
                                                <div class="form-group wow fadeInUp "
                                                    style="visibility: visible; animation-name: fadeInUp;">
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        placeholder="Email ID*">
                                                </div>
                                                <label for="email" class="error"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">

                                            <p class="text9 txtWhite mrg-btm1 wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;" id="i-ag">
                                                <input type="checkbox" checked style="width: 5%;">
                                                I Agree to
                                                the <a href="" target="_blank" class="link3">Terms and
                                                    Conditions</a>
                                            </p>
                                            <button type="submit" class="btn btn-submit wow fadeInUp"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <span>Submit</span></button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>


    <script src="https://use.fontawesome.com/9513ddc8db.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/customOnePageScroll.js"></script>
    <!--<script type="text/javascript" src="js/number.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/mobilevalidate.js"></script>
    <!--<script type="text/javascript" src="lightbox/light-box.js"></script>-->
    <!--<script src="js/vai.js"></script>-->
    <script src="js/cookie.js"></script>
    <script src="js/url-tracking.js"></script>
    <!--    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>-->
    <script src="js/owl.carousel.min.js"></script>

    <!-- <script src="js/popout.js"></script> -->


    <script type="text/javascript" src="lightbox/light-box.js"></script>

    <script>
        $(document).ready(function() {
            $("input:text:visible:first").focus();

        });


        $(document).ready(function() {
            $("#testimonial-slider").owlCarousel({
                items: 2,
                itemsDesktop: [1000, 3],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [768, 1],
                pagination: false,
                navigation: true,
                navigationText: ["", ""],
                autoPlay: true
            });
            $(".qr-carousel").owlCarousel({
                items: 3,
                itemsDesktop: [1000, 3],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [768, 1],
                pagination: false,
                navigation: true,
                navigationText: ["", ""],
                autoPlay: true
            });
            $(".gallery-carousel").owlCarousel({
                items: 3,
                itemsDesktop: [1000, 3],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [768, 1],
                pagination: false,
                navigation: true,
                navigationText: ["", ""],
                autoPlay: true
            });

            $(".flor-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 5000,
                nav: true,
                dots: false,
                navText: [
                    '<span><img src="images/left.webp"></span>',
                    '<span><img src="images/right.webp"></span>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    767: {
                        items: 1,
                    },
                    992: {
                        items: 1,
                    },
                },
            });
        });
    </script>

    <!-- <script>
    $(document).ready(function() {

        jQuery('.qr-carousel').owlCarousel({
            items: 2,
            loop: true,
            margin: 10,
            autoplay: true,
            smartSpeed: 1500,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            navText: ["<i class='glyphicon glyphicon-chevron-left'></i>",
                "<i class='glyphicon glyphicon-chevron-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                }
            }
        });


    });
    </script> -->

    <script>
        jQuery(document).ready(function($) {

            jQuery('.otp-num').keyup(function() {


                $(mobileno).on('input', function() {

                    //console.log(mval.length);
                    document.getElementById("mobdigits").innerHTML = 10 - mobileno.length +
                        " digit(s) remaining";

                    const input = $(this).val();
                    if (input.length === 10 && /^\d{10}$/.test(input)) {
                        $(elm).submit();
                    }
                });



            })



        });
    </script>


    <script>
        jQuery(document).ready(function($) {
            //var $gallery = $('.l-box a').simpleLightbox();
            //$('.l-box4 a').simpleLightbox();

            $('[data-fancybox="general"]').fancybox({
                //slide effect- zoom-in-out
                transitionEffect: "slide",
                loop: true,

                buttons: [
                    //'slideShow',
                    //'share',
                    'zoom',
                    'fullScreen',
                    'close'
                    //'download'
                ],
                thumbs: {
                    autoStart: false
                }
            });
            $('[data-fancybox="map"]').fancybox({
                //slide effect- zoom-in-out
                transitionEffect: "slide",
                loop: true,

                buttons: [
                    //'slideShow',
                    //'share',
                    'zoom',
                    'fullScreen',
                    'close'
                    //'download'
                ],
                thumbs: {
                    autoStart: false
                }
            });
            $('[data-fancybox="view360"]').fancybox({
                //slide effect- zoom-in-out
                transitionEffect: "slide",
                loop: true,

                buttons: [
                    //'slideShow',
                    //'share',
                    'zoom',
                    'fullScreen',
                    'close'
                    //'download'
                ],
                thumbs: {
                    autoStart: false
                }
            });


        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            if (!Get_Cookie('popout')) {
                setTimeout(function() {
                    $('#main-pop').modal('show');
                }, 3000);
            }
            $('.modal .close').click(function() {
                Set_Cookie('popout', 'it works', '', '/', '', '');
            });
        });

        jQuery(document).ready(function($) {
            if (!Get_Cookie('popout')) {
                setTimeout(function() {
                    $('#roadblock').modal('show');
                }, 500);
            }
            $('.modal .close').click(function() {
                Set_Cookie('popout', 'it works', '', '/', '', '');
                $('.popupDiv').fadeOut(1000);
                $('.overlay').fadeOut(1000);
            });
        });
    </script>



    <script type="text/javascript">
        jQuery(document).ready(function($) {
            Delete_Cookie('formfilled');

            // ---------------for model only-----
            $(".price-click").click(function() {
                $("input:text:visible:first").focus();

                $('#price-model').modal('show');

            });
            $(".i-am").click(function() {
                $('#iam-model').modal('show');
                $("input:text:visible:first").focus();

            });
            $(".dbrochure").click(function() {
                $('#brochure').modal('show');
                $("input:text:visible:first").focus();

            });
            $(".degform").click(function() {
                $('#form-deg').modal('show');
                $("input:text:visible:first").focus();

            });
            $(".roadblock2").click(function() {
                $('#roadblock').modal('hide');
                $('#main-pop').modal('show');
            });
            $(".new-thing").click(function() {
                $('#floor-modal').modal('show');
                $("input:text:visible:first").focus();

            });

            // ---------------for model only-----
        });
    </script>


    <script>
        function send_otp(elm) {

            //var input_dialCode = '#' + elm + ' input[name="dialCode"]';
            var input_name = '#' + elm + ' input[name="fname"]';
            var input_emailid = '#' + elm + ' input[name="email"]';
            var input_mobileno = '#' + elm + ' input[name="mobile"]';
            var input_source = '#' + elm + ' input[name="source"]';
            var input_submit = '#' + elm + ' button[type="submit"]';


            //var dialCode = jQuery(input_dialCode).val();
            var name = jQuery(input_name).val();
            var emailid = jQuery(input_emailid).val();
            var mobileno = jQuery(input_mobileno).val();
            var source = jQuery(input_source).val();

            //validate_data(elm);


            console.log(name, mobileno, emailid);
            console.log('"' + elm + '-mobdigits"');

            var mobileDigit = document.getElementById(elm + '-mobdigits');
            // var otploader = document.getElementById(elm + '-otploader');
            var otpbox = document.getElementById(elm + '-otpbox');

            mobileDigit.innerHTML = 10 - mobileno.length + " digit(s) remaining";


            if (mobileno.length == 10) {
                // jQuery('#' + elm + ' input[name="otpverify"]').val('Not Verify');
                mobileDigit.innerHTML = '';
                // otploader.style.display = "flex";
                $('#autoSubmitForm').submit();
                jQuery(input_name).prop('readonly', true);
                // jQuery(input_emailid).prop('readonly', true);
                jQuery(input_mobileno).prop('readonly', true);

                var url_string = window.location.href;
                var url = new URL(url_string);
                var cstm_ppc_campaign = url.searchParams.get("cstm_ppc_campaign");
                var cstm_ppc_channel = url.searchParams.get("cstm_ppc_channel");
                var cstm_ppc_placement = url.searchParams.get("cstm_ppc_placement");
                var cstm_ppc_device = url.searchParams.get("cstm_ppc_device");
                var cstm_ppc_keyword = url.searchParams.get("cstm_ppc_keyword");
                var cstm_ppc_medium = url.searchParams.get("cstm_ppc_medium");
                var gclid = url.searchParams.get("gclid");


                var formdata = {
                    "url": "sendotp.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    data: JSON.stringify({
                        "fname": name,
                        "email": emailid,
                        "mobile": mobileno,
                        "source": source,
                        "cstm_ppc_campaign": cstm_ppc_campaign,
                        "cstm_ppc_channel": cstm_ppc_channel,
                        "cstm_ppc_placement": cstm_ppc_placement,
                        "cstm_ppc_device": cstm_ppc_device,
                        "cstm_ppc_keyword": cstm_ppc_keyword,
                        "gclid": gclid,
                        "cstm_ppc_medium": cstm_ppc_medium
                    })
                };

                $.ajax(formdata).done(function(formdataResponse) {

                    if (formdataResponse['status']['statusCode'] == 200) {
                        console.log(formdataResponse);

                        // otploader.style.display = "none";
                        otpbox.style.display = "block";
                        jQuery(input_submit).prop('disabled', false);

                    } else {
                        // otploader.style.display = "none";
                        jQuery(input_name).prop('readonly', false);
                        jQuery(input_emailid).prop('readonly', false);
                        jQuery(input_mobileno).prop('readonly', false);

                    }

                });
            }

        }


        function validate_data(elm) {
            var input_name = '#' + elm + ' input[name="fname"]';
            var input_emailid = '#' + elm + ' input[name="email"]';
            var input_mobileno = '#' + elm + ' input[name="mobile"]';
            var input_formsource = '#' + elm + ' input[name="source"]';


            var name = jQuery(input_name).val();
            var emailid = jQuery(input_emailid).val();
            var mobileno = jQuery(input_mobileno).val();

            if (name == "") {
                //alert("Please Enter Your Name");
                jQuery(input_mobileno).prop('readonly', true);
                return false;
            }


            var atpos = emailid.indexOf("@");
            var dotpos = emailid.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailid.length) {
                jQuery(input_mobileno).prop('readonly', true);
                return false;
            }

            if (name != "" && emailid != "") {
                jQuery(input_mobileno).prop('readonly', false);
            }
        }
    </script>


    <script type="text/javascript">
        function save_landing_pageinfo(elm) {
            jQuery('#' + elm + ' input[type=submit], #' + elm + ' button').prop('disabled', true);
            setTimeout(function() {
                jQuery('#' + elm + ' input[type=submit], #' + elm + ' button').prop('disabled', false);
            }, 5000);
            var name = jQuery('#' + elm + ' input[name="name"]').val();
            var mobileno = jQuery('#' + elm + ' input[name="mobile"]').val();
            var cc = jQuery('#' + elm + ' select[name="cc"]').val();
            var emailid = jQuery('#' + elm + ' input[name="email"]').val();
            var conf = jQuery('#' + elm + ' select[name="conf"]').val();
            var message = jQuery('#' + elm + ' textarea[name="message"]').val();
            var fsource = jQuery('#' + elm + ' input[name="source"]').val();
            var current_url = location.hostname;
            var cstm_ppc_channel = Get_Cookie('cstm_ppc_channel');

            if (name == "") {
                //alert("Name");
                return false;
            }


            mobileno = mobileno.replace(/[^0-9]/g, '');
            if (mobileno.length != 10) {
                //alert("Please Enter 10 Digit Mobile Number");
                return false;
            }



            //if (elm == 'price-popup') {
            //    emailid = "";
            //} else if (elm == 'main-popup') {
            //    emailid = "";
            //} else {
            var atpos = emailid.indexOf("@");
            var dotpos = emailid.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailid.length) {
                return false;
            }
            //}

            // if (message == undefined) {
            //     message = "";
            // }

            if (elm == 'broucher-form') {
                document.getElementById('broucher1').click();
            }

            if (name != "" && mobileno != "") {
                $("#pageloader").fadeIn();
                return true;



            }

        }

        function submitForm(elm) {
            document.createElement('form').submit.call(document.getElementById(elm));
        }
    </script>

    <!-- <script>
        window.addEventListener("load", (event) => {

            //console.log("page is fully loaded");

            setTimeout(() => {

                $("#main-pop").modal("show");

            }, 3000);

        })
    </script>
    <script>
        const dynamicModal = document.getElementById('dynamicModal');
        dynamicModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            const button = event.relatedTarget;
            // Extract info from data-* attributes
            const title = button.getAttribute('data-title');
            const content = button.getAttribute('data-content');

            // Update the modal's content
            const modalTitle = dynamicModal.querySelector('.modal-title');
            const modalBody = dynamicModal.querySelector('.modal-body');

            modalTitle.textContent = title;
            modalBody.textContent = content;
        });
    </script>
 -->


</body>

</html>