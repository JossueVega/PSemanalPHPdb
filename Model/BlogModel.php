<?php
 /**
  *
  */
 class BlogModel
 {

   public function ListaBlog()
   {

     global $db;
     $query="select * from comentarios";
     $consulta=$db->query($query);
     $lineas=$consulta->fetch_All();
     // All

     if (isset($lineas)) {
       return $lineas;
     }

   else {
     return false;
   }
   }

   public function Addcomen($query){
     global $db;


     $consulta=$db->query($query);


     if ($consulta) {
       return true;
     }
     else {
        echo "error";
     }
   }

   public function Editcomen($query){
     global $db;

     $consulta=$db->query($query);
     $linea=$consulta->fetch_object();
     if (isset($linea)) {
        return $linea;
     }
     else{
       return false;
     }
   }

   public function Updatecomen($query)
   {
     global $db;

     $consulta=$db->query($query);
     if ($consulta) {
       return true;
     }
     else{
       return false;
     }
   }

   public function Delete($query)
   {
     global $db;
     $consulta=$db->query($query);
     if ($consulta) {
       return true;
     }
     else{
       return false;
     }
   }
}

 ?>
