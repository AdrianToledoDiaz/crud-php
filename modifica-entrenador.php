<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <title>Modificar entrenador de La Liga</title>
    <style>
        body{
            background-image: url("./estadio.jpg");
            background-size: cover;
            background-position-y: -1200px;
        }
        div{
            padding: 10px;
        }
        button[type=submit] {
            position: relative;
        }

        a{
            text-decoration: none;
            color: white;
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
    $entrenadorId = $_POST["entrenadorId"];
    $nombre_entrenador = $_POST["nombre_entrenador"];
    $pais = $_POST["pais"];
    $edad = $_POST["edad"];
    ?>
<h1>Liga Española de Fútbol</h1>
<br>
<div class="container">
    <div class="card">
        <h1 class="text-center">Modificar Entrenador</h1>
    

<form action="index-entrenadores.php" method="post"> 
    <input type="hidden" name="accion" value="actualizar">
    <input type="hidden" name="entrenadorAntiguo" value="<?= $entrenadorId ?>">
  <div class="mb-3">
    <label for="nombre_entrenador" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre_entrenador" name="nombre_entrenador" value="<?= $nombre_entrenador ?>">
  </div>
  <div class="mb-3">
    <label for="pais" class="form-label">País</label>
    <input type="text" class="form-control" id="pais" name="pais" value="<?= $pais ?>">
  </div>
  <div class="mb-3">
    <label for="edad" class="form-label">Edad</label>
    <input type="text" class="form-control" id="edad" name="edad" value="<?= $edad ?>">
  </div>

<div>
    <button type="submit" class="btn btn-success" >Aceptar</button>
<button class="btn btn-danger"><a href="index-entrenadores.php">Cancelar</a></button><br><br>
<a id="pagina1" href="./index.html">&lt;&lt;Página Principal</a>
</div>
</form>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>