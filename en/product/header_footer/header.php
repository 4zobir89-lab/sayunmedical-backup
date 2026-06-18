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
    <link href="../../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="../../css/vendors.css" type="text/css" rel="stylesheet">
    <link href="../../css/components.css" type="text/css" rel="stylesheet" id="components">
    <link href="../../css/style.css" type="text/css" rel="stylesheet" id="style">
</head>

<body>
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
                                <li><a href="../../ar/index.php">عربي</a></li>
                                <li><a href="../../index.php">English</a></li>
                            </ul>
                        </div>
                        <form class="search form-inline">
                            <!-- Search Form -->
                            <input type="text" class="form-control" placeholder="Start typing...">
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

                    <a class="navbar-brand" href=""><img src="../../images/logo2.png" alt="" style="height: 100%; width:100%;"></a>
                    <!-- Replace with your Logo -->
                </div>
                <div class="collapse navbar-collapse" id="main-navigation">
                    <!-- Main Menu -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="../../index.php">Home</a></li>
                        <li><a href="../about.php">About</a></li>
                        <li><a href="#">Products</a>
                            <ul class="sub-menu">
                                <!-- Sub Menu -->
                                <li><a href="#"> Medical Imaging System <i class="fa fa-angle-right pull-right"></i></a>
                                    <ul class="sub-menu">
                                        <!-- Sub Sub Menu -->
                                        <li><a href="medical_imaging_system/cardiology.php">Cardiology</a></li>
                                        <li><a href="medical_imaging_system/general_imaging.php">General Imaging</a></li>
                                        <li><a href="medical_imaging_system/ob_gyn.php">OB/GYN</a></li>
                                        <li><a href="medical_imaging_system/poc.php">POC</a></li>
                                        <li><a href="medical_imaging_system/radiology.php">Radiology</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"> Furniture <i class="fa fa-angle-right pull-right"></i></a>
                                    <ul class="sub-menu">
                                        <!-- Sub Sub Menu -->
                                        <li><a href="furniture/cabinet_work_table_sink.php">Cabinet Work Table Sink</a></li>
                                        <li><a href="furniture/hospital_bed.php">Hospital Bed</a></li>
                                        <li><a href="furniture/hospital_trolley.php">Hospital Trolley</a></li>
                                    </ul>
                                </li>
                                <li><a href="patient_monitoring_systems.php">Patient Monitoring Systems</a></li>
                                <li><a href="x_ray.php">X-RAY</a></li>
                                <li><a href="anesthesia_machines.php">Anesthesia Machines and Ventilators </a></li>
                                <li><a href="dental_unit.php">Dental Unit</a></li>
                                <li><a href="sterilizer.php">Sterilizer</a></li>
                                <li><a href="incubator_and_warmer.php">Incubator and Warmer</a></li>
                                <li><a href="electronic_apparatus.php">Electronic Apparatus</a></li>
                                <li><a href="surgical_lights_and_operating_tables.php">Surgical Lights and Operating Tables</a></li>
                                <li><a href="infusion_pumps.php">Infusion Pumps</a></li>
                            </ul>
                        </li>
                        <li><a href="../service.php">Services</a></li>
                        <li><a href="../contact.php">Contact</a>
                            <ul class="sub-menu">
                                <!-- Sub Menu -->
                                <li><a href="../contact-form.php">Contact Us</a></li>
                                <li><a href="../google_map.php">Google Map</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>