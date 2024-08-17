<?php include 'v_page_adminHeader.php'; ?>

<?php 
    $sql_Customer="SELECT * FROM taikhoan ORDER BY id_tk DESC";
    $query_Customer=mysqli_query($conn,$sql_Customer);

?>

            <h5 class="m-0 ">Danh sách tài khoản người dùng</h5>
            
            <table class="table table-striped table-checkall">
                <thead>
                  
                    <tr>
                        
                        <th scope="col">ID</th>
                        <th scope="col">Tên tài khoản</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mật Khẩu</th>
                        <th scope="col">SDT</th>
                        <th scope="col" >Role</th>
                    </tr>
                </thead>
                <tbody>
                      <?php 
                    
                    while($row_Customer=mysqli_fetch_array($query_Customer)){
                    
                    ?>
                    <tr>
                        
                        <th scope="row"><?php echo $row_Customer['id_tk'] ?></th>
                        <td><?php echo $row_Customer['tentk'] ?></td>
                        <td><?php echo $row_Customer['email'] ?></td>
                        <td><?php echo ($row_Customer['matkhau']) ?></td>
                        <td><?php echo $row_Customer['sdt'] ?></td>
                        <td><?php echo $row_Customer['role'] ?></td>
                        <td>
                        <a href="?mod=admin&act=adminDeleteUser&id_tk=<?php echo $row_Customer['id_tk'];?>">Xóa</a>

                        </td>
                    </tr>
              <?php }?>
                </tbody>
            </table>
            

<?php include 'v_page_adminFooter.php'; ?>