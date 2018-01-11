<?php

$Ciudad=$_POST['Ciudad'];
$Tipo=$_POST['Tipo'];
$Precio=$_POST['Precio'];
MostrarElementos();
  function MostrarElementos(){
    $data_file = file_get_contents("data.json");
    $data = json_decode($data_file, true);
    $resultado="";
    $resultado=$resultado." ciudad: ".$_POST['Ciudad'];
    $resultado=$resultado." Tipo: ".$_POST['Tipo'];
    $resultado=$resultado." Precio: ".$_POST['Precio'];
    foreach ($data as $Domicilio) {
     
        $resultado=$resultado."<div class='card horizontal'>";
        $resultado=$resultado."<div class='card-image'>";
        $resultado=$resultado."<img src='img/home.jpg'>";
        $resultado=$resultado."</div>";
        $resultado=$resultado."<div class='card-stacked'>";
        $resultado=$resultado."<div class='card-content'>";
        $resultado=$resultado."<strong>Direccion:</strong> ".$Domicilio['Direccion']."<br>";
        $resultado=$resultado."<strong>Ciudad:</strong> ".$Domicilio['Ciudad']."<br>";
        $resultado=$resultado."<strong>Codigo Postal:</strong> ".$Domicilio['Codigo_Postal']."<br>";
        $resultado=$resultado."<strong>Tipo</strong> ".$Domicilio['Tipo']."<br>";
        $resultado=$resultado."<strong>Precio:</strong> ".$Domicilio['Precio']."<br>";
        $resultado=$resultado."</div>";
        $resultado=$resultado."<div class='card-action'>";
        $resultado=$resultado."<a href='#'>VER MAS</a>";
        $resultado=$resultado."</div>";
        $resultado=$resultado."</div>";
        $resultado=$resultado."</div>";
    
  }

   echo $resultado;
  }
 ?>
