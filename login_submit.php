<?php
    
    require'common.php'; 
    
    if(isset($_REQUEST['sub']))
    {
    $a = $_REQUEST['email'];
    $b = $_REQUEST['psw'];
    
    $res = mysqli_query($conn,"select* from customer where email='$a'and psw='$b'");
    $result=mysqli_fetch_array($res);
    if($result)
    {
        
        $_SESSION["email"]="1";
        header("location:ourservices.php");
    }
    else	
    {
        echo '<script>alert("Check Login Details. OR  SIGNUP")</script>'; 
        
    }
    }

?>

