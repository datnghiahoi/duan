<?php
require_once "models/connectdb.php";
if (isset($_GET['id_sp'])) {
    $id_sp = $_GET['id_sp'];
    $sql_getSanPham = "SELECT * FROM sanpham where id_sp=$id_sp LIMIT 1";
    $query_getSanPham = mysqli_query($conn, $sql_getSanPham);
    $row = mysqli_fetch_array($query_getSanPham);
}
if (isset($_POST['submit'])) {
    $tensp = $_POST['tensp'];
    $mota = $_POST['mota'];
    $giasp = $_POST['giasp'];
    if ($tensp == "") {
        echo "Vui lòng nhập đủ tên!<br />";
    }
    if ($mota == "") {
        echo "Vui lòng nhập đủ Mô Tả!<br />";
    }
    if ($giasp == "") {
        echo "Vui lòng nhập giá bán!<br />";
    }
    if ($tensp != "" && $mota != "" && $giasp != "") {
        $sql_fix = "UPDATE `sanpham` SET `tensp` = '$tensp', `giasp` = '$giasp', `mota` = '$mota' WHERE `sanpham`.`id_sp` = '$id_sp';";
        mysqli_query($conn, $sql_fix);
        header('location:/healthy-stuff/MVC/admin.php?mod=admin&act=adminPro');
    }
}
?>

<?php include 'v_page_adminHeader.php';?>


<div class="container"> 
    <h1>Sửa SP</h1>
    <form action="" method="post" enctype="multipart/form-data">
      Tên SP:  <input type="text" id="name" name="tensp" value="<?php echo $row['tensp'] ?>"><br>   
      Giá SP:  <input type="text" name="giasp" id="name" value="<?php echo $row['giasp'] ?>"><br>
      Mota: <input type="text" name="mota" id="mota" value="<?php echo $row['mota'] ?>"><br>
      Ảnh SP:  <img src="views/images/<?php echo $row['anhsp'] ?>" alt="" width="60px" height="50px">
                                    <br>



      <button type="submit" name="submit">Cập Nhật</button>

    </form>
</div>





<?php include 'v_page_adminFooter.php'; ?>
