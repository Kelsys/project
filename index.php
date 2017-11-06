<?php
require("common.php");
if(isset($_SESSION['serNo'])){
    header('location:second_page.php');
    }
?>
<html>
     <head>
        <title>IAF | Leave application</title>
        <link rel="icon" href="img/IAF-Logo Png.png" type="image/jpg" >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styling.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-fixed-top">
            <div class="container" id="head">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" style="background-color: black" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>
                        <span class="icon-bar" style="background-color: white"></span>
                    </button>
                    <div class="logo">
                        <img src="img/title.png" alt="Logo" class="headlogo" style="width:80px"> 
                        <a href="index.php" class="navbar-brand" style="font-family:Arial; font-weight: bold; font-size: 26px;">INDIAN AIR FORCE</a>
                    
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li id="tab"><a href="officer_login.php"><span class="glyphicon glyphicon-user"></span> Officer</a></li>
                        <li><a href="airmen.php"><span class="glyphicon glyphicon-user"></span> Airmen</a></li>
                        <li><a href="civilian.php"><span class="glyphicon glyphicon-user"></span> Civilian</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div id="banner_img">
            <div class="container">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                      <img src="img/img1.jpg" style="width:100%; height: 450px; border-radius: 25px;">
                      
                    </div>

                    <div class="mySlides fade">
                      <img src="img/img2.jpg" style="width:100%; height: 450px; border-radius: 25px;">
                    </div>

                    <div class="mySlides fade">
                      <img src="img/img3.jpg" style="width:100%; height: 450px; border-radius: 25px;">
                    </div>
                    <div class="mySlides fade">
                      <img src="img/img4.jpg" style="width:100%; height: 450px; border-radius: 25px;">
                    </div>
                     <div class="mySlides fade">
                      <img src="img/img5.jpg" style="width:70%; height: 450px; border-radius: 25px;">
                    </div>
                     <div class="mySlides fade">
                      <img src="img/img61.jpg" style="width:100%; height: 450px; border-radius: 25px;">
                    </div>
                     <div class="mySlides fade">
                      <img src="img/img7.jpg" style="width:100%; height: 450px; border-radius: 25px;">
                    </div>

                 </div>
                    <br>

                    <div style="text-align:center">
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                      <span class="dot"></span>
                      <span class="dot"></span>
                      <span class="dot"></span>
                      <span class="dot"></span>
                    </div>

                    <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                           slides[i].style.display = "none";  
                        }
                        slideIndex++;
                        if (slideIndex> slides.length) {slideIndex = 1}    
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";  
                        dots[slideIndex-1].className += " active";
                        setTimeout(showSlides, 2000); // Change image every 2 seconds
                    }
                    </script>
            </div>
        </div>
       <footer>
            <div class="container">
                
                <center style="font-weight: bolder"><img src="img/logo.png" alt="Logo" style="width: 30px; height: 25px; padding-right: 5px">Mission | Excellence | Integrity</center>
            </div>
</footer>
       
    </body>
</html>
