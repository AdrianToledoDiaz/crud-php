<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <title>Modificar equipo de La Liga</title>
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
    $equipoId = $_POST["equipoId"];
    $nombre_equipo = $_POST["nombre_equipo"];
    $fundacion = $_POST["fundacion"];
    $abonados = $_POST["abonados"];
    ?>
<h1>Liga Española de Fútbol</h1>
<br>
<div class="container">
    <div class="card">
        <h1 class="text-center">Modificar Equipo</h1>
<form action="index-equipos.php" method="post"> 
    <input type="hidden" name="accion" value="actualizar">
    <input type="hidden" name="equipoAntiguo" value="<?= $equipoId ?>">
  <div class="mb-3">
    <label for="nombre_equipo" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre_equipo" name="nombre_equipo" value="<?= $nombre_equipo ?>">
  </div>
  <div class="mb-3">
    <label for="fundacion" class="form-label">Fundacion</label>
    <input type="text" class="form-control" id="fundacion" name="fundacion" value="<?= $fundacion ?>">
  </div>
  <div class="mb-3">
    <label for="abonados" class="form-label">Abonados</label>
    <input type="number" class="form-control" id="abonados" name="abonados" value="<?= $abonados ?>">
  </div>

<div>
    <button type="submit" class="btn btn-success" >Aceptar</button>
<button class="btn btn-danger"><a href="index-equipos.php">Cancelar</a></button><br><br>
<a id="pagina1" href="./index.html">&lt;&lt;Página Principal</a>
</div>
</form>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>

</html>