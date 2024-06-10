<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM registros";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>Restaurante NewManhattan</title>
    
</head>


<body>
    <div class="users-form">
        <form action="inser_plat.php" method = "POST">
            <h1>Ingresar Platos</h1>

            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="descrip" placeholder="Descripcion del Plato">
            <input type="text" name="precio" placeholder="Precio">
    
            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h1>Platillos del Menu
        </h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                <?php  while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?= $row['id']?></th>
                    <th><?= $row['name']?></th>
                    <th><?= $row['descrip']?></th>
                    <th><?= $row['precio']?></th>
                
                    <th><a href="update.php?id=<?= $row['id']?>" class="users-table--edit">Editar</a></th>
                    <th><a href="delete_plat.php?id=<?= $row['id']?>" class="users-table--delete">Eliminar</a></th>
                </tr>

                <?php  endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>