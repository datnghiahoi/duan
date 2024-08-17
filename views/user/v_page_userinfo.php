<?php include 'views/home/v_page_header.php' ?>
<h1>Thông tin người dùng </h1>
<div class="user-info">
    
    <?php
    require_once "models/connectdb.php";

    if (isset($_GET['id_tk'])) {
        $id_tk = $_GET['id_tk'];

        // Lấy thông tin tài khoản từ CSDL dựa trên id_tk
        $sql_getTaiKhoan = "SELECT * FROM taikhoan WHERE id_tk = ? LIMIT 1";
        $row = pdo_query_one($sql_getTaiKhoan, $id_tk);

        // Kiểm tra xem có dữ liệu hay không
        if ($row) {

            echo "<table class='user-info-table'>";
           
            echo "<tr><td>ID</td><td>" . $row["id_tk"] . "</td></tr>";
            echo "<tr><td>Tên người dùng</td><td>" . $row["tentk"] . "</td></tr>";
            echo "<tr><td>Email</td><td>" . $row["email"] . "</td></tr>";
            echo "<tr><td>Số điện thoại</td><td>" . $row["sdt"] . "</td></tr>";
            // Hiển thị các thông tin khác nếu cần
            echo "</table>";
        } else {
            echo "<p>Không có thông tin người dùng.</p>";
        }
    } else {
        echo "<p>Không có thông tin người dùng.</p>";
    }
    ?>
</div>
<?php include 'views/home/v_page_footer.php' ?>















































<style>
    .user-info-table {
    width: 100%;
    border-collapse: collapse;
}

.user-info-table th, .user-info-table td {
    border: 1px solid #000;
    padding: 8px;
}

.user-info-table th {
   
    text-align: left;
}



.user-info-table tr:hover {
    background-color: #f2f2f2;
}
h1{
    text-align: center;
}

</style>