<?php
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM registros WHERE id=$id";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div clas="users-form">
        <form action="inser_plat.php" method = "POST">
            <h1>EDITAR PLATOS</h1>
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="name" value="<?= $row['name']?>">
            <input type="text" name="descrip" value="<?= $row['descrip']?>">
            <input type="text" name="precio" value="<?= $row['precio']?>">
            
            <input type="submit" value="Actualizar">

        </form>

    </div>
    
</body>
</html>