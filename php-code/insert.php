<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $codigo=$_POST['codigo'];
 $nombre=$_POST['nombre'];

 $q=mysqli_query($con,"INSERT INTO `mascotas` (`id`,`duration`,`nombre`) VALUES ('$codigo','$nombre')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>