<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- icon boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./views/css/style.css">
</head>

<body>

    <div class="row">
        <div class="col-md-2 bg-dark text-white p-4 ">
            <a class="text-decoration-none text-white" href=""><img src="./content/images/healthy-stuff-logo-nobg.png" alt="" width="100%"></a>
            <hr>
            <p><i class="bi bi-tag-fill me-2"></i><a class="text-decoration-none text-white"
                    href="?mod=admin&act=adminCate"> Quản lý
                    danh mục</a></p>
            <p><i class="bi bi-box-seam me-2"></i><a class="text-decoration-none text-white"
                    href="?mod=admin&act=adminPro"> Quản lý
                    sản phẩm</a></p>
            <p><i class="bi bi-people-fill me-2"></i><a class="text-decoration-none text-white" href="?mod=admin&act=adminUser"> Quản lý
                    người dùng</a></p>
            <p><i class="bi bi-cart-fill me-2"></i><a class="text-decoration-none text-white" href="?mod=admin&act=adminCart"> Quản lý đơn
                    hàng</a></p>
            <p><i class="bi bi-chat-left-text-fill me-2"></i><a class="text-decoration-none text-white"
                    href="?mod=admin&act=adminComment"> Quản lý bình luận</a></p>
            <hr>
            <div class="text-center">
                <a href="index.php?mod=users&act=login" class="btn btn-success">Đăng xuất</a>
            </div>
        </div>
        <div class="col-md-10 p-0">
            <div class="shadow bg-success text-white d-flex justify-content-between align-content-center  p-3 pb-1">
                <p>TRANG QUẢN TRỊ WEBSITE HEALTHY STUFF</p>
                <div><h1>Admin</h1></div>
            </div>