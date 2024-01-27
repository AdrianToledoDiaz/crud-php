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
        .card{
            margin-top: 30px;
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
        $borra = "DELETE FROM equipos WHERE equipoId=\"$_POST[equipoId]\"";
        mysqli_query($conexion, $borra);
    }

     if ($_POST["accion"] == "insertar"){
        $inserta = "INSERT INTO equipos VALUES (\"$_POST[equipoId]\", \"$_POST[nombre_equipo]\", \"$_POST[fundacion]\", \"$_POST[abonados]\")";
        mysqli_query($conexion, $inserta);
    }

    
    if ($_POST["accion"] == "actualizar"){
        $actualiza = "UPDATE equipos SET nombre_equipo=\"$_POST[nombre_equipo]\", fundacion=\"$_POST[fundacion]\", abonados=\"$_POST[abonados]\" WHERE
        equipoId=\"$_POST[equipoAntiguo]\"";
        mysqli_query($conexion, $actualiza); 
    }
    $consulta = mysqli_query($conexion, "SELECT * FROM equipos");
    ?>
    <div class="container">
        <h1>Liga Española de Fútbol</h1>
        <br>
        <div class="card">
        <h1 class=text-center>Equipos</h1>

        <table class="table table-striped">
            <tr>
                <th>EquipoId</th>
                <th>Nombre</th>
                <th>Fundación</th>
                <th>Abonados</th>
                <th></th>
                <th></th>
            </tr>

            <?php
            while ($registro = mysqli_fetch_array($consulta)) {
            ?>
                <tr>
                    <td><?= $registro['equipoId'] ?></td>
                    <td><?= $registro['nombre_equipo'] ?></td>
                    <td><?= $registro['fundacion'] ?></td>
                    <td><?= $registro['abonados'] ?></td>

                    <!-- Eliminar un equipo de la base de datos -->
                    <td>
                        <form action="index-equipos.php" method="post">
                            <input type="hidden" name="accion" value="eliminar">
                            <input type="hidden" name="equipoId" value="<?=$registro['equipoId']?>">
                            <button type="submit" class="btn btn-danger">🗑️Eliminar</button>
                        </form>
                    </td>
                    <!-- Boton para modificar datos de un equipo -->
                    <td>
                        <form action="modifica-equipo.php" method="post">
                            <input type="hidden" name="equipoId" value="<?=$registro['equipoId']?>">
                            <input type="hidden" name="nombre_equipo" value="<?=$registro['nombre_equipo']?>">
                            <input type="hidden" name="fundacion" value="<?=$registro['fundacion']?>">
                            <input type="hidden" name="abonados" value="<?=$registro['abonados']?>">
                            <button type="submit" class="btn btn-primary">✏️Modificar</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
            <!-- Boton para insertar un nuevo equipo -->
            <form action="index-equipos.php" method="post">
            <input type="hidden" name="accion" value="insertar"> 
         <tr>
            <td><input type="number" name="equipoId"  placeholder="Equipo Id"></td>
            <td><input type="text" name="nombre_equipo"  placeholder="Nombre Equipo"></td>
            <td><input type="text" name="fundacion" placeholder="Fundacion"></td>
            <td><input type="number" name="abonados" placeholder="Abonados"></td></td>   
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