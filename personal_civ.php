
<?php
require("common.php");
if(isset($_SESSION['serNo'])){
    header('location:second_page.php');
    }
?><html>
     <head>
        <title>Officers | Leave application</title>
        <link rel="icon" href="img/IAF-Logo Png.png" type="image/jpg">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styling.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" >
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body style="padding: 60px 0px 700px 0px">
         <nav class="navbar navbar-fixed-top">
            <div class="container" id="head">
                <div class="navbar-header">
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
                            <h4>Personal Details</h4>
                    </div>
                    <div class="panel-body">
                       
                       <form role="form" action="signup_script.php" method="POST">
                        <div class="form-group">
                            <h5><b>Service No.(With Sx)</b></h5> <input type="text" class="form-control" placeholder="Ex: 12345A" name="SerNo"  required maxlength="5" >
                        </div>
                        <div class="form-group">
                                <h5><b>Rank</b></h5>
                                <select name="rank">
                                    <option>--Select--</option>
                                    <option value="acm">Air Chief Marshal</option>
                                    <option value="am">Air Marshal</option>
                                    <option value="avm">Air Vice Marshal</option>
                                    <option value="ac">Air Cmde</option>
                                    <option value="gc">Gp Cpt</option>
                                    <option value="wc">Wg Cdr</option>
                                    <option value="sl">Sqd Ldr</option>
                                    <option value="fl">Flt Lt</option>
                                    <option value="fo">Fg Offr</option>
                                  </select>
                        </div>
                        <div class="form-group">
                           <h5><b>Name</b></h5><input type="text" class="form-control" placeholder="Ex: Ram Singh" name="name" required = "true">
                        </div>
                           <div class="form-group">
                               <h5><b>Trade</b></h5>
                               <select name="trade" placeholder="Select">
                                    <option>--Select--</option>
                                    <option value="acm">Air Chief Marshal</option>
                                    <option value="am">Air Marshal</option>
                                    <option value="avm">Air Vice Marshal</option>
                                    <option value="ac">Air Cmde</option>
                                    <option value="gc">Gp Cpt</option>
                                    <option value="wc">Wg Cdr</option>
                                    <option value="sl">Sqd Ldr</option>
                                    <option value="fl">Flt Lt</option>
                                    <option value="fo">Fg Offr</option>
                                  </select>
                           </div>
                           <div class="form-group">
                               <h5><b>Unit</b></h5><input  type="text" class="form-control"  placeholder="Ex:112HU" name="unit" required = "true">
                           </div>
                           <div class="form-group">
                               <h5><b>Basic Pay</b></h5>  <input  type="text" class="form-control"  placeholder="Ex:10000" name="bpay" required = "true">
                           </div>
                           <div class="form-group">
                                <h5><b>Rly Stn(Home Town)</b></h5>  <input  type="text" class="form-control"  placeholder="Ex:NDLS" name="address" required = "true">
                           </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        
                        </form>
                    </div>
                   </div>
            </div>
        
         <footer>
             <div class="container">
                <center style="font-weight: bolder"><img src="img/logo.png" alt="Logo" style="width: 30px; height: 25px; padding-right: 5px">Mission | Excellence | Integrity</center>
            </div>
        </footer>
    </body>
</html>

