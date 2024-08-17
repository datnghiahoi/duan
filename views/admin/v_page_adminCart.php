<?php include 'v_page_adminHeader.php';?>
<?php 
   require_once "models/connectdb.php";
   $sql = "SELECT * FROM donhang order by id_donhang,madh,tongdonhang,phuongthuctt,hoten,email,diachi,sdt,trangthai";
   $query = mysqli_query($conn,$sql);
?>
<table class="table">
    <thead>
        <tr>
            <th>ID_Donhang</th>
            <th>Ma_DH</th>
            <th>TongTien</th>
            <th>PHuongThucTT</th>
            <th>HoTen</th>
            <th>Email</th>
            <th>DiaChi</th>
            <th>SDT</th>
            <th>Trạng Thái</th>
            <th>ChucNang</th>
        </tr>
    </thead>
    <tbody>
        <?php
    while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?php echo $row['id_donhang'] ?></td>
            <td> <?php echo $row['madh'] ?></td>
            <td> <?php echo $row['tongdonhang'] ?></td>
            <td><?php echo $row['phuongthuctt'] ?></td>
            <td> <?php echo $row['hoten'] ?></td>
            <td> <?php echo $row['email'] ?></td>
            <td> <?php echo $row['diachi'] ?></td>
            <td> <?php echo $row['sdt'] ?></td>
            <td> <?php echo $row['trangthai'] ?></td>
            
            <td><a href="?mod=admin&act=adminEditCart&id_donhang=<?php echo $row['id_donhang']; ?>"><button>Sửa</button></a>|<a href="?mod=admin&act=adminDeleteCart&id_donhang=<?php echo $row['id_donhang']; ?>"><button>Xoá</button></a></td>
        </tr>
        
       <?php } ?>
    </tbody>
</table>

<?php include 'v_page_adminFooter.php'; ?>