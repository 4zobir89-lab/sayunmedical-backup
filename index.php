<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sayun Medical Company</title>

    <!-- Css Files -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/vendors.css" type="text/css" rel="stylesheet">
    <link href="css/components.css" type="text/css" rel="stylesheet" id="components">
    <link href="css/style.css" type="text/css" rel="stylesheet" id="style">
    <link href="otherFiles/slider-revolution/css/settings.css" rel="stylesheet" type="text/css">
    <link href="otherFiles/slider-revolution/css/layers.css" rel="stylesheet" type="text/css">
    <link href="otherFiles/slider-revolution/css/navigation.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- <div class="loader-backdrop">
        <div class="loader">
            <div class="ball-1"></div>
            <div class="ball-2"></div>
        </div>
    </div> -->

    <header class="navbar-fixed-top">
        <!-- Header = Topbar + Navigation Bar -->
        <div class="topbar">
            <!-- Dark Blue Topbar -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="mailto:test@example.com" class="email"><i class="fa fa-envelope fa-fw"></i> info@sayunmedical.com</a>
                    </div>
                    <div class="col-sm-6">
                        <div class="dropdown">
                            <!-- Language Dropdown -->
                            <button class="btn btn-xs" type="button" id="select-lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i> عربي
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="select-lang">
                                <li><a href="ar/index.php">عربي</a></li>
                                <li><a href="index.php">English</a></li>
                            </ul>
                        </div>
                        <form class="search form-inline">
                            <!-- Search Form -->
                            <input type="text" class="form-control search-form" placeholder="Start typing...">
                            <button class="btn-search" type="submit"><i class="fa fa-search fa-fw"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <!-- Navigation Bar -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                    <a class="navbar-brand" href=""><img src="images/logo2.png" alt="" style="height: 100%; width:100%;"></a>
                    <!-- Replace with your Logo -->
                </div>
                <div class="collapse navbar-collapse" id="main-navigation">
                    <!-- Main Menu -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="index.php">Home</a></li>
                        <li><a href="en/about.php">About</a></li>
                        <li><a href="#">Products</a>
                            <ul class="sub-menu">
                                <!-- Sub Menu -->
                                <li><a href="#"> Medical Imaging System <i class="fa fa-angle-right pull-right"></i></a>
                                    <ul class="sub-menu">
                                        <!-- Sub Sub Menu -->
                                        <li><a href="en/product/medical_imaging_system/cardiology.php">Cardiology</a></li>
                                        <li><a href="en/product/medical_imaging_system/general_imaging.php">General Imaging</a></li>
                                        <li><a href="en/product/medical_imaging_system/ob_gyn.php">OB/GYN</a></li>
                                        <li><a href="en/product/medical_imaging_system/poc.php">POC</a></li>
                                        <li><a href="en/product/medical_imaging_system/radiology.php">Radiology</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"> Furniture <i class="fa fa-angle-right pull-right"></i></a>
                                    <ul class="sub-menu">
                                        <!-- Sub Sub Menu -->
                                        <li><a href="en/product/furniture/cabinet_work_table_sink.php">Cabinet Work Table Sink</a></li>
                                        <li><a href="en/product/furniture/hospital_bed.php">Hospital Bed</a></li>
                                        <li><a href="en/product/furniture/hospital_trolley.php">Hospital Trolley</a></li>
                                    </ul>
                                </li>
                                <li><a href="en/product/patient_monitoring_systems.php">Patient Monitoring Systems</a></li>
                                <li><a href="en/product/x_ray.php">X-RAY</a></li>
                                <li><a href="en/product/anesthesia_machines.php">Anesthesia Machines and Ventilators </a></li>
                                <li><a href="en/product/dental_unit.php">Dental Unit</a></li>
                                <li><a href="en/product/sterilizer.php">Sterilizer</a></li>
                                <li><a href="en/product/incubator_and_warmer.php">Incubator and Warmer</a></li>
                                <li><a href="en/product/electronic_apparatus.php">Electronic Apparatus</a></li>
                                <li><a href="en/product/surgical_lights_and_operating_tables.php">Surgical Lights and Operating Tables</a></li>
                                <li><a href="en/product/infusion_pumps.php">Infusion Pumps</a></li>
                            </ul>
                        </li>
                        <li><a href="en/service.php">Services</a></li>
                        <li><a href="en/contact.php">Contact</a>
                            <ul class="sub-menu">
                                <!-- Sub Menu -->
                                <li><a href="en/contact-form.php">Contact Us</a></li>
                                <li><a href="en/google_map.php">Google Map</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Slider Revolution  تأثيرات السلايدات مع المكونات الداخلية (التعتيم + الجملة الصغيرة + الجمية الكبيرة + زر القراءة أكثر ) م  -->
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="slider" class="rev_slider fullwidthbanner" data-version="5.0.7">
            <ul>
                <!-- Slide 1 -->
                <li data-index="rs-129" data-transition="parallaxvertical" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                    data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-description="Nurturing the most awesome minds.">

                    <!-- MAIN IMAGE -->
                    <img src="images/dummy.jpg" data-lazyload="images/home_slider/1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- Overlay-->
                    <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" id="slide-1-overlay" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                        data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000"
                        data-basealign="slide" data-responsive_offset="on" style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);">
                    </div>

                    <!-- Small Text -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color2" id="slide-1-small-text" data-x="['right','right','right','right']" data-hoffset="['400','50','50','30']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']"
                        data-width="none" data-fontsize="['22', '22', '22', '16']" data-height="28" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-weight:bold; font-family: 'Libre Baskerville', serif;">We are the best.
                    </div>

                    <!-- Main Text -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-1-main-text" data-x="['right','right','right','right']" data-hoffset="['-50','50','50','30']" data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']" data-fontsize="['46','46','46','32']"
                        data-lineheight="['55','55','55','35']" data-color="['#fff']" data-width="['600','600','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                        style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; text-shadow:0px 2px 2px #000; text-transform:capitalize; font-weight:600; text-align:left; font-family: 'Montserrat', sans-serif;">Working with the most awesome minds.
                    </div>

                    <!-- Button -->
                    <!-- <a href="brief-history.html" class="tp-caption btn btn-primary rs-parallaxlevel-0 hidden-xs" id="slide-1-button" data-x="['right','right','right','right']" data-hoffset="['53','53','53','30']" data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 8;">READ MORE 
