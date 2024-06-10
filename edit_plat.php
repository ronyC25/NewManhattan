<?php
include("connection.php");
$con = connection();

$id = $_POST['id'];
$name = $_POST['name'];
$descrip = $_POST['descrip'];
$precio = $_POST['precio'];


$sql = "UPDATE registros SET name='$name', descrip = '$descrip', precio = '$precio'";
$query = mysqli_query($con, $sql);


if($query){
    Header("location: crud.php");
};


?>