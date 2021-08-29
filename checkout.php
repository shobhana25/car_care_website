<?php
    require'common.php';
    if(isset($_REQUEST['placeorder']))
        {
            $pid=$_GET["pid"];
            
            $sql_query= "insert into booking(Service)
            values ('$pid')";

            
        }
?>
