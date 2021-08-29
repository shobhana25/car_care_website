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
    <link rel="stylesheet" href="aboutus.css" type="text/css">

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
    <div id="aboutUsBody">
        <div class="head">
            <img src="logo1.jpg" alt="OneStopAuto" width="230" height="190">
            <div class="center"><i><b>Why Choose OneStopAuto?</b></i></div>
        </div>
    </div>
    <br><br>
    <div class="choices">
        <div><img src="convinent.png" width="230" height="190"><br><br>
            <p style="color: rgb(19, 90, 84);font-size:35px;"><b><i>Convinience</i></b></p>
        </div>
        <div><img src="reliable.jfif" width="230" height="190"><br><br>
            <p style="color: rgb(19, 90, 84);font-size:35px;"><b><i> Reliablity Factor</i></b></p>
        </div>

        <div><img src="transparent.png" width="230" height="190"><br><br>
            <p style="color: rgb(19, 90, 84);font-size:35px;"><b><i>Transparency</i></b></p>
        </div>
    </div>
    <div class="mainpara">
        <p style="color: rgb(47, 40, 49);font-size:20px;"><i><b>
                    <centre> OneStopAuto is a place where technology, people and "car care" converge. This is where you,
                        a car owner will
                        appreciate the tremendous power of technology and 3M`s great beliefs in human connect.<br><br>
                        While we pride ourselves in the science that goes into development of each of the products used
                        at a OneStopAuto,
                        it is also our endeavor to ensure that our customers understand our varied range of services
                        with utmost detail.</centre>
                </b></i></p><br><br>
    </div>
    <div class="howitworks">
        <p><b><i>How it works at OneStopAuto ?</i></b></p><br>
        <img src="servicing.jpg" width="650" height="350"><br>
        <p style="font-size:25px;color:rgb(209, 99, 26)"><b>Sure about the service you need for car and cost
                involved</b></p>
        <br>
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

</html>
