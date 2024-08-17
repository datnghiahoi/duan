<?php include 'views/home/v_page_header.php' ?>
<?php

// Kết nối đến cơ sở dữ liệu và lấy thông tin người dùng

require_once "models/connectdb.php";

// Kiểm tra nếu có tham số id_tk được truyền qua URL
if (isset($_GET['id_tk'])) {
    $id_tk = $_GET['id_tk'];
    
    // Lấy thông tin tài khoản từ CSDL dựa trên id_tk
    $sql_getTaiKhoan = "SELECT * FROM taikhoan WHERE id_tk = ? LIMIT 1";
    $row = pdo_query_one($sql_getTaiKhoan, $id_tk);
}

// Xử lý khi người dùng nhấn nút "Thay đổi"
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $sdt = $_POST['sdt'];
    $id_tk = $_POST['id'];

    // Cập nhật thông tin tài khoản vào CSDL
    $sql_update = "UPDATE taikhoan SET email = ?, matkhau = ?, sdt = ? WHERE id_tk = ?";
    pdo_execute($sql_update, $email, $matkhau, $sdt, $id_tk);

    // Hiển thị thông báo và chuyển hướng người dùng sau khi cập nhật thành công
    echo '<script>alert("Cập nhật thông tin tài khoản thành công!");</script>';
    echo '<script>window.location.href = "index.php";</script>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Tài Khoản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Thay đổi thông tin tài khoản</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?mod=users&act=tdthongtin&id_tk=<?=  $row['id_tk'];?>" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id_tk']; ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>">
        <label for="matkhau">Mật khẩu:</label>
        <input type="password" id="matkhau" name="matkhau" value="<?php echo $row['matkhau']; ?>">
        <label for="sdt">Số điện thoại:</label>
        <input type="tel" id="sdt" name="sdt" value="<?php echo $row['sdt']; ?>">
        <input type="submit" name="submit" value="Thay đổi">
    </form>
</body>
</html>
<?php include 'views/home/v_page_footer.php' ?>
