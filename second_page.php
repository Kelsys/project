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
                        <li id="tab"><h3><a href="officer_login.php"><span class="glyphicon glyphicon-cog"></span> Settings</h3></a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container" style="padding-top: 100px">
           
            <div class="col-xs-4" style=" float: right">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                            <h3>Leaves remaining:</h3>
                    </div>
                    <div class="panel-body">
                        
                    <ul><b>
                <li>Annual: 60</li>
                <li>Casual: 60</li>
                <li>Paternity: 60</li>
                <li>Restricted Holidays: 2</li></b>
            </ul>
                </div>
            </div>
            </div>
            <h2><b>Type of Leave: </h2></b><br>
            <form style=" padding-left: 20px">
                <label class="radio-inline"  style=" font-size: 20px; ">
                    <input type="radio" name="leave" value="al" style=" height: 18px; width: 20px;" > Annual
                </label>
                <label class="radio-inline"  style=" font-size: 20px">
                <input type="radio" name="leave" value="cl" style=" height: 18px; width: 20px;" > Casual
                </label>
                <label class="radio-inline"  style=" font-size: 20px">
                <input type="radio" name="leave" value="mt" style=" height: 18px; width: 20px;"> Paternity/Maternity 
                </label>
                <label class="radio-inline"  style=" font-size: 20px">
                <input type="radio" name="leave" value="rh" style=" height: 18px; width: 20px;"> Restricted Holiday
                </label>
            </form>
            <br><br>
            <form style=" padding-left: 20px">
                <b><h4>Name of CO: <input type="text" name="co"></h4></b><br>
                
                FROM: <input type="date" name="fdate"><br><br>
                TO: <input type="date" name="tdate">
            </form>
            <br><br><br><br>
            <div id="demo">
                <p></p>
            </div>
           <button onclick="myFunc()" type="submit" name="submit" class="btn btn-success " style=" font-size: 20px">Next <span class="glyphicon glyphicon-arrow-right"></span></button>
           
           
           
           <script>
               function myFunc(){
                 var txt;
                 if(confirm("Do you want to continue?")===true)
                 {
                     txt="you pressed ok";
                 }
                 else{
                     txt="you pressed cancel";
                 }
                 document.getElementById("demo").innerHTML=txt;
               }
                
            </script>
        </div>
        
        
        
        <footer>
            <div class="container">
                
                <center style="font-weight: bolder"><img src="img/logo.png" alt="Logo" style="width: 30px; height: 25px; padding-right: 5px">Mission | Excellence | Integrity</center>
            </div>
        </footer>
       
    </body>
</html>