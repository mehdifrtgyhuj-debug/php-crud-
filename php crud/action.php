<?php

var_dump($_POST);
var_dump($_GET);
include "confing.php";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($conn,"INSERT INTO users (name,email,phone,address)
                        VALUES ('$name','$email','$phone','$address')");
                        header("location: index.php");
                        exit;
}


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = mysqli_query($conn,"UPDATE users
        SET name='$name',
            email='$email',
            phone='$phone',
            address='$address'
        WHERE id=$id");

    if($query){
        header("Location: index.php");
        exit;
    } else {
        echo mysqli_error($conn);
    }
}
