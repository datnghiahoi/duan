<?php
// Hàm để xóa tài khoản người dùng từ cơ sở dữ liệu
function xoaTaiKhoan($conn, $accountId) {
    // Chuyển đổi ID tài khoản sang kiểu số nguyên để đảm bảo an toàn cho truy vấn
    $accountId = intval($accountId);

    // Xây dựng truy vấn xóa dữ liệu từ bảng taikhoan
    $sql = "DELETE FROM taikhoan WHERE id_tk = $accountId";

    // Thực thi truy vấn
    if (mysqli_query($conn, $sql)) {
        // Nếu xóa thành công, trả về true
        return true;
    } else {
        // Nếu xóa không thành công, in ra lỗi và trả về false
        echo "Lỗi: " . mysqli_error($conn);
        return false;
    }
}

// Sử dụng hàm để xóa tài khoản người dùng
if (isset($_GET['id_tk']) && !empty($_GET['id_tk'])) {
    // Gọi hàm xóa tài khoản người dùng với ID được truyền qua URL
    $xoaThanhCong = xoaTaiKhoan($conn, $_GET['id_tk']);

    // Kiểm tra xem việc xóa đã thành công hay không
    if ($xoaThanhCong) {
        // Nếu xóa thành công, chuyển hướng về trang danh sách tài khoản
        header("Location: ?mod=admin&act=adminUser");
        exit; // Kết thúc kịch bản
    } else {
        // Nếu xóa không thành công, có thể thực hiện xử lý khác tùy thuộc vào yêu cầu của bạn
        // Ví dụ: hiển thị thông báo lỗi cho người dùng
        echo "Xóa tài khoản không thành công!";
    }
}
?>
