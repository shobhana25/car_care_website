<?php
  require'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Locate Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="navbar.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="services.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script> 
            $(document).ready(function(){
            $("#form").click(function(){
                $("#content").slideToggle("slow");
            });
            });
        </script>
        <style>
            body{
                backgr
                ound-color: white;
            }
            .content{
                padding-right: 200px;
                padding-left: 450px;
            }
        </style>
    </head>
    <body>
        <?php
          include'header.php';
          
        ?>
 <p style="text-align: center; color: rgb(131, 91, 31);font-size: 35px;"><i><b>LOCATE OUR FRANCHISE!</b></i></p>
        <div class="content">
           
         
          <img src="locate.jpg" height=200>
          <br>
          <p style="text-align: left; color: rgb(32, 110, 112);font-size: 20px;"><i>Use the map and find the nearest car care workshop near you.<br><br> Login and 
           explore various services available.<br><br> Avail discounts, pick and drop service and many more..!!</i></p>
           <br><br>
           <div class="gmap_canvas">
            <iframe src="https://www.google.com/maps/d/u/4/embed?mid=15dX2c1OhuMSaHRBllFmPadnt_y0tqFjf" width="640" height="480"></iframe>
            <!---<a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a>--->
        </div>
        <style>
        .mapouter{position:relative;text-align:right;height:500px;width:600px;}
        .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
        </style>
        </div>  
        <br><br>
        <footer>
            <div class="grid2">
                <div class="box1">Copyright Reserved @ OneStopAuto</div>
                <div class="box2">
                    Follow Us:
                    <a href="https://www.facebook.com/onestopssa.autoasdad" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/onestopauto24x7/
                        " class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a></div>
                <div class="box3">Contact Us: +91 90000 00000</div>
            </div>
            </div>
        </footer>
    
    </html>
        
    </body>
</html>