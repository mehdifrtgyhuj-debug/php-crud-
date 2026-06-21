<?php
$conn = mysqli_connect("localhost","root","","user-db");

if (!$conn) {
    die("connection failed:". mysqli_connect_errno());
}