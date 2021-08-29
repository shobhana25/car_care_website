
<nav>
<div class="topnav" id="myTopnav">
                <img src="finalogo.jpeg" alt="logo" style="float:left; width: 200px; height: 60px;">
<?php
if (isset($_SESSION['email'])){
?>
            
            
              <a href="aboutus.php">About Us</a>
              <a href="locate.php">Locate Us</a>
              
               <a href="ourservices.php">Our Services</a>    
              
              <a href="cart.php">Cart</a>
              <a href="logout.php" >Logout</a>
              
              <?php
        }else{
               ?>
               <a href="index.php">Home</a>
              <a href="aboutus.php">About Us</a>
              <a href="locate.php">Locate Us</a>
              <a id="form" style="float: right; font-size: 20px; padding:6px 5px 2px px ;">&#9776;Login</a>
                    <div id="content" style="float: right;">
                        <center>
                            <form action="login_submit.php" class="form-container" method="POST" >
                                <h1 style="color: black;">Login</h1><br>
                                <h4>No Account? Click on Sign Up to Register!</h4><br>
                            
                                <label for="email" style="color: black;"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" name="email" required>
                            
                                <label for="psw" style="color: black;"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>
                            
                                <button type="submit" class="btn" style="height: 50px;font-size: 25px;" name="sub">Login</button>
                                <button onclick="document.location='register.php'" style="height: 50px; font-size:25px;float: right;" class="btn">
                                    Sign Up
                                  </button>
                            </form>
                        </center>
                    </div>
                    
                    <?php
        }?>                   
              <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
            
            <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
        </script>
       
        </nav>
        