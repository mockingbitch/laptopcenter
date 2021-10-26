
<?php include 'include/sidebar.php' ?>
<?php include '../classes/sanpham.php'; ?>
<?php
$sanpham = new sanpham();

if(isset($_GET['xoasanpham'])) {
    $id = $_GET['xoasanpham'];
    $xoasanpham = $sanpham->xoa_sanpham($id);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 align="center" style="text-shadow: 1px 1px 5px grey;">Danh sách sản phẩm</h3>
            <?php
            if(isset($xoasanpham)){
                echo $xoasanpham;
            }
            ?>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Mô tả sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Hình ảnh</th>
                    <th>Sửa</th>
                    <th>Xoá</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $show_sanpham= $sanpham->show_sanpham();
                if ($show_sanpham) {
                    $i = 0;
                    while ($result=$show_sanpham->fetch_assoc()) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $result['idsanpham']; ?></td>
                            <td><?php echo $result['tensanpham']; ?></td>
                            <td><?php echo $result['mota']; ?></td>
                            <td><?php echo $result['gia']; ?></td>
                            <td><?php echo $result['soluong']; ?></td>
                            <td><img width="100px" src="uploads/<?php echo $result['hinhanh']; ?>" alt=""></td>
                            <td align="left"><a href="suasanpham.php?idsanpham=<?php echo $result['idsanpham']; ?>"><img width="25" src="images/edit.png" alt=""></a></td>
                            <td align="left"><a onclick="return confirm('Bạn muốn xoá sản phẩm này?');" href="?xoasanpham=<?php echo $result['idsanpham']; ?>"><img width="25" src="images/delete.png" alt=""></a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>