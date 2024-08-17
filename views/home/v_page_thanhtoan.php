<?php include 'v_page_header.php' ?>
<?php include 'v_page_navBar.php' ?>

<style>
   /* Style for formCheckout container */
.formCheckout {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Style for order heading */
.ttdh {
    text-align: center;
    margin-bottom: 20px;
}

/* Style for order details */
.mdh {
    margin-bottom: 20px;
}

/* Style for information labels */
.info label {
    display: block;
    font-weight: bold;
}

/* Style for information values */
.info label span {
    font-weight: normal;
}

/* Style for payment method */
.info h5 {
    margin-top: 20px;
    font-weight: bold;
}

/* Style for payment method text */
.info p {
    font-style: italic;
}

</style>



<div class="formCheckout">
<h3 class="ttdh">THÔNG TIN ĐƠN HÀNG</h3>
    <?php
    if (isset($_SESSION['id_donhang']) && ($_SESSION['id_donhang'] > 0)) {
        $orderinfo =  getorderinfo($_SESSION['id_donhang']);
        if (count($orderinfo) > 0)
    ?>
        <div class="mdh">
            <h4>Mã đơn hàng:</h4> <?= $orderinfo[0]['madh'] ?>
        </div>

        <div class="info">
        <div class="mb-3">
            <label for="tentk" class="form-label"><b>Họ tên:</b> <?= $orderinfo[0]['hoten'] ?></label>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><b>Email:</b> <?= $orderinfo[0]['email'] ?></label>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label"><b>Địa chỉ:</b> <?= $orderinfo[0]['diachi'] ?></label>
        </div>
        <div class="mb-3">
            <label for="sdt" class="form-label"><b>Số điện thoại:</b> <?= $orderinfo[0]['sdt'] ?></label>
        </div>
        <h5>Phương thức thanh toán</h5>
        <?php
        switch ($orderinfo[0]['phuongthuctt']) {
            case '1':
                $txtmess = "Tiền mặt";
                break;
            case '2':
                $txtmess = "Chuyển khoản";
                break;
            case '3':
                $txtmess = "MoMo";
                break;
            default:
                $txtmess = "Vui lòng chọn phương thức thanh toán";
        }
        echo $txtmess;
        ?>
        </div>
        
</div>
<?php } ?>






<?php
// echo var_dump($_SESSION['giohang']);
if (isset($_SESSION['id_donhang']) && ($_SESSION['id_donhang'] > 0)) {


    $getshowdonhang = getshowdonhang($_SESSION['id_donhang']);
    if ((isset($getshowdonhang)) && (count($getshowdonhang) > 0)) {
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
       
        </tr>
    </thead>';
        $stt = 1;
        $tong = 0;
        foreach ($getshowdonhang as $sp) {
            $tt = $sp['slsp'] * $sp['dongia'];
$tong += $tt;
            echo '<tbody>
    <tr>
        <th>' . ($stt + 1) . '</th>
        <td><img src="views/images/' . $sp['tensp'] . '" width="75">' . $sp['anhsp'] . '</td>
        <td>' . $sp['dongia'] . '</td>
        <td>' . $sp['slsp'] . '</td>        
        <td>' . $tt . '</td>
      

     </tr>
     
    </tbody>';
            $stt++;
        }
        echo '<tr class="table-secondary">
              <th colspan="5">Tổng giá trị đơn hàng: </th>
              <th>VND ' . $tong . '</th>
              <td></td>
              </tr>';
              
        echo '</table>
        </div>';
    }
} else {
    echo '<a href="index.php">Tiếp tục mua?</a>';
}
?>

<br>




<?php include 'v_page_footer.php' ?>