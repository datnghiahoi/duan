<?php
require_once "models/connectdb.php";
if (isset($_GET['id_donhang'])) {
    $id_donhang = $_GET['id_donhang'];
    $sql_getdonhang = "SELECT * FROM donhang where id_donhang=$id_donhang LIMIT 1";
    $query_getdonhang = mysqli_query($conn, $sql_getdonhang);
    $row = mysqli_fetch_array($query_getdonhang);
}
if (isset($_POST['submit'])) {
    // $id_donhang = $_POST['id_donhang'];
    $madh = $_POST['madh'];
    $tongdonhang = $_POST['tongdonhang'];
    $phuongthuctt = $_POST['phuongthuctt'];
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
   
    
    if ( $madh != "" && $tongdonhang != ""&& $phuongthuctt != ""&& $hoten != ""&& $email != ""&& $diachi != ""&& $sdt != "") {
        $sql_fix="UPDATE `donhang` SET  `madh` = '$madh', `tongdonhang` = '$tongdonhang', `phuongthuctt` = '$phuongthuctt', `hoten` = '$hoten', `email` = '$email', `diachi` = '$diachi', `sdt` = '$sdt' WHERE `donhang`.`id_donhang` = '$id_donhang';";
       
        mysqli_query($conn, $sql_fix);
        header('location:/healthy-stuff/MVC/admin.php?mod=admin&act=adminCart');
    }
}
?>

<?php include 'v_page_adminHeader.php';?>


<div class="container"> 
    <h1>Sửa Đơn Hàng</h1>
    <form action="" method="post" enctype="multipart/form-data">
      MA_DH:  <input type="text" name="madh" id="name" value="<?php echo $row['madh']?>"><br>
      TONGTIEN: <input type="text" name="tongdonhang" id="" value="<?php echo $row['tongdonhang'] ?>"><br>
      PHUONGTHUCTT: <select name="phuongthuctt">
        <option value="1">Tiền Mặt</option>
        <option value="2">Chuyển Khoản</option>
        <option value="3">MoMo</option>
    </select><br>
      
      
      HOTEN: <input type="text" name="hoten" id="" value="<?php echo $row['hoten'] ?>"><br>
      EMAIL: <input type="text" name="email" id="" value="<?php echo $row['email'] ?>"><br>
      DIACHI: <input type="text" name="diachi" id="" value="<?php echo $row['diachi'] ?>"><br>
      SDT: <input type="text" name="sdt" id="" value="<?php echo $row['sdt'] ?>"><br>
                                    <br>
      <button type="submit" name="submit">Cập Nhật</button>

    </form>
</div>





<?php include 'v_page_adminFooter.php'; ?>
