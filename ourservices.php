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
    <link rel="stylesheet" href="ourservices.css" type="text/css">

    <link href="aboutus.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
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
        
    ?>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#alpha">Sanitization </a>
        <a href="#bravo">Periodic Services</a>
        <a href="#charlie">Tyres & Wheel Core</a>
        <a href="#delta">Cleaning & Detailing</a>
        <a href="#echo">Denting</a>
        <a href="#foxtrot">Batteries</a>
        <a href="#golf">Lights & Fitments</a>
        <a href="#hotel">Glass & Custom Services</a>

    </div>
    <span onclick="openNav()"><img src="service.jpg" height=100></span>


    <!-- Use any element to open the sidenav -->







    </class>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">

        <div class="box">
            <img src="box3.jpg" alt="OneStopAuto" width="700" height="300" style="position: relative;">
            <div class="centered"><i><b>Affordable & Best</b></i></div>
        </div>
    </div>

    <div class="service">
        <div id="alpha">
            <p style="color:#5e1313;font-size:30px;"><i><b>Sanitization</b></i></p>
            <p style="color:indianred;font-size:20px;"><i>
                    Total santization using steam spraying</i>
            </p>
            <br>

            <p style="color: rgb(19, 90, 84);font-size:18px;">
                <img src="sanitize.jpg" width="300" height="200" style="float:left;">
                Sanitization & disinfection are the best ways to deal with viruses.
                Sanitizing the vehicle means your vehicle will be cleaned and disinfected from any kind of germs and
                viruses and will make sure that it won’t get affected sometime soon. That is known as vehicle sanitizing
                service.Germ Shield is an antimicrobial transparent coating on the surface of car that gives 99.99% germ
                kill protection. You will be able to get complete sanitization for vehicle to make
                it virus proof and also disinfect it from SARS viruses.<br><br>
               
            </p>
    


        </div>

        <div id="bravo">
            <p style="color:#5e1313;font-size:30px;"><i><b>Periodic Car Servicing</b></i></p>
            <p style="color: indianred;font-size:20px;"><i>
                    Utilize your vehicle to its maximum potential</i>
            </p><br>

            <p style="color: rgb(19, 90, 84);font-size:18px;">
                <img src="periodic.jpg" width="300" height="200" style="float:left;">
                Prevention is always better than cure. And that, wholly explains OneStopAuto's Periodic Maintenance
                Services. This service aims at the prevention of car breakdowns and failures. Regular vehicle
                maintenance helps optimize the performance, reliability, safety and durability of the car, while
                ensuring a good resale value.
                Through regular vehicle inspections and maintenance, the overall performance of the vehicle can be
                optimized.In addition, it helps avoid more expensive repairs that one may need to incur in the near
                future.<br><br>
                
            </p>

        </div>

        <div id="charlie">
            <p style="color:#5e1313;font-size:30px;"><i><b>Tire & Wheel Services</b></i></p>
            <p style="color: indianred;font-size:20px;"><i>
                    Complete car santization using steam sanitizer</i>
            </p><br>

            <p style="color: rgb(19, 90, 84);font-size:18px;">
                <img src="tire.jpg" width="300" height="200" style="float:left;">
                Sanitization and disinfection are the best ways to deal.
                Sanitizing the vehicle means your vehicle will be cleaned and disinfected from any kind of germs and
                viruses and will make sure that it won’t get affected sometime soon. That is known as vehicle sanitizing
                service.Germ Shield is an antimicrobial transparent coating on the surface of car that gives 99.99% germ
                kill protection. You will be able to get complete sanitization for vehicle to make
                it virus proof and also disinfect it from SARS and other droplet-based viruses.<br><br>
                
            </p>
            
        </div>

        <div id="delta">
            <p style="color:#5e1313;font-size:30px;"><i><b>Cleaning & detailing</b></i></p>
            <p style="color: indianred;font-size:20px;"><i>
                Complete car santization using steam sanitizer</i>
            </p><br>

            <p style="color: rgb(19, 90, 84);font-size:18px;">
                <img src="detailing.jpg" width="300" height="200" style="float:left;">
                Maintain your car’s visual and functional aesthetics is by availing the best car detailing services in
                your
                city. Car detailing is a comprehensive cleaning procedure for the interiors as well as the exteriors of
                your
                automobile that attends to stubborn stains, making your car look as good as new.Classic car wash and
                auto
                detailing service includes car interior vacuum cleaning, car seat dry cleaning, upholstery cleaning,
                windshield cleaning, application of wax coating, and tyre and bumper dressings <br><br>
                
            </p>
            
        </div>

        <div id="echo">
            <p style="color:#5e1313;font-size:30px;"><i><b> Denting</b></i></p>
            <p style="color: indianred;font-size:20px;"><i>
                Complete car santization using steam sanitizer</i>
            </p><br>

            <p style="color: rgb(19, 90, 84);font-size:18px;">
                <img src="dent.jpg" width="300" height="200" style="float:left;">
                Sanitization and disinfection are the best ways to deal.
                Sanitizing the vehicle means your vehicle will be cleaned and disinfected from any kind of germs and
                viruses and will make sure that it won’t get affected sometime soon. That is known as vehicle sanitizing
                service.Germ Shield is an antimicrobial transparent coating on the surface of car that gives 99.99% germ
                kill protection. You will be able to get complete sanitization for vehicle to make
                it virus proof and also disinfect it from SARS and other droplet-based viruses.<br><br>
                
            </p>
            
        </div>

        <div id="foxtrot">
            <p style="color:#5e1313;font-size:30px;"><i><b> Batteries </b></i></p>
            <p style="color: indianred;font-size:20px;"><i>
                Complete car santization using steam sanitizer</i>
            </p><br>

            <p style="color: rgb(19, 90, 84);font-size:18px;">
                <img src="batteries.jpg" width="300" height="200" style="float:left;">
                Sanitization and disinfection are the best ways to deal.
                Sanitizing the vehicle means your vehicle will be cleaned and disinfected from any kind of germs and
                viruses and will make sure that it won’t get affected sometime soon. That is known as vehicle sanitizing
                service.Germ Shield is an antimicrobial transparent coating on the surface of car that gives 99.99% germ
                kill protection. You will be able to get complete sanitization for vehicle to make
                it virus proof and also disinfect it from SARS and other droplet-based viruses.<br><br>
                
            </p>
            
        </div>

        <div id="golf">
            <p  style="color:#5e1313;font-size:30px;"><i><b> Lights & Fitments </b></i></p>
            <p style="color: indianred;font-size:20px;"><i>
                Complete car santization using steam sanitizer</i>
            </p><br>

            <p style="color: rgb(19, 90, 84);font-size:18px;">
                <img src="fitment.jpg" width="300" height="200" style="float:left;">
                Sanitization and disinfection are the best ways to deal.
                Sanitizing the vehicle means your vehicle will be cleaned and disinfected from any kind of germs and
                viruses and will make sure that it won’t get affected sometime soon. That is known as vehicle sanitizing
                service.Germ Shield is an antimicrobial transparent coating on the surface of car that gives 99.99% germ
                kill protection. You will be able to get complete sanitization for vehicle to make
                it virus proof and also disinfect it from SARS and other droplet-based viruses.<br><br>
                
            </p>
            
        </div>

        <div id="hotel">
            <p style="color:#5e1313;font-size:30px;"><i><b>  Glass & Custom Services</b></i></p>
            <p style="color: indianred;font-size:20px;"><i>
                Complete car santization using steam sanitizer</i>
            </p><br>

            <p style="color:rgb(19, 90, 84);font-size:18px;">
                <img src="sanitize.jpg" width="300" height="200" style="float:left;">
                Sanitization and disinfection are the best ways to deal.
                Sanitizing the vehicle means your vehicle will be cleaned and disinfected from any kind of germs and
                viruses and will make sure that it won’t get affected sometime soon. That is known as vehicle sanitizing
                service.Germ Shield is an antimicrobial transparent coating on the surface of car that gives 99.99% germ
                kill protection. You will be able to get complete sanitization for vehicle to make
                it virus proof and also disinfect it from SARS and other droplet-based viruses.
                <br><br>
                
            </p>
           
        </div>
        <br>
    </div>
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
