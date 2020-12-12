<?php
require_once '../Model/config.php';
require_once '../Model/BlogModel.php';

$id=$_POST['Id'];
$query='delete from comentarios where Id="'.$id.'";';
$success=CineModel::Delete($query);
if ($success) {
  Header('Location:Operation.php');
}

 ?>
