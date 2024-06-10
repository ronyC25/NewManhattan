<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$descrip = $_POST['descrip'];
$precio = $_POST['precio'];



$sql = "INSERT INTO registros VALUES('$id', '$name', '$descrip', '$precio')";
$query = mysqli_query($con, $sql);


if($query){
    Header("location: crud.php");
};


?>