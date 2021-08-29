<?php
    
    require'common.php';

        if(isset($_REQUEST['submit']))
        {
        $Username= mysqli_real_escape_string($conn,$_POST['Username']);
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        $Mobile_Number= mysqli_real_escape_string($conn,$_POST['Mobile_Number']);
        $psw= mysqli_real_escape_string($conn,$_POST['psw']);
        $psw_repeat= mysqli_real_escape_string($conn,$_POST['psw_repeat']);

        $res = mysqli_query($conn,"select* from customer where email='$email'and psw='$psw'");
        $result=mysqli_fetch_array($res);

        if($result){
            echo '<script>alert("Email ID Already Taken. Try Again")</script>'; 
        }else{
            $sql_query= "insert into customer(Username, email, Mobile_Number, psw, psw_repeat)
            values ('$Username','$email','$Mobile_Number','$psw','$psw_repeat')";
            
            $sql_query_submit= mysqli_query($conn,$sql_query) or die(mysqli_error($conn));

            $_SESSION["email"]="1";
            header("location:ourservices.php");
            
            
        }
        
        




























        $select_query= "SELECT Username, email, Mobile_Number, psw, psw_repeat FROM customer";
        $select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
        }
        
?>
    
