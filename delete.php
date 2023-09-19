<?php
    include('connect.php');
    if (isset($GET_['deleteid'])){
        $id = $GET_['deleteid'];
        
        $sql = "delete from cart where item_id=$id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo("Deleted!");
        }
        else{
            die(mysqli_error($con));
        }
    }

?>