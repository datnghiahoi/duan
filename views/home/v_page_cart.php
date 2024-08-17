<?php include 'v_page_header.php' ?>
<?php include 'v_page_navBar.php' ?>

<style>
    .line-checkout{
        height: 3px;
        width: 100%;
        background-color: #00000020;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .container-table{
        margin: auto;
        width: 90%;
    }

    .input-text{
        box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
        border: 1px solid #00000050;
        padding: 10px;
        width: 100%;
    }

    .btn-more {
        
        text-align: center;
        padding: 5px;
        width: 15%;
        border: 3px solid #5a94f4;
        cursor: pointer;
        font-weight: bolder;
        transition: all 0.3s ease;
        margin-left: 35px;
    }

    .btn-more:hover{
        color: white;
        background-color: #59a4f4;
        transform: scale(1.1)
    }

    .btn-more:active{
        transform: scale(0.9);
    }
    
    .tr-head {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border: 1px solid black;
        color: white;
        background-color: #59a4f4;
    }

    table{
        font-size: medium;
    }

    /* Style for form container */
.formCheckout {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Style for form headings */
.formCheckout h4 {
    margin-bottom: 10px;
}

/* Style for form inputs */
.input-text {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Style for checkbox labels */
.phuongthuctt label {
    display: block;
    margin-bottom: 10px;
}

/* Style for submit button */
.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff0000;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

/* Hover effect for submit button */
.btn:hover {
    background-color: #cc0000;
}

</style>
<?php
// echo var_dump($_SESSION['giohang']);
if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
    echo '
<div class="container-table">
    <table class="table">
    <thead class="table">
        <tr> 
            <th scope="col">STT</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thành tiền</th>
            <th scope="col">Chức Năng</th>
           
        </tr>
    </thead>';

    $stt = 0;
    $tong = 0;
    foreach ($_SESSION['giohang'] as $sp) {
        $tt = $sp[3] * $sp[4];
        $tong += $tt;
        echo '<tbody>
          <tr>
        
        <td>' . ($stt + 1) . '</td>
        <td><img src="views/images/' . $sp[1] . '" width="100"> ' . $sp[2] . '</td>
        <td >' . $sp[3] . '</td>
        <td>' . $sp[4] . '</td>        
        <td>' . $tt . '</td>
        <td>
        <div class="td-delete-father">
        <a href="?mod=pages&act=deletecart&stt=' . $stt . '"class="td-delete"><img class="iconDelete" src="" width="20">🗑️</a>
        </div>
        </td>
        
     </tr>
     
    </tbody>
    ';
        $stt++;
    }
    echo '<tr class="table-secondary">
    <th colspan="5">Tổng giá trị đơn hàng: </th>
    <th>VND ' . $tong . '</th>
    <td></td>
    </tr>';

    echo '</table>
    ';
}
?>
<a href="index.php" class="btn-more"><- TIẾP TỤC XEM SẢN PHẨM</a>
<a href="?mod=pages&act=deletecart">Xóa tất</a>



<div class="formCheckout">

    <form action="?mod=pages&act=thanhtoan" method="POST">
    <h4>THÔNG TIN ĐẶT HÀNG</h4>
        <div class="mb-3">
            <input type="text" class="input-text" name="hoten" placeholder="Nhập họ tên...">
        </div>
        <div class="mb-3">
            
            <input type="text" class="input-text" name="diachi" placeholder="Nhập địa chỉ...">
        </div>
        <div class="mb-3">
            
            <input type="email" class="input-text" name="email" placeholder="Nhập emaill...">
        </div>
        <div class="mb-3">
            <input type="text" class="input-text" name="sdt" placeholder="Nhập số điện thoại...">
        </div>

        <div class="phuongthuctt">
            <h4>Phương thức thanh toán</h4>
            <label for="">Tiền mặt: </label>
            <input type="checkbox" name="pttt" value="1" class="form-check-input">

            <label for="">Chuyển khoản: </label>
            <input type="checkbox" name="pttt" value="2" class="form-check-input">

            <label for="">MoMo: </label>
            <input type="checkbox" name="pttt" value="3" class="form-check-input">
        </div>

        <input type="submit" name="thanhtoan" class="btn btn-danger" value="Thanh toán">
        <input type="hidden" name="tongdonhang" value="<?=$tong?>">
    </form>
</div>


</div>


<?php include 'v_page_footer.php' ?>