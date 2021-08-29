<?php
    function check($item_id){
        require'common.php';
    }
        if($mysqli_num_rows>=1){
            return 1;
        }else{
            return 0;
        }

    
?>