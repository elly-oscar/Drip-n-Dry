<?php
require "protect.php";
?>
<html>
    <head>
            <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"> 
             <link rel="stylesheet" href="about-us-1.css"> 
             <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
           <style>
           .separator-type, .title-type, .intro-type, .content-type .intro-type p {
    position: relative;
}
.intro-type .container {
    padding: 107px 0px 102px 0px !important;
}
#product-header-section, .intro-type .container {
    padding: 68px 15px 72px !important;
}
@media (min-width: 1630px)
.container {
    width: 1630px;
}
.parallax {
    background-attachment: inherit !important;
}
.parallax {
    background-attachment: inherit !important;
    background-repeat: repeat;
    background-size: cover;
    position: absolute;
    top: 0px;
    bottom: 0px;
    width: 100%;
    z-index: -10;
}
.company-heading h1 {
    margin-bottom: 40px;
    line-height: 80px;
    color: #fff;
    font-weight: 700 !important;
    text-align: center;
}
.seo-header, .product-header, .intro-type .container h1.white, .company-heading h1 {
    font-family: 'Raleway', sans-serif;
    font-weight: 100 !important;
    text-transform: capitalize;
    font-size: 65px;
    margin-bottom: 20px;
}
.company-sections h2, .careers-sections h2, .perks-section h2 {
    font-weight: 800;
    font-size: 50px;
}
.company-sections h2, .company-sections h3, .careers-sections h2, .perks-section h2 {
    font-family: 'proxima-nova', sans-serif;
}
.company-sections h3 {
    font-size: 25px;
    font-weight: 700;
    margin: 14px 0;
    font-family: 'proxima-nova', sans-serif;
    text-transform: capitalize;
}
.red-border {
    width: 50%;
    border-bottom: 1px solid #d2282e;
    margin: 0 auto;
    height: 16px;
}
.company-sections p {
    margin-top: 20px;
}
.ct-u-size22 {
    font-size: 22px;
}
.ct-u-fontWeight300 {
    font-weight: 300;
}
.marginTop40 {
    margin-top: 40px !important;
}
.ct-u-paddingBoth100 {
    padding: 100px 15px;
}
.culture-section {
    background: linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, 0.45)), url(https://www.solodev.com/assets/culture.jpg) top no-repeat;
    /* background-color: #095c87; */
    /* color: #fff; */
}
.company-sections, .careers-sections, .left-headquarter-section-img, .right-headquarter-section-img {
    text-align: center;
}
.ct-u-paddingBoth100 {
    padding: 100px 15px;
}
.company-sections h2, .careers-sections h2, .perks-section h2 {
    font-weight: 800;
    font-size: 50px;
}
.company-sections h2, .company-sections h3, .careers-sections h2, .perks-section h2 {
    font-family: 'proxima-nova', sans-serif;
}
.slick-slider {
    margin-bottom: 0;
}
.slick-slider {
    position: relative;
    display: block;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}
