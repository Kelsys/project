

<html>
     <head>
        <title>Officers | Leave application</title>
        <link rel="icon" href="img/IAF-Logo Png.png" type="image/jpg" >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styling.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 60px;">
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
            </div>
        </nav>
        <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                            <h4>LOGIN</h4>
                    </div>
                    <div class="panel-body">
                       
                       </p><form role="form" action="login_submit.php" method="POST">
                        <div class="form-group">
                            <h5><b>Service No.</b></h5><input type="text" class="form-control" placeholder="Ex: 123456A" name="serNo" required="" pattern="[0-9]{5}[A-Z]{1}">
                        </div>
                        <div class="form-group">
                            <h5><b>Date of birth</b></h5><input type="date" class="form-control" placeholder="Date of birth" name="dob" required="">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                        
                        </form><br>
                    </div>
                    <div class="panel-footer"><p>New? <a href="personal.php">Register Here</a></p></div>
                </div>
            </div>
         <footer>
            <div class="container">
                <center style="font-weight: bolder"><img src="img/logo.png" alt="Logo" style="width: 30px; height: 25px; padding-right: 5px">Mission | Excellence | Integrity</center>
            </div>
        </footer>
    </body>
</html>