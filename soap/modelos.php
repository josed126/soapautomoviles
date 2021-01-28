<!DOCTYPE html>
<html>
<head>
    <style>
       

        p {
            background-color: green;
            color: white;
            font-weight: bolder;
           
            padding: 2px;
            text-align: center;
        }

        img {
            width: 10em;
           display:block;
            margin:auto;
            border: 3px violet solid;
            padding: 4px;
        }
 h1 {
  color: #6c2eb9;
  font-weight: normal;
  font-size: 40px;
  font-family: Arial;
  text-transform: uppercase;
  text-align: center;
}
        
    </style>
</head>
<body>
<?php
    require_once "client.php";
    $marca = $_REQUEST['marca'];
    $modelos = $client->ObtenerModelosPorMarca($marca);
?>
<h1>Modelos disponibles marca: <?= $marca ?></h1>
<?php
    foreach ($modelos as $modelo) {
?>
        <div>
            <img src="images/<?= strtolower($marca) ?>.jpg" alt="logo <?= $marca ?>" />
            <p><?= $modelo ?></p>
        </div>
<?php
    }
?>
</body>
</html>