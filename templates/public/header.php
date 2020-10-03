<?php
foreach($data as $data){}
foreach($setting as $setting){}
?>
<!doctype html>
<html lang="en">

<head>


    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php echo $setting->description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title><?php echo $setting->stitle; ?></title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url()."assets/images/".$setting->sfavicon;?>" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url()."assets/images/".$setting->slogo; ?>" alt="Logo" width="150px" height="50px" >
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#service">Services</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#work">Portfolio</a></li>
                                 
                                    <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->

       
        <div id="parallax" class="header-content d-flex align-items-center" style="background:url('http://shoaibghulam.tk/assets/images/bgimg.jpg'); background-repeat:no-repeat; backgourn-attechment:fixed; background-size:100% 100%;">
               <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="header-content-right">
                            <h4 class="sub-title">Hello, I’m</h4>
                            <h1 class="title"><?php echo $data->name; ?></h1>
                            <p><?php echo $data->profession; ?></p>
                            <a class="main-btn" href="#work">View my Work</a>
                        </div> <!-- header content right -->
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="myimg d-none d-lg-block" style="padding-top:40px">
                            <img src="<?php echo base_url(); ?>assets/images/banner/<?php echo $data->profile; ?>" alt="hero" height="800px">
                        </div> <!-- header image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-social">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-social-icon">
                                <ul>
                                    <li><a href="<?php echo $data->fb; ?>"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="<?php echo $data->twitter; ?>"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="<?php echo $data->instgram; ?>"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="<?php echo $data->linkedlist; ?>"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div> <!-- header social -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header social -->
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->
	
