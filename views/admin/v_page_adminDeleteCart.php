<?php 
    require_once "models/connectdb.php";
   if (isset($_GET['id_donhang'])) {
    $id_donhang=$_GET['id_donhang'];
    $sql="DELETE FROM  donhang WHERE id_donhang='$id_donhang'";

        mysqli_query($conn,$sql);

        header('location:/healthy-stuff/MVC/admin.php?mod=admin&act=adminCart');
    }
    
?>