</a> -->
                </li>

                <!-- Slide 2 -->
                <li data-index="rs-2" data-transition="parallaxvertical" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                    data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-description="Nurturing the most awesome minds.">
                    <!-- MAIN IMAGE -->
                    <img src="images/dummy.jpg" data-lazyload="images/home_slider/2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- Overlay -->
                    <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" id="slide-2-overlay" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                        data-width="full" data-height="full" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000"
                        data-basealign="slide" data-responsive_offset="on" style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);">
                    </div>

                    <!-- Small Text -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color2" id="layer-2-small-text" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']"
                        data-width="none" data-fontsize="['22', '22', '22', '16']" data-height="28" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 10; white-space: nowrap; font-weight:bold; font-family: 'Libre Baskerville', serif;">We are Omniscience .
                    </div>

                    <!-- Main Text -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-2-main-text" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']" data-fontsize="['46','46','46','32']"
                        data-lineheight="['55','55','55','35']" data-color="['#fff']" data-width="['600','600','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                        style="z-index: 11; min-width: 600px; max-width: 600px; white-space: normal; text-shadow:0px 2px 2px #000; text-transform:capitalize; font-weight:600; text-align:left; font-family: 'Montserrat', sans-serif;">Not just Inside, we excel outside too.
                    </div>

                    <!-- Button -->
                    <!-- <a href="about-educomp.html" class="tp-caption btn btn-primary rs-parallaxlevel-0 hidden-xs" id="slide-2-button" data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 12;">READ MORE 
            </a> -->
                </li>
            </ul>
        </div>
    </div>
    <!-- Revolution Slider Ends -->

    <div class="bgcolor2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn-announce"><i class="fa fa-bullhorn"></i></button>
                    <div class="announcement">
                        <div class="announcement-text">
                            <span>Supreme goal is to care by health for ever</span>
                            <span>Saving high quality products is one from our duties</span>
                            <span>Customer confidence is from the most important thing in our job</span>
                        </div>
                        <div class="owl-nav">
                            <span class="owl-left"><i class="fa fa-angle-left"></i></span>
                            <span class="owl-right"><i class="fa fa-angle-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 mt-100">
                    <h3 class="heading">Who We <span class="color2">Are</span></h3>
                    <p>Sayun Company is one of the best medical companies inside yemen. It has a honor in yemen.</p>
                    <p>Caring of health is the most important thing in sayun copmany. We take care of health by saving a high quality medical products.</p>
                    <br/>
                    <ul class="list-styled pull-left">
                        <li>Caring of human health</li>
                        <li>delivering on time</li>
                    </ul>
                    <ul class="list-styled pull-left">
                        <li>guarantee high quality products</li>
                        <li>implanting confidence in customer</li>
                    </ul>
                    <div class="clearfix"></div>
                    <br/>
                </div>
                <div class="col-sm-5 mt-60">
                    <div class="newsletter">
                        <h4 class="newsletter-heading">send us !</h4>
                        <form action="www.sayunmedical.com">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" required="required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" required="required">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Message" required="required">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Send Us</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-100">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="heading text-center">We're making a <span class="color2">Difference</span>
                    <span class="sub-heading">Sayoun Company is a trustworthy company inside and outside yemen. We are working with many of international companies in medical instruments!</span>
                    <span class="icon-divider"></span>
                </h2>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-sm-6">
                <img src="images/7.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-sm-6">
                <div class="accordion-2">
                    <div class="panel-group" id="a2" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="a2heading1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#a2" href="#a2body1" aria-expanded="true" aria-controls="a2body1">
                                                What's so awesome about Sayun Company?
                                            </a>
                                </h4>
                            </div>
                            <div id="a2body1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="a2heading1" aria-expanded="true">
                                <div class="panel-body">
                                    Working with the most awesome minde inside and outside yemen is one of our features. We are interested in dealing and working with the best internationl companies. Sayun medical is caring about importing the highest products to serve humanity.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="a2heading2">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#a2" href="#a2body2" aria-expanded="false" aria-controls="a2body2">
                                              Why we are the best?
                                          </a>
                                </h4>
                            </div>
                            <div id="a2body2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a2heading2" aria-expanded="false">
                                <div class="panel-body">
                                    Heuman health is the first thing in our job, by saving the best with the highest quality medical products. So we have the customer confidence. This is why we are the best company inside yemen in medical instruments.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="a2heading3">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#a2" href="#a2body3" aria-expanded="false" aria-controls="a2body3">
                                    Why you would deal with sayun company?
                                </a>
                                </h4>
                            </div>
                            <div id="a2body3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="a2heading3" aria-expanded="false">
                                <div class="panel-body">
                                    Customer satisfaction is one of the most important thing in our job. Making customer satisfied is by serve him with the best means.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <!-- Footer -->
        <div class="footer-pri">
            <!-- Primary Footer -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 footer-widget">
                        <!-- Footer Widget - Blog -->
                        <h5 class="heading inverse">About <span class="color2">Sayun</span></h5>
                        <ul class="blog-thumbnail">
                            <li class="entry">
                                <!-- Blog Entry Excerpt -->
                                <div class="entry-content">
                                    <h4 class="entry-header"><a>What it takes to be the Best ?</a></h4>
                                    <p class="entry-text">Sayun company always works with the most awesome minds inside and outside yemen and this is why we are the best.</p>
                                </div>
                            </li>
                            <li class="entry">
                                <!-- Blog Entry Excerpt -->
                                <div class="entry-content">
                                    <h4 class="entry-header"><a>How do we achieve 100% success rate ?</a></h4>
                                    <p class="entry-text">Human health is the first thing in out job. Credibility and Confidentially is the golden standard in dealing with people.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-2 footer-widget">
                        <!-- Footer Widget - Quick Links -->
                        <h5 class="heading inverse">Quick <span class="color2">Links</span></h5>
                        <ul class="quick-links">
                            <li><a href="index.php">Home Page</a></li>
                            <li><a href="en/about.php">About Sayun Company</a></li>
                            <li><a href="en/service.php">Our Services</a></li>
                            <li><a href="en/google_map.php">Visit us on map</a></li>
                            <li><a href="en/contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 footer-widget">
                        <!-- Footer Widget - Affiliations -->
                        <h5 class="heading inverse">Affiliations &amp; <span class="color2">Awards</span></h5>
                        <ul class="affiliations">
                            <li><img src="images/comp_logos/logo-1.png" class="img-responsive" alt=""></li>
                            <li><img src="images/comp_logos/logo-2.png" class="img-responsive" alt=""></li>
                            <li><img src="images/comp_logos/logo-3.png" class="img-responsive" alt=""></li>
                            <!-- <li><img src="images/comp_logos/logo-4.png" class="img-responsive" alt=""></li> -->
                        </ul>
                    </div>
                    <div class="col-sm-2 footer-widget">
                        <!-- Footer Widget - Policies -->
                        <h5 class="heading inverse">Our <span class="color2">Products</span></h5>
                        <ul class="quick-links">
                            <li><a>Medical Imaging System</a></li>
                            <li><a>Patient Monitoring</a></li>
                            <li><a>X-RAY</a></li>
                            <li><a>Dental Unit</a></li>
                            <li><a>Sterilizer</a></li>
                            <li><a>Electronic Apparatus</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 footer-widget">
                        <!-- Footer Widget - Contact Info -->
                        <h5 class="heading inverse">Contact <span class="color2">Us</span></h5>
                        <address>
            <strong>Sayun Company for Medical Appliances</strong>
            <span>Al-Tahreer Street,<br/> Sana'a City,<br/> Yemen</span>
        </address>
                        <a href="tel:00967-274839" class="phone"><i class="fa fa-phone fa-fw"></i> 00967-274839</a>
                        <a href="tel:00967-01-274838" class="phone"><i class="fa fa-fax fa-fw"></i> 00967-01-274838</a>
                        <a href="mailto:test@example.com" class="email"><i class="fa fa-envelope fa-fw"></i> info@sayunmedical.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-sec">
            <!-- Secondary Footer -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <span class="copyright">&copy; Copyright Sayun Company for medical appliances.</span><br> Designed by <a href="mailto:yyyosama2020@gmail.com" style="color: #20c5f7;" title="yyyosama2020@gmail.com / 00967-770-647-035">OSAMA</a>
                        <!-- Copyright Text -->
                    </div>
                    <div class="col-sm-6 text-center">
                        <ul class="social">
                            <li><a href="#"><i class=" fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class=" fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class=" fa fa-yahoo"></i></a></li>
                            <li><a href="#"><i class=" fa fa-google"></i></a></li>
                            <li><a href="#"><i class=" fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back"><i class="fa fa-angle-up"></i></div>

    <!--jQuery Version 2.2.1-->
    <script src="js/jquery.min.js" type="text/javascript"></script>

    <!--Bootstrap Framework version 3.3.7-->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!--Slider Revolution version 5.0-->
    <script type="text/javascript" src="otherFiles/slider-revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="otherFiles/slider-revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Countdown Timer Version 2.1.0-->
    <script src="js/jquery.countdown.min.js" type="text/javascript"></script>

    <!-- Owl Carousel Version 2.0.0 -->
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>

    <!-- CountTo -->
    <script src="js/jquery.countTo.js" type="text/javascript"></script>

    <!-- Appear -->
    <script src="js/jquery.appear.js" type="text/javascript"></script>

    <!--Pretty Photo Version 3.1.6-->
    <script src="js/jquery.prettyPhoto.js" type=text/javascript></script>

    <!-- Parallax Version 1.4.2 -->
    <script src="js/parallax.js" type="text/javascript"></script>

    <!--Educomp Custom Script-->
    <script src="js/main.js" type=text/javascript></script>
</body>

</html>