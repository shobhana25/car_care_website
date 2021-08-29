<?php
    require'common.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="signup.css" type="text/css">
    
</head>

<body>
    <script>
        function validate(){
            var correct_way = /^[A-Za-z]+$/;
            var correct_psw = /^(?=.*[0-9])(?=.*[!@$%^&])[a-zA-Z0-9!@$%^&]{7,15}$/;
            var correct_number =/^[789]\d{9}$/;
            var correct_email =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var username = document.getElementById("usernm").value;
            var password = document.getElementById("psw").value;
            var rpassword = document.getElementById("psw-repeat").value;
            var mobile_number = document.getElementById("mn").value;
            var email_id = document.getElementById("email").value;

            if (username.length<5){
                document.getElementById("message").innerHTML="**Username should be more than 5 characters**";
                return false;
            }
            if (username.match(correct_way)){
                true;
            }    
            else{
                document.getElementById("message").innerHTML="**Use only characters**"; 
                return false;
            }
            
            if (password.length<8){
                document.getElementById("check").innerHTML="**Password should be more than 8 characters**";
                return false;
            }
            else{
                if(password.match(correct_psw)){
                    true;
                }
                else{
                    document.getElementById("check").innerHTML="**Should have atleast 1 uppercase, 1 lowercase, 1 special character(#,* not allowed) and 1 number**";
                    return false;
                }
            }
            if (password!=rpassword){
                document.getElementById("re_check").innerHTML="**Wrong Password**";
                return false;
            }

            if(isNaN(mobile_number)){
                document.getElementById("mobile").innerHTML="**Please fill valid number**";
                return false;
            }
            if (mobile_number.length<10){
                document.getElementById("mobile").innerHTML="**Please check the length of number**";
                return false;
            }
            if(mobile_number.match(correct_number)){
               true; 
            }
            else{
                document.getElementById("mobile").innerHTML="**Number should start with 7 or 8 or 9**";
                return false;
            }

            if(email_id.match(correct_email)){
                true;
            }
            else{
                document.getElementById("email_check").innerHTML="**Invalid email id**";
                return false;
            }
        }
    </script>
    
    <form action="signup.php" class="page" onsubmit="return validate()" method="POST" >
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="username"><b>Username</b></label>      
            <span id="message" style="color:red;"></span>
            <input type="text" placeholder="Enter Username" name="Username" id="usernm" autocomplete="off" required>
            
            <label for="email"><b>Email</b></label>    
            <span id="email_check" style="color: red;"></span>
            <input type="text" placeholder="Enter Email" name="email" id="email" autocomplete="off" required>

            <label><b>Mobile Number</b></label> 
            <span id="mobile" style="color: red;"></span>       
            <input type="text" placeholder="Enter Mobile Number" name="Mobile_Number" id="mn" autocomplete="off" required>

            <label for="psw"><b>Password</b></label>     
            <span id="check" style="color: red;"></span>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>   
            <span id="re_check" style="color: red;"></span>
            <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw-repeat" required>
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="submit" class="registerbtn" value="Submit" name="submit" onclick="document.location='ourservices.php'"><span>Submit</span></button>
        </div>
    </form>
    

</body>

</html>