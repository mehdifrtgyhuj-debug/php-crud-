<?php
include "confing.php";

if(isset($_GET['id'])){

    $id = (int) $_GET['id'];

    $query = mysqli_query(
        $conn,
        "DELETE FROM users WHERE id=$id"
    );

    if($query){
        header("Location: index.php");
        exit;
    }else{
        echo mysqli_error($conn);
    }
}
?>