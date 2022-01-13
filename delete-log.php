<?php
include "database/connect.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from login_activity where id = $id";
    $res = mysqli_query($conn,$sql);

    if($res){
        header("location:log.php");
    }
}


?>