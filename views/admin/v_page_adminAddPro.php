<?php include 'v_page_adminHeader.php';?>

<?php 
$sql_DanhMuc="SELECT * FROM danhmuc ORDER BY id_dm DESC";
$query_DanhMuc=mysqli_query($conn,$sql_DanhMuc);


if (isset($_POST['submit'])) {
    $tensp = $_POST['tensp'];
// $anhsp = $_POST['anhsp'];
$giasp = $_POST['giasp'];
$mota = $_POST['mota'];
$anhsp = ''; // Khởi tạo tên ảnh sản phẩm
    if ($_FILES['anhsp']['name']) {
        // Đường dẫn thư mục lưu trữ ảnh
        $target_dir = "views/images/";
        // Tên tệp ảnh sau khi tải lên
        $target_file = $target_dir . basename($_FILES['anhsp']['name']);
        // Di chuyển tệp ảnh vào thư mục lưu trữ
        if (move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file)) {
            $anhsp = basename($_FILES['anhsp']['name']);
        } else {
            echo "Có lỗi khi tải lên tệp ảnh.";
        }
    }
    $id_dm = $_POST['danhmuc'];

  $sql_add = "INSERT INTO sanpham(tensp,anhsp,giasp,mota,id_dm) VALUES('$tensp','$anhsp','$giasp','$mota','$id_dm')";
  mysqli_query($conn,$sql_add);
  header('location:/healthy-stuff/MVC/admin.php?mod=admin&act=adminPro');
}
 
?>



<div class="container"> 
    <h1>Thêm SP</h1>
    <form action="" method="post" enctype="multipart/form-data">
      Tên SP:  <input type="text" id="tensp" name="tensp"><br>
      Ảnh SP:  <input type="file" name="anhsp" id="anhsp" ><br>
      Giá SP:  <input type="text" name="giasp" id="giasp"><br>
      Mota: <input type="text" name="mota" id="mota"><br>
      Danh Mục: <select name="danhmuc" id="danhmuc">
    <option>Chọn danh mục</option>
    <?php while ($row=mysqli_fetch_array($query_DanhMuc)) {?>
        <option value="<?php echo $row['id_dm']?>"><?php echo $row['tendm']?></option>
    <?php }?>
</select><br>
      <button type="submit" name="submit">submit</button>
    </form>
</div>

<?php include 'v_page_adminFooter.php'; ?>