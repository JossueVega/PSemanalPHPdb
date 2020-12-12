<?php

require_once '../Model/config.php';
require_once '../Model/BlogModel.php';

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$titulo=$_POST['titulo'];
$mensaje=$_POST['mensaje'];

$query='insert into Comentarios(nombre,email,titulo,mensaje) values("'.$nombre.'","'.$email.'","'.$titulo.'","'.$mensaje.'");';

$cinemadb=BlogModel::Addcomen($query);
if ($cinemadb) {
  Header('Location: Operation.php');
}

 ?>
