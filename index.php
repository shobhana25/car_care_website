<?php
    require'common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>OneStopAuto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css" type="text/css">
    <link href="aboutus.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#form").click(function () {
                $("#content").slideToggle("slow");
            });
        });
    </script>
</head>
<body>

    <?php
        include 'header.php';
    
        if (isset($_SESSION['email'])){
            header('location:ourservivces.php');
        }
    ?>
        <br>
        <div class="background-top">

            <div class="nav-logo">
                <img src="crop_logo.jpg">
            </div>
         
        </div>
        <br><br>
    
        <div class="mid-content" style="font-style: Algreya;"></div>
            <center>
                <h1 style="font-weight: bolder;"><b>One Stop Auto</b></h1><br>
                <p style="font-style: volkorn regular; font-size: 22px">The One Stop Auto Store is a place where technology, people and "car care" converge.<br>
                    This is where you, a car owner will appreciate the tremendous power of technology and <br>
                    One Stop Auto great beliefs in human connect.<br><br>
                    Your <b>safety</b> has as much <b>priority</b><br>
                    as your car</p>
            </center>
        </div>
        <br><br>
    
        
        <div class="slider">
              
        </div>
    
        <br><br>
        
        <div class="wrapper" style="font-style: Algreya;">
            <div>
                <h1>HURRY!!</h1><h3>GREAT OFFERS</h3><br>
                <ul>
                   <li><p>Get 15% off on Interior and Exterior Polishing Value Combo!*</p></li> 
                </ul>
            </div>
    
            <div>
                <h1>TESTIMONIALS<h1><br>
                
                <p><h3>Nidhi Mhatre</h3><br>
                 Immense Car Detailing and Care, Classic Craftsmanship and skilled resources!</p>
            </div>
    
            <div>
                <div class="video">
                       <iframe  src="https://www.youtube.com/embed/Srz8ahMjVss" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encryted-media; gyroscope; picture-in-picture"
                        allowfullscreen width="920px" height="500px"></iframe>
               </div>
            </div>
    
            <div>
               <h1>BOOK NOW</h1><br>
               <p>Book appointment for any treatments in advance right here.</p>        
            </div>
    
            <div>
                <h1>WHAT'S NEW</h1><br>
                <ul>
                    <li><p>New oneStopAuto Paint Shine and Sheild Coating</p></li>
                    <li><p>oneStopAuto Venture Sheild Paint Protection Film</p></li>
                    <li><p>New oneStopAuto Rodent Repelent Treatment</p></li>
                    <li><p>New oneStopAuto Waterless Car Wash</p></li>
                </ul>
            </div>
            <br><br>
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
</body>
</html>