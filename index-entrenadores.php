<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga Española</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <style>
        body{
            background-image: url("./estadio.jpg");
            background-size: cover;
            background-position-y: -1200px;
        }
        #pagina1{
            color: black;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
<?php
$conexion = mysqli_connect("db", "root", "test", "liga");

       /*  FUNCIONES EQUIPOS */

    if (!isset($_POST["accion"])){
        $_POST["accion"] = "";
    }
    
    if ($_POST["accion"] == "eliminar"){
        $borra = "DELETE FROM entrenadores WHERE entrenadorId=\"$_POST[entrenadorId]\"";
        mysqli_query($conexion, $borra);
    }

     if ($_POST["accion"] == "insertar"){
        $inserta = "INSERT INTO entrenadores VALUES (\"$_POST[entrenadorId]\", \"$_POST[nombre_entrenador]\", \"$_POST[pais]\", \"$_POST[edad]\")";
        mysqli_query($conexion, $inserta);
    }

    
    if ($_POST["accion"] == "actualizar"){
        $actualiza = "UPDATE entrenadores SET nombre_entrenador=\"$_POST[nombre_entrenador]\", pais=\"$_POST[pais]\", edad=\"$_POST[edad]\" WHERE
        entrenadorId=\"$_POST[entrenadorAntiguo]\"";
        mysqli_query($conexion, $actualiza); 

    }
    $consulta = mysqli_query($conexion, "SELECT * FROM entrenadores");
    ?>
    <div class="container">
        <h1>Liga Española de Fútbol</h1>
        <br>
        <div class="card">
        <h1 class=text-center>Entrenadores</h1>

        <table class="table table-striped table-hover" >
            <tr>
                <th>EntrenadorId</th>
                <th>Nombre</th>
                <th>País</th>
                <th>Edad</th>
                <th></th>
                <th></th>
            </tr>

            <?php
            while ($registro = mysqli_fetch_array($consulta)) {
            ?>
                <tr>
                    <td><?= $registro['entrenadorId'] ?></td>
                    <td><?= $registro['nombre_entrenador'] ?></td>
                    <td><?= $registro['pais'] ?></td>
                    <td><?= $registro['edad'] ?></td>

                    <!-- Eliminar un equipo de la base de datos -->
                    <td>
                        <form action="index-entrenadores.php" method="post">
                            <input type="hidden" name="accion" value="eliminar">
                            <input type="hidden" name="entrenadorId" value="<?=$registro['entrenadorId']?>">
                            <button type="submit" class="btn btn-danger">🗑️Eliminar</button>
                        </form>
                    </td>
                    <!-- Boton para modificar datos de un equipo -->
                    <td>
                        <form action="modifica-entrenador.php" method="post">
                            <input type="hidden" name="entrenadorId" value="<?=$registro['entrenadorId']?>">
                            <input type="hidden" name="nombre_entrenador" value="<?=$registro['nombre_entrenador']?>">
                            <input type="hidden" name="pais" value="<?=$registro['pais']?>">
                            <input type="hidden" name="edad" value="<?=$registro['edad']?>">
                            <button type="submit" class="btn btn-primary">✏️Modificar</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
            <!-- Boton para insertar un nuevo equipo -->
            <form action="index-entrenadores.php" method="post">
            <input type="hidden" name="accion" value="insertar"> 
         <tr>
            <td><input type="number" name="entrenadorId"  placeholder="EntrenadorId "></td>
            <td><input type="text" name="nombre_entrenador"  placeholder="Nombre Equipo"></td>
            <td><input type="text" name="pais" placeholder="País"></td>
            <td><input type="text" name="edad" placeholder="Edad"></td></td>   
        <td><button type="submit" class="btn btn-success">Añadir💾</button></td>
        <td></td>
        <tr>
            <td><a id="pagina1" href="./index.html">&lt;&lt;Página Principal</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
         </tr>
         </form>
         
        </table>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>