.slick-slider .slick-track, .slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}
.slick-list {
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slider .item {
    overflow: hidden;
}
.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
.logos {
    margin-right: -5px;
    margin-left: -5px;
}
ul.logos li {
    cursor: pointer;
}
.logos > li {
    float: left;
    width: 16.66666%;
    padding: 5px;
}
.logos .logos-inner {
    position: relative;
}
.slick-slide img {
    display: inline-block;
}
.logo-image {
    position: relative;
    width: 100%;
}
ul.logos li {
    cursor: pointer;
}
.logos > li {
    float: left;
    width: 16.66666%;
    padding: 5px;
}
.logos .logos-inner {
    position: relative;
}
.slick-slide img {
    display: inline-block;
}
img {
    display: inline-block;
    max-width: 100%;
    vertical-align: middle;
}
.fa {
  font-size: 42px;
}
.btn-solodev-red-reversed {
    background-color: #fff;
    color: #d2282e;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    padding: 12px 35px;
}
.btn, .btn-blk {
    font-size: 18px !Important;
}
a:hover, a:focus {
    text-decoration: none;
}
.ct-u-size19 {
 margin-top: 40px; 
}
a:hover {
    color: #000;
}
section.clients-home .clients-logos .client-logos-repeater {
    height: 260px;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
}

section.clients-home .clients-logos .client-logos-repeater img {
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    left: 0;
    right: 0;
}
.logo-title {
    position: absolute;
    display: none;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    font-size: 16px;
    font-weight: 700;
    line-height: 16px;
    text-transform: uppercase;
    color: #FFF;
    background-color: #0079c2;
}
.ct-u-paddingBottom100 {
  margin-top: 40px;
}
.culture-section {
  background-size: cover;
  color: #fff;
}

  /*footer css*/
  .footer-bottom {
	background: #333;
	border-top: 1px solid #DDDDDD;
	padding-top: 10px;
	padding-bottom: 10px;
}
.footer-bottom p.pull-left {
	padding-top: 6px;
}
.social li {
	background: none repeat scroll 0 0 #B5B5B5;
	border: 2px solid #B5B5B5;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	float: left;
	height: 36px;
	line-height: 36px;
	margin: 0 8px 0 0;
	padding: 0;
	text-align: center;
	width: 36px;
	transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-webkit-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
}
.social li:hover {
	transform: scale(1.15) rotate(360deg);
	-webkit-transform: scale(1.1) rotate(360deg);
	-moz-transform: scale(1.1) rotate(360deg);
	-ms-transform: scale(1.1) rotate(360deg);
	-o-transform: scale(1.1) rotate(360deg);
}
.social li a {
	color: #EDEFF1;
}
.social li:hover {
	border: 2px solid #2c3e50;
	background: #39dc79;
}
.social li a i {
	font-size: 16px;
	margin: 0 0 0 5px;
	color: #EDEFF1 !important;
}

           </style>
    </head>
    <body>
	<?php require "navbar.php"; ?>
     
        <div class="ct-pageWrapper" id="ct-js-wrapper">
            <section class="company-heading intro-type" id="parallax-one">
              <div class="container">
                <div class="row product-title-info">
                  <div class="col-md-12">
                    <h1>Drip n Dry</h1>
                  </div>
                </div>
              </div>
              <div class="parallax" id="parallax-cta" style="background-image:url(about3.jpg);"></div>
            </section>
            <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
              <div class="container text-center">
                <h2>WHAT THE SYSTEM DOES</h2>
                <h3>Cleaning management system</h3>
                <div class="col-md-8 col-md-offset-2">
                  <div class="red-border"></div>
                  <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">Drip n Dry is a cleaning management system that has been created for the sole purpose of managing cleaning activities in an Riara university by giving a system as to which employees in charge of cleaning and maintainance can be assigned tasks based on the available chores and registered employees</p>
                  <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
                </div>
              </div>
            </section>
            <section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <h2>Drip n Dry</h2>
                    <h3>Cleaning management system</h3>
                    <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60">Drip n Dryis a cleaning management system<br>
                   It was created by a group of students who were doing a project of deeloping the system for the software engineering class. The following are to be inegrated into the system </p>
                  </div>
                </div>
                <div class="row ct-u-paddingBoth20">
                  <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                      <i class="fa fa-medkit" aria-hidden="true"></i>
                     <!-- <p>LOREM IPSUM</p>
                      <p class="company-icons-subtext hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                      <i class="fa fa-money" aria-hidden="true"></i>
                      <!--<p>DOLOR SIT AMET</p>
                      <p class="company-icons-subtext hidden-xs">Praesent sed libero vel ex maximus vulputate nec eu ligula.</p>-->
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>
                     <!-- <p>SED TRISTIQUE</p>
                      <p class="company-icons-subtext hidden-xs">Vestibulum elementum nisi ut fermentum lobortis.</p>-->
                    </div>
                  </div>
                </div>
               <!-- <div class="row ct-u-paddingBoth20">
                  <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                      <i class="fa fa-coffee" aria-hidden="true"></i>
                      <p>SEMPER IPSUM</p>
                      <p class="company-icons-subtext hidden-xs">Nullam bibendum felis non laoreet rutrum.</p>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                      <i class="fa fa-gamepad" aria-hidden="true"></i>
                      <p>NEC MATTIS</p>
                      <p class="company-icons-subtext hidden-xs">Etiam diam mi, lacinia eu sapien in, dapibus sodales erat.</p>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                      <i class="fa fa-cutlery" aria-hidden="true"></i>
                      <p>CRAS MOLLIS</p>
                      <p class="company-icons-subtext hidden-xs">Etiam varius porttitor tellus et aliquet.</p>
                    </div>
                  </div>-->
                </div>
                <a class="ct-u-marginTop60 btn btn-solodev-red-reversed btn-fullWidth-sm ct-u-size19" href="/careers/">Learn More?</a>
              </div>
            </section>
            <section class="customers-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <h2>DEVELOPMENT</h2>
                    <h3>Companies involved</h3>
                    <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60 marginTop40">Some of the tools used in developing and intergrating the system</p>
                  </div>
                  <div class="clearfix">
                </div>
              </div>
            </section>
          </div>
          <main>
            <div class="container ct-u-paddingTop40 ct-u-paddingBottom100">
              <div class="row">
                <div class="col-md-12 ct-content">
                  <section class="clients-home">
                    <div class="container">
                      <div class="clients-logos text-center">
                        <div class="row">
                          <div class="col-md-4 client-logos-repeater">
                            <img src="./logos/github.png"></a>
                            <div class="logo-title">
                              <div class="displayTable">
                                <div class="displayTableCell">github</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 client-logos-repeater">
                            <img src="./logos/notep.jfif"></a>
                            <div class="logo-title">
                              <div class="displayTable">
                                <div class="displayTableCell">Notepad ++</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 client-logos-repeater">
                            <img src="./logos/phpmyadmin.png"></a>
                            <div class="logo-title">
                              <div class="displayTable">
                                <div class="displayTableCell">phpMyAdmin</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 client-logos-repeater">
                            <img src="./logos/vscode.png"></a>
                            <div class="logo-title">
                              <div class="displayTable">
                                <div class="displayTableCell">Visual Studio Code</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 client-logos-repeater">
                           <img src="./logos/xampp.png"></a>
                            <div class="logo-title">
                              <div class="displayTable">
                                <div class="displayTableCell">Xampp</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 client-logos-repeater">
                            <img src="./logos/bootstrap.jfif"></a>
                            <div class="logo-title">
                              <div class="displayTable">
                                <div class="displayTableCell">bootstrap</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 client-logos-repeater">
                           <img src="./logos/html.png"></a>
                            <div class="logo-title">
                              <div class="displayTable">
                                <div class="displayTableCell">HTML</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 client-logos-repeater">
                           <img src="./logos/css.png"></a>
                            <div class="logo-title">
                              <div class="displayTable">
                                <div class="displayTableCell">CSS</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 client-logos-repeater">
                            <img src="./logos/javascript.jfif"></a>
                            <div class="logo-title">
                              <div class="displayTable">
                                <div class="displayTableCell">javascript</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              </div>
              <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left" style="color:white;"> Copyright © Drip n Dry. All right reserved. </p>
                    <div class="pull-right">
                      <ul class="social">
                        <li> <a href="https://www.facebook.com"> <i class=" fa fa-facebook"></i> </a> </li>
                        <li> <a href="https://www.twitter.com"> <i class="fa fa-twitter"></i> </a> </li>
                        <li> <a href="https://www.google-plus.com"> <i class="fa fa-google-plus"></i> </a> </li>
                        <li> <a href="https://www.pinterest.com"> <i class="fa fa-pinterest"></i> </a> </li>
                        <li> <a href="https://www.youtube.com"> <i class="fa fa-youtube"></i> </a> </li>
                    </ul> 
                    </div>
                </div>
            </div>
              <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            
          </main>
    </body>
</html>