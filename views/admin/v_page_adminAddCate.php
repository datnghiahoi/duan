<?php include 'v_page_adminHeader.php';?>

<?php 

if (isset($_POST['submit'])) {
    $tendm = $_POST['tendm'];
    $anhdm = ''; // Khởi tạo tên ảnh sản phẩm
    if ($_FILES['anhdm']['name']) {
        // Đường dẫn thư mục lưu trữ ảnh
        $target_dir = "views/images/";
        // Tên tệp ảnh sau khi tải lên
        $target_file = $target_dir . basename($_FILES['anhdm']['name']);
        // Di chuyển tệp ảnh vào thư mục lưu trữ
        if (move_uploaded_file($_FILES['anhdm']['tmp_name'], $target_file)) {
            $anhdm = basename($_FILES['anhdm']['name']);
        } else {
            echo "Có lỗi khi tải lên tệp ảnh.";
        }
    }

$sql_add = "INSERT INTO danhmuc(tendm,anhdm) VALUES('$tendm','$anhdm')";
mysqli_query($conn,$sql_add);
header('location:/healthy-stuff/MVC/admin.php?mod=admin&act=adminCate');
}
 
?>



<div class="container"> 
    <h1>Thêm SP</h1>
    <form action="" method="post" enctype="multipart/form-data">
      Tên Danh Mục:  <input type="text" id="tendm" name="tendm"><br>
      Ảnh Danh Mục: <input type="file" name="anhdm" id="anhdm"><br>
      <button type="submit" name="submit">submit</button>
    </form>
</div>

<?php include 'v_page_adminFooter.php'; ?>